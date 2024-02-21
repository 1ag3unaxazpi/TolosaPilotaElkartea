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
?>