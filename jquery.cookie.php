<?php if( $asset_cloud ) { ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous"></script>
<?php } else { ?>
    <script src="{asset_url}cloud/jquery-cookie/src/jquery.cookie.js"></script>
<?php } ?>
<script>
function get_cookies_array() {
    var cookies = { };
    if (document.cookie && document.cookie != '') {
        var split = document.cookie.split(';');
        for (var i = 0; i < split.length; i++) {
            var name_value = split[i].split("=");
            name_value[0] = name_value[0].replace(/^ /, '');
            cookies[decodeURIComponent(name_value[0])] = decodeURIComponent(name_value[1]);
        }
    }
    return cookies;
}
function oCookie(name, value, expire){
	if( typeof(expire)==='undefined' ) expire = '1d';
	if( expire==0 ){
		$.cookie(name, value, { path: '/' });
	}else{
		$.cookie(name, value, { expires: parseInt(expire), path: '/' });
	}
	return false;
}
function gCookie(name){
	if( typeof(name)==='undefined' ) $.cookie();
	return $.cookie( name );
}
function remCookie(name){
	$.cookie(name, null, { expires: 1, path: '/' });
}
</script>
