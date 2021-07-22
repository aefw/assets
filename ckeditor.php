<?php if( $asset_cloud ) { ?>
	<script src="https://cdn.ckeditor.com/4.15.1/full-all/ckeditor.js"></script>
	<script src="https://cdn.ckeditor.com/4.15.1/full-all/adapters/jquery.js"></script>
	<script>
	CKEDITOR.env.isCompatible = true;
	CKEDITOR.config.allowedContent = {
	    $1: {
	        elements: CKEDITOR.dtd,
	        attributes: true,
	        styles: true,
	        classes: true
	    }
	};
	CKEDITOR.config.disallowedContent = '*{display*}';
	CKEDITOR.dtd.$removeEmpty['a'] = false;
	CKEDITOR.dtd.$removeEmpty['i'] = false;
	CKEDITOR.dtd.$removeEmpty['span'] = false;
	CKEDITOR.config.contentsCss = [
		'https://cdn.jsdelivr.net/npm/uikit/dist/css/uikit.min.css',
		'https://fonts.googleapis.com/icon?family=Material+Icons'
	];
	/*
	CKEDITOR.scriptLoader.load([
		'https://cdn.jsdelivr.net/npm/uikit/dist/js/uikit.min.js',
	], function( completed, failed ) {
		alert( 'Number of scripts loaded: ' + completed.length );
		alert( 'Number of failures: ' + failed.length );
	});
	/**/
	CKEDITOR.plugins.addExternal('ckeditor_wiris',  'https://ckeditor.com/docs/ckeditor4/latest/examples/assets/plugins/ckeditor_wiris/', 'plugin.js');
	CKEDITOR.plugins.addExternal('codemirror',      'https://cdn.jsdelivr.net/npm/ckeditor-codemirror-plugin/codemirror/', 'plugin.js');
	CKEDITOR.plugins.addExternal('youtube',         'https://cdn.jsdelivr.net/npm/ckeditor-youtube-plugin/youtube/', 'plugin.js');

	CKEDITOR.plugins.addExternal('fakeobjects',     'https://cdn.jsdelivr.net/gh/ckeditor/ckeditor4/plugins/fakeobjects/', 'plugin.js');
	CKEDITOR.plugins.addExternal('widget',          'https://cdn.jsdelivr.net/gh/ckeditor/ckeditor4/plugins/widget/', 'plugin.js');
	CKEDITOR.plugins.addExternal('lineutils',       'https://cdn.jsdelivr.net/gh/ckeditor/ckeditor4/plugins/lineutils/', 'plugin.js');
	CKEDITOR.plugins.addExternal('widgetselection', 'https://cdn.jsdelivr.net/gh/ckeditor/ckeditor4/plugins/widgetselection/', 'plugin.js');
	CKEDITOR.plugins.addExternal('notification',    'https://cdn.jsdelivr.net/gh/ckeditor/ckeditor4/plugins/notification/', 'plugin.js');
	CKEDITOR.plugins.addExternal('autogrow',        'https://cdn.jsdelivr.net/gh/ckeditor/ckeditor4/plugins/autogrow/', 'plugin.js');

	CKEDITOR.plugins.addExternal('mediaelement',    'https://cdn.jsdelivr.net/gh/aldoexpert/ckeditor-mediaelement/', 'plugin.js');
	CKEDITOR.plugins.addExternal('readmore',        'https://cdn.jsdelivr.net/gh/aldoexpert/ckeditor-readmore/', 'plugin.js');
	CKEDITOR.plugins.addExternal('toolbarfixed',    'https://cdn.jsdelivr.net/gh/aldoexpert/ckeditor-toolbarfixed-uikit/', 'plugin.js');
	CKEDITOR.config.extraPlugins =  'codemirror,ckeditor_wiris,youtube,' +
									'fakeobjects,widget,lineutils,widgetselection,notification,autogrow,' +
									'mediaelement,readmore,toolbarfixed';
	CKEDITOR.config.youtube_width = '100%';
	CKEDITOR.config.youtube_responsive = true;
	CKEDITOR.config.youtube_disabled_fields = ['txtEmbed'];
	CKEDITOR.config.mediaelement = {};
	CKEDITOR.config.mediaelement.styleUrl = 'https://cdn.jsdelivr.net/npm/mediaelement/build/mediaelementplayer.min.css' ;
	CKEDITOR.config.mediaelement.scriptUrl = 'https://cdn.jsdelivr.net/npm/mediaelement/build/mediaelement-and-player.min.js' ;
	</script>
<?php } else { ?>
	<script src="{asset_url}local/ckeditor/ckeditor.js"></script>
	<script src="{asset_url}local/ckeditor/adapters/jquery.js"></script>
	<script>
	CKEDITOR.env.isCompatible = true;
	CKEDITOR.config.allowedContent = {
	    $1: {
	        elements: CKEDITOR.dtd,
	        attributes: true,
	        styles: true,
	        classes: true
	    }
	};
	CKEDITOR.config.disallowedContent = '*{display*}';
	CKEDITOR.dtd.$removeEmpty['a'] = false;
	CKEDITOR.dtd.$removeEmpty['i'] = false;
	CKEDITOR.dtd.$removeEmpty['span'] = false;
	CKEDITOR.config.contentsCss = [ 'https://cdn.jsdelivr.net/npm/uikit/dist/css/uikit.min.css', '' ];
	CKEDITOR.config.extraPlugins  = 'ckeditor_wiris,codemirror,youtube,fakeobjects,widget,lineutils,widgetselection,notification,autogrow,mediaelement,readmore,toolbarfixed,wordcount';/*mathjax,autogrow,fixed*/
	CKEDITOR.config.youtube_width = '100%';
	CKEDITOR.config.youtube_responsive = true;
	CKEDITOR.config.youtube_disabled_fields = ['txtEmbed'];
	CKEDITOR.config.mediaelement = {};
	CKEDITOR.config.mediaelement.styleUrl = '{asset_url}mediaelement/build/mediaelementplayer.min.css' ;
	CKEDITOR.config.mediaelement.scriptUrl = '{asset_url}mediaelement/build/mediaelement-and-player.min.js' ;
	//CKEDITOR.config.mathJaxLib = '{asset_url}mathjax/MathJax.js?config=TeX-MML-AM_CHTML-full';
	//CKEDITOR.config.mathJaxLib = 'https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_CHTML';
	//CKEDITOR.config.mathJaxLib = 'https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_CHTML-full';
	</script>
<?php } ?>
<script>
// https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-toolbarGroups
AEFW_CKToolbarFull = [
	{ name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', /*'searchCode', 'autoFormat', 'CommentSelectedRange', 'UncommentSelectedRange',*/ 'AutoComplete', '-', 'Save', /*'NewPage', 'Preview', 'Print', '-', 'Templates'*/ ] },
	{ name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
	{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
	//{ name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },

	{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
	{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl' ] },
	{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
	{ name: 'insert', items: [ 'Image', 'Youtube', 'Mathjax', 'ckeditor_wiris_formulaEditor', 'ckeditor_wiris_formulaEditorChemistry', 'ckeditor_wiris_CAS', 'mediaelement', 'Table', 'HorizontalRule', 'SpecialChar', '-', 'readmore', '-', 'PageBreak', 'Iframe' ] },

	{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
	{ name: 'colors', items: [ 'TextColor', 'BGColor' ] },
	{ name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
];
AEFW_CKToolbarStandart = [
	{ name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', ] },
	{ name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },

	{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
	{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', ] },
	{ name: 'links', items: [ 'Link', 'Unlink', ] },
	{ name: 'insert', items: [ 'Image', 'Youtube', 'Mathjax', 'ckeditor_wiris_formulaEditor', 'ckeditor_wiris_formulaEditorChemistry', 'ckeditor_wiris_CAS', 'mediaelement', 'Table', 'HorizontalRule', 'SpecialChar', '-', 'readmore', '-', 'PageBreak', ] },

	{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
	{ name: 'colors', items: [ 'TextColor', 'BGColor' ] },
	{ name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
];
AEFW_CKToolbarBasic = [
	['Source', 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'Link', 'Unlink',
	'-', 'Image', 'Youtube', 'Mathjax', 'ckeditor_wiris_formulaEditor', 'ckeditor_wiris_formulaEditorChemistry', 'ckeditor_wiris_CAS', 'mediaelement', 'SpecialChar']
];
AEFW_CKToolbarBasicComment = [
	['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'TextColor', 'BGColor', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink',
	'-', 'Image', 'Youtube', 'Mathjax', 'ckeditor_wiris_formulaEditorChemistry', 'ckeditor_wiris_CAS', 'HorizontalRule', 'SpecialChar', ]
];
AEFW_CKToolbarNone = [
];

CKEDITOR.on( 'dialogDefinition', function(ev){
	var dialogName = ev.data.name;
	var dialogDefinition = ev.data.definition;
	if (dialogName == 'image') {
		var infoTab = dialogDefinition.getContents('info');
		console.log('infoTab: ', infoTab);
		//infoTab.remove('txtHeight');
	}
});
</script>
<style>
.cke_button__readmore_label { display: inline !important; }
</style>
