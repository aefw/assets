<?php if( $asset_cloud ) { ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js" integrity="sha512-egjn0g4nyX3074dTJbuzFHdPDu17RP8ElcYpQuQbl9VUu6RKQaqlX4dJJ/l7Z5fFniqLSOJgytwP0FiKf4MEfA==" crossorigin="anonymous"></script>
<?php } else { ?>
	<script src="{asset_url}cloud/elevatezoom/jquery.elevatezoom.js"></script>
<?php } ?>
<script>
$(document).ready(function(){
	setTimeout(function(){
		target = $('.zoomWrapper');
		targetImg = $('.zoomWrapper img');
		if( target.height() <= 0 ) {
			target.css({'width':'inherit','height':'inherit'});
			targetImg.css({'position':'inherit'});
		}
	}, 2000);
});
</script>
