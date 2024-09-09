// praytimes-lib.js

//export default
class PrayTimesLib {
  constructor(method = 'ISNA') {
    // Inisialisasi PrayTimes
    this.prayTimes = new PrayTimes(method);
  }

  // Fungsi untuk menyesuaikan waktu dengan menambah atau mengurangi menit
  adjustTime(time, adjustment) {
    const [hours, minutes] = time.split(':').map(Number);
    const date = new Date();
    date.setHours(hours);
    date.setMinutes(minutes + adjustment);

    const adjustedHours = String(date.getHours()).padStart(2, '0');
    const adjustedMinutes = String(date.getMinutes()).padStart(2, '0');
    return `${adjustedHours}:${adjustedMinutes}`;
  }

  // Fungsi untuk menghitung waktu midnight (tengah malam) sebagai titik tengah antara Maghrib dan Fajr
  calculateMidnight(date, coordinates, timezone) {
    // Dapatkan waktu shalat untuk Maghrib dan Fajr
    const times = this.prayTimes.getTimes(date, coordinates, timezone);
    
    const maghribTime = times.maghrib;
    const nextDayFajrTime = this.prayTimes.getTimes(new Date(date.getFullYear(), date.getMonth(), date.getDate() + 1), coordinates, timezone).fajr;

    // Konversi waktu Maghrib dan Fajr menjadi menit
    const maghribMinutes = this.timeToMinutes(maghribTime);
    const fajrMinutes = this.timeToMinutes(nextDayFajrTime);

    // Hitung titik tengahnya
    const midnightMinutes = Math.floor((maghribMinutes + fajrMinutes) / 2);

    // Kembalikan waktu midnight dalam format jam dan menit
    return this.minutesToTime(midnightMinutes);
  }

  // Fungsi bantu untuk mengkonversi waktu (hh:mm) menjadi menit
  timeToMinutes(time) {
    const [hours, minutes] = time.split(':').map(Number);
    return hours * 60 + minutes;
  }

  // Fungsi bantu untuk mengkonversi menit kembali ke format waktu (hh:mm)
  minutesToTime(minutes) {
    const hours = Math.floor(minutes / 60);
    const mins = minutes % 60;
    return `${String(hours).padStart(2, '0')}:${String(mins).padStart(2, '0')}`;
  }

  // Fungsi untuk menghitung waktu shalat dan menerapkan penyesuaian
  getPrayerTimesWithAdjustment(date, coordinates, timezone, adjustments = {}) {
    // Dapatkan waktu shalat
    const times = this.prayTimes.getTimes(date, coordinates, timezone);

    // Hitung waktu midnight secara manual
    const midnightTime = this.calculateMidnight(date, coordinates, timezone);

    // Tambahkan waktu midnight ke hasil waktu shalat
    times.midnight = midnightTime;

    // Terapkan penyesuaian waktu shalat
    for (let prayer in times) {
      times[prayer] = this.adjustTime(times[prayer], adjustments[prayer] || 0);
    }

    return times;
  }
}
