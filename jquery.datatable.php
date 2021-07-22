<?php if( $asset_cloud ) { ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/ju/jszip-2.5.0/dt-1.10.22/b-1.6.5/b-html5-1.6.5/b-print-1.6.5/fc-3.3.1/fh-3.1.7/r-2.2.6/datatables.min.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/ju/jszip-2.5.0/dt-1.10.22/b-1.6.5/b-html5-1.6.5/b-print-1.6.5/fc-3.3.1/fh-3.1.7/r-2.2.6/datatables.min.js"></script>
<?php } else { ?>
    <link href="{asset_url}local/jquery.datatable/datatables.min.css" rel="stylesheet" />
    <script src="{asset_url}local/jquery.datatable/datatables.min.js" type="text/javascript"></script>
    <!--
    <link href="{asset_url}local/jquery.datatable/Responsive-2.2.6/css/responsive.jqueryui.min.css" rel="stylesheet" />
    <script src="{asset_url}local/jquery.datatable/Responsive-2.2.6/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="{asset_url}local/jquery.datatable/Responsive-2.2.6/js/responsive.jqueryui.min.js" type="text/javascript"></script>
    -->
<?php } ?>
<link href="{template_url}jqueryui/jquery-ui.min.css" rel="stylesheet" />
<script src="{template_url}jqueryui/jquery-ui.min.js"></script>
<style>
.dataTable tfoot input { margin: 0px; }
.dtr-details { width: 100%; }
</style>
