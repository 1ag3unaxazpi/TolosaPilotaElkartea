<?php
    function connection(){
        $host= "10.23.25.179";
        $user= "root";
        $pw= "pvlbtnse";
        $db= "tolosa_pilota_elkartea";
        $connection= mysqli_connect($host, $user, $pw, $db, 3306);   
        if(!$connection)
        {
            die("Connection Error");
        }
        return $connection;
    }

    function erabiltzaileaAldatu($username, $izena, $abizena, $email, $tlf, $helbidea){
        $connection = connection();
        $sql="UPDATE `erabiltzailea` SET `izena`='$izena', `abizenak`='$abizena', `email`='$email', `telefonoa`='$tlf', `helbidea`='$helbidea' WHERE username='$username'";
        $query = mysqli_query($connection, $sql);
    }

    function pasahitzaAldatu($username, $pasahitza){
        $connection = connection();
        $sql="UPDATE `erabiltzailea` SET `pasahitza`='$pasahitza' WHERE username='$username'";
        $query = mysqli_query($connection, $sql);
    }

    function sortuLehiaketa(){
        $connection = connection();
        $sql="INSERT INTO `harpidetu`(`erabiltzailea_username`,`lehiaketa_kodea`) VALUES ('$username', '$lKodea')";
        $query = mysqli_query($connection, $sql);
    }

    function harpidetu($username, $lKodea){
        $connection = connection();
        $sql="INSERT INTO `harpidetu`(`erabiltzailea_username`,`lehiaketa_kodea`) VALUES ('$username', '$lKodea')";
        $query = mysqli_query($connection, $sql);
    }
?>