<?php if( $asset_cloud ) { ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.16/mediaelementplayer.min.css" integrity="sha512-RZKnkU75qu9jzuyC+OJGffPEsJKQa7oNARCA6/8hYsHk2sd7Sj89tUCWZ+mV4uAaUbuzay7xFZhq7RkKFtP4Dw==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.16/mediaelement-and-player.min.js" integrity="sha512-MgxzaA7Bkq7g2ND/4XYgoxUbehuHr3Q/bTuGn4lJkCxfxHEkXzR1Bl0vyCoHhKlMlE2ZaFymsJrRFLiAxQOpPg==" crossorigin="anonymous"></script>
<?php } else { ?>
    <link rel="stylesheet" href="{asset_url}cloud/mediaelement/build/mediaelementplayer.min.css" />
    <script src="{asset_url}cloud/mediaelement/build/mediaelement-and-player.min.js"></script>
<?php } ?>
