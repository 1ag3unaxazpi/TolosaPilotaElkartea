<?php

function sesioa_konprobatu(){
    session_start(); 
    if (isset($_SESSION['username'])){
        
    }
    else{
        header('location: index.php');
    }
}

function adminKonprobatu(){
    if (isset($_SESSION['username'])){
        if($_SESSION['admin']){
            
        }
        else{
            header('location: ../index.php');
        }
    }
    else{
        header('location: ../index.php');
    }
}

?>