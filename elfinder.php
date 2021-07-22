<?php if( $asset_cloud ) { ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/elfinder/2.1.57/css/elfinder.full.min.css" integrity="sha512-2BEQMlS43cjSDa4Ax039/3wrwVunP9JLCiRiQyCjnAwc5WAMPSYbWdIaIVdUmrr9CLbjC17wfZtgvQNjo3UhnQ==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elfinder/2.1.57/js/elfinder.full.min.js" integrity="sha512-9L1YTgWTLhrR+jiZgXw+TUsVyiwOsl39FRdCZmSrjA1+9dTG8iXwvk/6NnvelWJwPhMJG6kSvxa/X0jbjMX5lQ==" crossorigin="anonymous"></script>
<?php } else { ?>
    <link rel="stylesheet" href="{asset_url}cloud/elFinder/build/css/elfinder.min.css" />
    <script src="{asset_url}cloud/elFinder/build/js/elfinder.min.js"></script>
<?php } ?>

<link href="{template_url}jqueryui/jquery-ui.min.css" rel="stylesheet" />
<script src="{template_url}jqueryui/jquery-ui.min.js"></script>
<style>
.elfinder-cwd-file.ui-state-hover { border: 0px; }
</style>
