<?php if( $asset_cloud ) { ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" integrity="sha512-yVvxUQV0QESBt1SyZbNJMAwyKvFTLMyXSyBHDO4BG5t7k/Lw34tyqlSDlKIrIENIzCl+RVUNjmCPG+V/GMesRw==" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.js" integrity="sha512-eSeh0V+8U3qoxFnK3KgBsM69hrMOGMBy3CNxq/T4BArsSQJfKVsKb5joMqIPrNMjRQSTl4xG8oJRpgU2o9I7HQ==" crossorigin="anonymous"></script>
<?php } else { ?>
	<link href="{asset_url}local/jquery.chosen/chosen.min.css" rel="stylesheet" />
	<script src="{asset_url}local/jquery.chosen/chosen.jquery.js"></script>
<?php } ?>
<style>
.fancybox-active .ui-autocomplete.ui-front { z-index: 99992; }
.chosen-container-multi .chosen-choices li.search-field input[type="text"] { height: auto; }
.chosen-container { font-size: unset; max-width: 100%; }
.chosen-container-single .chosen-single,
.chosen-container-multi .chosen-choices {
	max-width: 100%;
    padding: 0 10px;
    background: #fff;
    color: #666;
    border: 1px solid #e5e5e5;
	border-radius: 0px;
    transition: .2s ease-in-out;
    transition-property: color,background-color,border;
	height: 40px;
	line-height: 40px;
}
.chosen-container-active.chosen-with-drop .chosen-single,
.chosen-container .chosen-drop { background: #fff; }
.chosen-container-multi .chosen-choices li.search-choice {
	margin: 5px 0 5px 5px;
	padding: 5px 20px 5px 5px;
    background: #fff;
    color: #666;
    border: 1px solid #e5e5e5;
	border-radius: 0px;
}
.chosen-container-multi .chosen-choices li.search-choice .search-choice-close { top: 6px; }
.autocomplete.ui-autocomplete-input.ui-autocomplete-loading { background: url('{asset_url}images/indicator.gif') center right no-repeat; }
.chosen-container-single .chosen-single.chosen-default, .chosen-container-multi .chosen-choices.chosen-default { color: #aaa; }
</style>
