<?php if( $asset_cloud ) { ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.9.2/jquery.ui.position.min.js" integrity="sha512-878jmOO2JNhN+hi1+jVWRBv1yNB7sVFanp2gA1bG++XFKNj4camtC1IyNi/VQEhM2tIbne9tpXD4xaPC4i4Wtg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.9.2/jquery.contextMenu.min.css" integrity="sha512-SWjZLElR5l3FxoO9Bt9Dy3plCWlBi1Mc9/OlojDPwryZxO0ydpZgvXMLhV6jdEyULGNWjKgZWiX/AMzIvZ4JuA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.9.2/jquery.contextMenu.min.css" integrity="sha512-SWjZLElR5l3FxoO9Bt9Dy3plCWlBi1Mc9/OlojDPwryZxO0ydpZgvXMLhV6jdEyULGNWjKgZWiX/AMzIvZ4JuA==" crossorigin="anonymous" />
<?php } else { ?>
    <script src="{asset_url}cloud/jQuery-contextMenu/dist/jquery.ui.position.min.js" type="text/javascript"></script>
    <script src="{asset_url}cloud/jQuery-contextMenu/dist/jquery.contextMenu.min.js" type="text/javascript"></script>
    <link href="{asset_url}cloud/jQuery-contextMenu/dist/jquery.contextMenu.min.css" rel="stylesheet" type="text/css" />
<?php } ?>
<style>
.context-menu-item { margin: 0px; }
</style>
