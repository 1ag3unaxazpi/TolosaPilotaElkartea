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
    $mezua=$mezua='
    <mjml>
 <mj-body background-color="#fafbfc">
   <mj-section padding-bottom="20px" padding-top="20px">
     <mj-column vertical-align="middle" width="100%">
       <mj-image align="center" padding="25px" src="/resourcer/logo.png" width="125px"></mj-image>
     </mj-column>
   </mj-section>
   <mj-section background-color="#fff" padding-bottom="20px" padding-top="20px">
     <mj-column vertical-align="middle" width="100%">
       <mj-text align="center" font-size="16px" font-family="open Sans Helvetica, Arial, sans-serif" padding-left="25px" padding-right="25px"><span>Kaixo,</span></mj-text>
       <mj-text align="center" font-size="16px" font-family="open Sans Helvetica, Arial, sans-serif" padding-left="25px" padding-right="25px">Mesedez, erabili beheko egiaztapen-kodea Arenguren webgunean:</mj-text>
       <mj-text align="center" font-size="24px" background-color="#20c997" font-weight="bold" font-family="open Sans Helvetica, Arial, sans-serif">234967</mj-text>
       <mj-text align="center" font-size="16px" font-family="open Sans Helvetica, Arial, sans-serif" padding-left="25px" padding-right="16px">Ez baduzu eskatu, mezu elektroniko honi jaramonik egin edo jakinarazi iezaguzu.</mj-text>
       <mj-text align="center" font-size="16px" font-family="open Sans Helvetica, Arial, sans-serif" padding-left="25px" padding-right="25px">Mila esker! <br />Arengu team</mj-text>
     </mj-column>
   </mj-section>
 </mj-body>
</mjml>';
    $headers = "From: " . $izena . " <" . $email . ">";

    mail("1ag3.unaxazpi@tolosaldealh.eus", $gaia,$mezua, $headers);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>