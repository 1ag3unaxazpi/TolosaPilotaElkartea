<?php
    include "db.php";

    $izena=$_POST['izena'];
    $abizena=$_POST['abizena'];
    $email=$_POST['email'];
    $tlf=$_POST['tlf'];
    $helbidea=$_POST['helbidea'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $connection = connection();
    $sql="INSERT INTO `erabiltzailea`(`izena`, `abizenak`, `email`, `telefonoa`, `helbidea`, `username`, `pasahitza`, `aktibo`, `administratzailea`) 
        VALUES ('$izena', '$abizena', '$email', '$tlf', '$helbidea', '$username', '$password', 1, 0)";
    $query = mysqli_query($connection, $sql);

    session_start(); 
    $_SESSION['username']=$username;
    $_SESSION['izena']=$izena;
    $_SESSION['abizena']=$abizena;
    $_SESSION['email']=$email;
    $_SESSION['tlf']=$tlf;

    header("location: ../index.php");

?>