<?php
    include "db.php";
    $username_form=$_POST['username_form'];
    $password_form=$_POST['password_form'];
    $sql = "SELECT * FROM `erabiltzailea` WHERE username = '$username_form' AND pasahitza ='$password_form'";
    $connection= connection();
    $query = mysqli_query($connection, $sql);
    if(mysqli_num_rows($query)>0){
        while($row = mysqli_fetch_array($query)){
            $izena=$row["izena"];
            $abizena=$row["abizenak"];
            $email=$row["email"];
            $helbidea=$row["helbidea"];
            $tlf=$row["telefonoa"];
            $username=$row["username"];
            $password=$row["pasahitza"];
            $aktibo=$row["aktibo"];
            $administratzailea=$row["administratzailea"];
        };

        session_start();
        $_SESSION['username']=$username;
        $_SESSION['izena']=$izena;
        $_SESSION['abizena']=$abizena;
        $_SESSION['email']=$email;
        $_SESSION['tlf']=$tlf;
        $_SESSION['admin']=$administratzailea;

        header("location: ../index.php");
    }
    else{
        header("location: ../login.php?errorea=erabiltzale edo pasahitza okerra");
    }
?>