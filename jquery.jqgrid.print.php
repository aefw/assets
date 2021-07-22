<!--<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-git.min.js"></script>-->
<script type="text/javascript" src="https://raw.githubusercontent.com/gabceb/jquery-browser-plugin/master/dist/jquery.browser.min.js"></script>
<script type="text/javascript" src="http://github.com/erikzaadi/jQueryPlugins/raw/master/jQuery.printElement/jquery.printElement.min.js"></script>
<script type="text/javascript">
function setPrintGrid(gid, pid, pgTitle) {
//*
	// print button title.
	var btnTitle = 'Print Grid';
	// setup print button in the grid top navigation bar.
	$('#' + gid).jqGrid('navSeparatorAdd', '#' + gid + '_toppager_left', {sepclass :'ui-separator'});
	$('#' + gid).jqGrid('navButtonAdd', '#' + gid + '_toppager_left', {caption: '', title: btnTitle, position: 'last', buttonicon: 'ui-icon-print', onClickButton: function() { PrintGrid(); } });

	// setup print button in the grid bottom navigation bar.
	$('#' + gid).jqGrid('navSeparatorAdd', '#' + pid, {sepclass : "ui-separator"});
	$('#' + gid).jqGrid('navButtonAdd', '#' + pid, {caption: '', title: btnTitle, position: 'last', buttonicon: 'ui-icon-print', onClickButton: function() { PrintGrid(); } });

	function PrintGrid(){
		// attach print container style and div to DOM.
		$('head').append('<style type="text/css">.prt-hide {display:none;}</style>');
		$('body').append('<div id="prt-container" class="prt-hide"></div>');

		// copy and append grid view to print div container.
		$('#gview_' + gid).clone().appendTo('#prt-container').css({'page-break-after':'auto'});
		// remove navigation divs.
		$('#prt-container div').remove('.ui-jqgrid-toppager,.ui-jqgrid-titlebar,.ui-jqgrid-pager');
		// print the contents of the print container.    
		$('#prt-container').printElement({pageTitle:pgTitle, overrideElementCSS:[{href:'css/print-container.css', media:'print'}]});
		// remove print container style and div from DOM after printing is done.
		$('head style').remove();
		$('body #prt-container').remove();
	}
//*/
}
</script>
