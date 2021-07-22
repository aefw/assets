<?php if( $asset_cloud ) { ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css" integrity="sha512-LT9fy1J8pE4Cy6ijbg96UkExgOjCqcxAC7xsnv+mLJxSvftGVmmc236jlPTZXPcBRQcVOWoK1IJhb1dAjtb4lQ==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js" integrity="sha512-s5u/JBtkPg+Ff2WEr49/cJsod95UgLHbC00N/GglqdQuLnYhALncz8ZHiW/LxDRGduijLKzeYb7Aal9h3codZA==" crossorigin="anonymous"></script>
<?php } else { ?>
    <link rel="stylesheet" type="text/css" href="{asset_url}cloud/jQuery-Timepicker-Addon/dist/jquery-ui-timepicker-addon.min.css" />
    <script src="{asset_url}cloud/jQuery-Timepicker-Addon/dist/jquery-ui-timepicker-addon.min.js"></script>
<?php } ?>

<link href="{template_url}jqueryui/jquery-ui.min.css" rel="stylesheet" />
<script src="{template_url}jqueryui/jquery-ui.min.js"></script>
