<?php
    ###################################################################################################
    #  IE 6 BLOCK
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if (strpos($ua,'MSIE') != false && strpos($ua,'Opera') === false) {
        if (strpos($ua,'Windows NT 5.2') != false) {
            if(strpos($ua,'.NET CLR') === false) return;
        }
        preg_match( '/MSIE ([0-9]{1,}[\.0-9]{0,})/', $ua, $matches );
        $version = floatval( $matches[1] );
        if ($version <= 7.0) {
            header("Location: /ie6.html");
        }
    }
    #  IE 6 BLOCK END
    ###################################################################################################

    #  Basename
    $filename = explode("/",$_SERVER['SCRIPT_NAME']);
    $extension = strtolower(array_pop($filename));
    $basename = basename($extension, ".php");

    ###################################################################################################

    #  Current Domain
    function current_domain() {
        return 'http://'.$_SERVER['HTTP_HOST'].'/';
    }
?>
