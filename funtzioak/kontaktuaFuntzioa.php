<?php

    if (strtoupper(substr(PHP_OS,0,3)=='WIN')) {

        $eol="\r\n";
    
    } elseif (strtoupper(substr(PHP_OS,0,3)=='MAC')) {
    
        $eol="\r"; 
    
    } else {
    
        $eol="\n"; 
    
    }

    $email=$_POST['email'];
    $izena=$_POST['izena'];
    $gaia=$_POST['gaia'];
    $mezua=$_POST['mezua'];
    $headers = "From: Tolosako Pilota Elkartea <admin@tolosapilotaelkartea.com>";

    mail("1ag3.unaxazpi@tolosaldealh.eus",$izena . " - " . $gaia,$mezua, $headers);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>