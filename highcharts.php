<?php if( $asset_cloud ) { ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.2.2/highcharts.min.js" integrity="sha512-rGbwX2HebD+8leyXLc1TjqjkMMYnsGHxV6Rr4Dl0qi6EqXKw8Ox72Dg75HpRXR3qly+TbmKV1SU81VWPPpHpcQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.2.2/modules/exporting.min.js" integrity="sha512-DuFO4JhOrZK4Zz+4K0nXseP0K/daLNCrbGjSkRzK+Zibkblwqc0BYBQ1sTN7mC4Kg6vNqr8eMZwLgTcnKXF8mg==" crossorigin="anonymous"></script>
<?php } else { ?>
    <script src="{asset_url}local/highcharts/code/highcharts.js"></script>
    <script src="{asset_url}local/highcharts/code/modules/exporting.js"></script>
<?php } ?>
