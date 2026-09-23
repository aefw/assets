/**
 * UUID v7-style Generator (JavaScript)
 * Compatible dengan PHP next_uuid() implementation
 *
 * Format: ttttttt-rrrr-7xxx-yxxx-rrrrrrrrrrrr
 * - t = timestamp (milliseconds)
 * - r = cryptographically secure random
 *
 * Usage:
 *   var uuid = generateUUID();
 *   console.log(uuid); // "1a2b3c4-5d6e-7f89-a012-3456789abcde"
 */

function generateUUID() {
    // Timestamp component (milliseconds)
    var timestamp_ms = Date.now();
    var timestamp_hex = (timestamp_ms & 0x0FFFFFFF).toString(16).padStart(7, '0');

    // Random component (cryptographically secure)
    var random_hex;
    if (typeof crypto !== 'undefined' && crypto.getRandomValues) {
        // Modern browsers - cryptographically secure
        var random_bytes = new Uint8Array(10);
        crypto.getRandomValues(random_bytes);
        random_hex = Array.from(random_bytes)
            .map(function(b) { return b.toString(16).padStart(2, '0'); })
            .join('');
    } else {
        // Fallback (not cryptographically secure - avoid jika mungkin)
        random_hex = '';
        for (var i = 0; i < 20; i++) {
            random_hex += Math.floor(Math.random() * 16).toString(16);
        }
    }

    // Format: ttttttt-rrrr-7xxx-yxxx-rrrrrrrrrrrr
    var uuid = [
        timestamp_hex.substring(0, 7),
        random_hex.substring(0, 4),
        '7' + random_hex.substring(4, 7),
        ((parseInt(random_hex.substring(7, 8), 16) & 0x3) | 0x8).toString(16) + random_hex.substring(8, 11),
        random_hex.substring(11, 23)
    ].join('-');

    return uuid;
}

/**
 * Validate UUID format (client-side basic validation)
 */
function isValidUUID(uuid) {
    if (!uuid || typeof uuid !== 'string') return false;

    // Format: xxxxxxx-xxxx-7xxx-yxxx-xxxxxxxxxxxx
    var pattern = /^[0-9a-f]{7}-[0-9a-f]{4}-7[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i;
    return pattern.test(uuid);
}

/**
 * Generate UUID dengan retry (untuk handle collision - jarang terjadi)
 */
function generateUUIDWithRetry(maxAttempts) {
    maxAttempts = maxAttempts || 10;
    var usedUUIDs = {}; // Local cache untuk avoid duplicate di session

    for (var i = 0; i < maxAttempts; i++) {
        var uuid = generateUUID();

        // Check local cache
        if (!usedUUIDs[uuid]) {
            usedUUIDs[uuid] = true;
            return uuid;
        }

        // Collision di local cache - sleep 1ms dan retry
        // (browser tidak support usleep, pakai busy wait)
        var start = Date.now();
        while (Date.now() - start < 1) { /* busy wait 1ms */ }
    }

    // Fallback - extremely unlikely
    console.error('UUID generation failed after ' + maxAttempts + ' attempts');
    return generateUUID(); // Return anyway
}

// Export untuk Node.js (optional)
if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        generateUUID: generateUUID,
        isValidUUID: isValidUUID,
        generateUUIDWithRetry: generateUUIDWithRetry
    };
}
