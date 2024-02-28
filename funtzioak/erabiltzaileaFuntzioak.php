<?php

    include "db.php";

    $username=$_POST['username'];
    $izena=$_POST['izena'];
    $abizena=$_POST['abizena'];
    $email=$_POST['email'];
    $tlf=$_POST['tlf'];
    $helbidea=$_POST['helbidea'];

    $connection = connection();
    $sql="UPDATE `erabiltzailea` SET `izena`='$izena', `abizenak`='$abizena', `email`='$email', `telefonoa`='$tlf', `helbidea`='$helbidea' WHERE username='$username'";
    $query = mysqli_query($connection, $sql);

    header('Location: ' . $_SERVER['HTTP_REFERER'] . "?success=true");

?>