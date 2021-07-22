<?php if( $asset_cloud ) { ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/imgareaselect/0.9.10/css/imgareaselect-animated.css" integrity="sha512-VOWGVItJ5anAaHwRzNFPo8YGbAGDl34AkUq0/Dkn4UJxK0ag95IZQWoitH6xM7Bq6C3i2VW5oFzkL1+wYkLdmQ==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imgareaselect/0.9.10/js/jquery.imgareaselect.min.js" integrity="sha512-59swnhUs+9AinrKlTPqsoO5ukNPPFbPXFyaf41MAgiTG/fv3LBZwWQWiZNYeksneLhiUo4xjh/leTZ53sZzQ4Q==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imgareaselect/0.9.10/js/jquery.imgareaselect.pack.js" integrity="sha512-ALBRD8RI3E1FAUPtPZ4bEEZ7EdfRT/gOxkX1CrrS9pMfxRrTPIFhglvfFs3puB4CenVg9SD0m3uydtBYHFny9A==" crossorigin="anonymous"></script>
<?php } else { ?>
    <link href="{asset_url}local/jquery.imgareaselect/css/imgareaselect-animated.css" rel="stylesheet" />
    <script src="{asset_url}local/jquery.imgareaselect/scripts/jquery.imgareaselect.min.js"></script>
    <script src="{asset_url}local/jquery.imgareaselect/scripts/jquery.imgareaselect.pack.js"></script>
<?php } ?>
