<?php if( $asset_cloud ) { ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqgrid/5.5.1/css/ui.jqgrid.min.css" integrity="sha512-G4RdYc9KUAfoTOvQ/4mSAcVxJuFIb5JvpMqN+fGHgng28lqrVOM/LUTlVEtWEciz7HCPJ/hpLvQnjdYVbpDbvg==" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqgrid/5.5.1/js/i18n/grid.locale-en.min.js" integrity="sha512-4TZxmj5NUzpv+4W1Utt/9BDRkVgqzrLx5RIW9lyQbrt3DPrKckwgETuIKrzyOdJ1dE0VcJ5phtcrHWTMHtE2dA==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqgrid/5.5.1/js/jquery.jqGrid.min.js" integrity="sha512-kitN10XjBDrndQOVFFNadAOBC4GNPiOTFg+pe2NwdjsiKycQWX7HWZYly/5jcbYdXqE1FtMP+0u4xFhtFP0ogQ==" crossorigin="anonymous"></script>
<?php } else { ?>
	<link rel="stylesheet" type="text/css" media="screen" href="{asset_url}cloud/jqGrid/css/ui.jqgrid.css" />
	<script src="{asset_url}cloud/jqGrid/js/i18n/grid.locale-en.js" type="text/javascript"></script>
	<script src="{asset_url}cloud/jqGrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>
<?php } ?>
<style>
table.group table.group { margin-left: 15px; }
</style>
<script type="text/javascript">
function afterCRUD(response, postdata){
	var success = false;
	var message = '';
	var new_id = "1";
	var dialog = false;
	var json = eval( '(' + response.responseText + ')' );
	success = json.success ;
	message = json.error ;
	dialog = json.dialog ;
	if( dialog && message!='' ) alert( message ) ;
	return [success, message, new_id];
}
</script>

<link href="{template_url}jqueryui/jquery-ui.min.css" rel="stylesheet" />
<script src="{template_url}jqueryui/jquery-ui.min.js"></script>
