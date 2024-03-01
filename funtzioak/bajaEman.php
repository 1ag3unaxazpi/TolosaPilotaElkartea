<?php

    include "db.php";

    if(isset($_GET['username'])){
        bajaEman($_GET['username']);
        header("Location: logout.php");
    }
    

?>