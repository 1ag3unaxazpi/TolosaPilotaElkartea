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

    mail("root@tolosapilotaelkartea.com",$izena . " - " . $gaia,$mezua);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>