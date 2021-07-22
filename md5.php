<!-- <script src="{asset_url}md5/md5.old.js"></script> -->
<script src="{asset_url}md5/md5.js"></script>
<script>
if( typeof(MD5)=="undefined" ) function MD5(str){return hex_md5(str);}
function Menc(str,loop){for(x=0;x<=loop;x++){str=MD5(str);}return str;}
</script>
