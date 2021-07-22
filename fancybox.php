<?php if( $asset_cloud ) { ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>
<?php } else { ?>
    <link rel="stylesheet" href="{asset_url}cloud/fancybox/dist/jquery.fancybox.min.css" />
    <script src="{asset_url}cloud/fancybox/dist/jquery.fancybox.min.js"></script>
<?php } ?>
<!-- Style bellow use for hidden script and style tag content -->
<style>
/*
.fancybox-slide script,
.fancybox-slide style { display: none; }
.fancybox-container { z-index: 9999; }
/**/
</style>
