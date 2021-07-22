<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="{asset_url}aefw/script.js"></script>
<script src="{asset_url}aefw/number_format.js"></script>
<script src="{asset_url}aefw/nl2br.js"></script>
<script>
if ( typeof(console) === 'object' ) {
	console.log(
		"%cStop..!",
		"font-size: 38px; font-weight: bold; color: #F00; -webkit-text-stroke: 1px gray; text-shadow: 2px 2px 0 grey, -1px -1px 0 grey, 1px -1px 0 grey, -1px 1px 0 grey, 1px 1px 0 grey;"
	);
	console.log(
		"%cIni adalah fitur browser yang ditujukan untuk developer. Jika seseorang meminta Anda untuk menyalin-menempel sesuatu di sini untuk mengaktifkan fitur sesuatu atau \"meretas\" akun seseorang, ini adalah penipuan dan akan memberikannya akses ke akun Anda.",
		"font-size: 18px; color: #444;"
	);
	console.log(
		"%cLihat https://aefw.net/web/page/view/selfxss untuk informasi selengkapnya.",
		"font-size: 18px; color: #444;"
	);
	console.log(
		"%cPowered by AEFW",
		"font-size: 16px; color: #444;"
	);
}
function loading_mini(){
	return '<center><img src="{asset_url}images/indicator.gif" alt="loading" /></center>';
}
function loading_small(){
	return '<center><img src="{asset_url}images/loading_mini.gif" alt="loading" /></center>';
}
function loading(){
	return '<center><img src="{asset_url}images/loading.gif" alt="loading" /></center>';
}
function loading_big(){
	return '<center><img src="{asset_url}images/loading_big.gif" alt="loading" /></center>';
}

<?php if (function_exists('notification_add') && count( notification_add() )>0){ ?>
var xAjaxNoticeTitle = '';
var xAjaxNotice = null;
var xAjaxNoticeTimer = 15000;
var xAjaxNoticeVar = null;
function fn_xAjaxNotice(){
	if( xAjaxNotice!=null ) xAjaxNotice.abort();
	xAjaxNoticeVar = null;
    xAjaxNotice = $.ajax({
		url: "<?=site_url('aeframework/notice')?>",
		cache: false,
		dataType: "json",
		success: function(data){
			dataLength = data.data.length;
			if( data.sum > 0 ) $('title').html( '(' + data.sum + ') ' + xAjaxNoticeTitle );
			else $('title').html( xAjaxNoticeTitle );
			for(index = 0; index < dataLength; index++) {
				if( $( data.data[index].elem ).length > 0 ){
					if( data.data[index].count!=false && data.data[index].count > 0 ){
						$( data.data[index].elem ).html( data.data[index].count );
						$( data.data[index].elem ).fadeIn('slow');
					}else if( data.data[index].count!=false && data.data[index].count.trim()!='' ){
						$( data.data[index].elem ).html( data.data[index].count );
						$( data.data[index].elem ).fadeIn('slow');
					}else{
						$( data.data[index].elem ).html('');
						$( data.data[index].elem ).fadeOut('slow');
					}
				}
			}
			xAjaxNoticeTimer = (Math.floor(Math.random() * 30) + 15) * 1000 ;
			xAjaxNoticeVar = setTimeout('fn_xAjaxNotice()', xAjaxNoticeTimer);
		},
		error : function(XHR, Status, Thrown){
			console.log(XHR);
			console.log(Status);
			console.log(Thrown);
		}
	});
}
$(document).ready(function(e) {
	xAjaxNoticeTitle = $('title').html();
	fn_xAjaxNotice();
});
<?php } ?>
</script>
<style>
/* UIKit3.x */
.uk-width-2-4 { width: 50%; }
.uk-width-2-6 { width:calc(100% * 1 / 3.001); }
.uk-width-3-6 { width: 50%; }
.uk-width-4-6 { width:calc(100% * 2 / 3.001); }
@media (min-width: 640px) {
	.uk-width-2-4\@s { width: 50%; }
	.uk-width-2-6\@s { width:calc(100% * 1 / 3.001); }
	.uk-width-3-6\@s { width: 50%; }
	.uk-width-4-6\@s { width:calc(100% * 2 / 3.001); }
}
@media (min-width: 960px) {
	.uk-width-2-4\@m { width: 50%; }
	.uk-width-2-6\@m { width:calc(100% * 1 / 3.001); }
	.uk-width-3-6\@m { width: 50%; }
	.uk-width-4-6\@m { width:calc(100% * 2 / 3.001); }
}
@media (min-width: 1200px) {
	.uk-width-2-4\@l { width: 50%; }
	.uk-width-2-6\@l { width:calc(100% * 1 / 3.001); }
	.uk-width-3-6\@l { width: 50%; }
	.uk-width-4-6\@l { width:calc(100% * 2 / 3.001); }
}
@media (min-width: 1600px) {
	.uk-width-2-4\@xl { width: 50%; }
	.uk-width-2-6\@xl { width:calc(100% * 1 / 3.001); }
	.uk-width-3-6\@xl { width: 50%; }
	.uk-width-4-6\@xl { width:calc(100% * 2 / 3.001); }
}
.uk-button-mini {
    padding: 0 8px;
    line-height: 20px;
    font-size: 10px;
}
.uk-button-mini .uk-icon:not(.uk-icon-mini) { width: 15px; }
.uk-icon-mini { width: 11px; }
.uk-label-muted {
	background-color: transparent;
    color: #222;
    border: 1px solid #e5e5e5;
}
.uk-text-mini { font-size: 11px; }
.fancybox-container~.uk-modal,
.fancybox-container~.uk-tooltip {
	z-index: 99992;
}
/* === UIKit3 Skeleton === */
.uk-skeleton-text {
	font-family: 'framework7-skeleton' !important;
}
.uk-skeleton-text,
.uk-skeleton-text * {
	color: #ccc !important;
	font-weight: normal !important;
	font-style: normal !important;
	letter-spacing: -0.015em !important;
}
.uk-skeleton-block {
	height: 1em;
	background: #ccc !important;
	width: 100%;
}
.uk-skeleton-effect-fade {
	animation: uk-skeleton-effect-fade 1s infinite;
}
.uk-skeleton-effect-blink {
	-webkit-mask-image: linear-gradient(to right, transparent 0%, black 25%, black 75%, transparent 100%);
	mask-image: linear-gradient(to right, transparent 0%, black 25%, black 75%, transparent 100%);
	-webkit-mask-size: 200% 100%;
	mask-size: 200% 100%;
	-webkit-mask-repeat: repeat;
	mask-repeat: repeat;
	-webkit-mask-position: 50% top;
	mask-position: 50% top;
	animation: uk-skeleton-effect-blink 1s infinite;
}
.uk-skeleton-effect-pulse {
	animation: uk-skeleton-effect-pulse 1s infinite;
}
@keyframes uk-skeleton-effect-fade {
	0% {
		opacity: 1;
	}
	50% {
		opacity: 0.2;
	}
	100% {
		opacity: 1;
	}
}
@keyframes uk-skeleton-effect-blink {
	0% {
		-webkit-mask-position: 50% top;
		mask-position: 50% top;
	}
	100% {
		-webkit-mask-position: -150% top;
		mask-position: -150% top;
	}
}
@keyframes uk-skeleton-effect-pulse {
	0% {
		transform: scale(1);
	}
	40% {
		transform: scale(1);
	}
	50% {
		transform: scale(0.975);
	}
	100% {
		transform: scale(1);
	}
}
</style>
