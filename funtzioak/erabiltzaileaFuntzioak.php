<?php

    include "db.php";

    $username=$_POST['username'];
    $password=$_POST['password'];
    $izena=$_POST['izena'];
    $abizena=$_POST['abizena'];
    $email=$_POST['email'];
    $tlf=$_POST['tlf'];
    $helbidea=$_POST['helbidea'];

    erabiltzaileaAldatu($username, $izena, $abizena, $password, $email, $tlf, $helbidea);

    header('Location: ' . $_SERVER['HTTP_REFERER'] . "?success=true");

?>