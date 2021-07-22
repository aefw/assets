<?php if( $asset_cloud ) { ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/nestedSortable/2.0.0/jquery.mjs.nestedSortable.min.js" integrity="sha512-uAt5HkX8rwCV19v9HIeAocLUfQvQDfX0zuaMQr5HhGZc6GwhJoe9hzJYBxzsWTaDSMl4FazGovJwUbOA8rGuog==" crossorigin="anonymous"></script>
<?php } else { ?>
	<script src="{asset_url}cloud/nestedSortable/jquery.mjs.nestedSortable.js"></script>
<?php } ?>
<script>
function nestedSortableDump(arr,level) {
	var dumped_text = "";
	if(!level) level = 0;
	//The padding given at the beginning of the line.
	var level_padding = "";
	for(var j=0; j<(level+1); j++) level_padding += "    ";
	if(typeof(arr) == 'object') { //Array/Hashes/Objects
		for(var item in arr) {
			var value = arr[item];
			if(typeof(value) == 'object') { //If it is an array,
				dumped_text += level_padding + "'" + item + "' ...\n";
				dumped_text += dump(value,level+1);
			} else {
				dumped_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
			}
		}
	} else { //Strings/Chars/Numbers etc.
		dumped_text = "===>"+arr+"<===("+typeof(arr)+")";
	}
	return dumped_text;
}
</script>
<style>
.mjs-nestedSortable-error {
	background: #fbe3e4;
	border-color: transparent;
}

ol.mjs-nestedSortable {
	margin: 0;
	padding: 0;
	padding-left: 30px;
}

ol.mjs-nestedSortable, ol.mjs-nestedSortable ol {
	margin: 0 0 0 25px;
	padding: 0;
	list-style-type: none;
}

ol.mjs-nestedSortable {
	margin: 0;
}

ol.mjs-nestedSortable li {
	margin: 5px 0 0 0;
	padding: 0;
}

ol.mjs-nestedSortable li div  {
	border: 1px solid #d4d4d4;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	border-color: #D4D4D4 #D4D4D4 #BCBCBC;
	padding: 6px;
	margin: 0;
	background: #f6f6f6;
	background: -moz-linear-gradient(top,  #ffffff 0%, #f6f6f6 47%, #ededed 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(47%,#f6f6f6), color-stop(100%,#ededed));
	background: -webkit-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#ededed 100%);
	background: -o-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#ededed 100%);
	background: -ms-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#ededed 100%);
	background: linear-gradient(to bottom,  #ffffff 0%,#f6f6f6 47%,#ededed 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=0 );
}

ol.mjs-nestedSortable li.mjs-nestedSortable-branch div {
	background: -moz-linear-gradient(top,  #ffffff 0%, #f6f6f6 47%, #f0ece9 100%);
	background: -webkit-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#f0ece9 100%);
}

ol.mjs-nestedSortable li.mjs-nestedSortable-leaf div {
	background: -moz-linear-gradient(top,  #ffffff 0%, #f6f6f6 47%, #bcccbc 100%);
	background: -webkit-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#bcccbc 100%);

}

ol.mjs-nestedSortable li.mjs-nestedSortable-collapsed.mjs-nestedSortable-hovering div {
	border-color: #999;
	background: #fafafa;
}
</style>
