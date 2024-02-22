<?php
/**
 * Konexioa ezartzen du datu-basearekin.
 *
 * @return mysqli|false MySQLi konexio objektua itxarotzen du arrakastarekin, edo hutsa errorearekin.
 */
function connection(){
    $host= "10.23.25.179";
    $user= "root";
    $pw= "pvlbtnse";
    $db= "tolosa_pilota_elkartea";
    $connection= mysqli_connect($host, $user, $pw, $db, 3306);   
    if(!$connection)
    {
        die("Konexio-errorea");
    }
    return $connection;
}

/**
 * Erabiltzailearen informazioa eguneratzen du datu-basean.
 *
 * @param mixed $username Erabiltzailearen erabiltzaile-izena.
 * @param mixed $izena Erabiltzailearen izena.
 * @param mixed $abizena Erabiltzailearen abizena.
 * @param mixed $email Erabiltzailearen emaila.
 * @param mixed $tlf Erabiltzailearen telefono zenbakia.
 * @param mixed $helbidea Erabiltzailearen helbidea.
 * @return void
 */
function erabiltzaileaAldatu($username, $izena, $abizena, $email, $tlf, $helbidea){
    $connection = connection();
    $sql="UPDATE `erabiltzailea` SET `izena`='$izena', `abizenak`='$abizena', `email`='$email', `telefonoa`='$tlf', `helbidea`='$helbidea' WHERE username='$username'";
    $query = mysqli_query($connection, $sql);
}

/**
 * Erabiltzailearen pasahitza eguneratzen du datu-basean.
 *
 * @param mixed $username Erabiltzailearen erabiltzaile-izena.
 * @param mixed $pasahitza Erabiltzailearen berria den pasahitza.
 * @return void
 */
function pasahitzaAldatu($username, $pasahitza){
    $connection = connection();
    $sql="UPDATE `erabiltzailea` SET `pasahitza`='$pasahitza' WHERE username='$username'";
    $query = mysqli_query($connection, $sql);
}

/**
 * Lehiaketa bat sortzen du datu-basean.
 *
 * @param mixed $kodea Lehiaketaren kodea.
 * @param mixed $izena Lehiaketaren izena.
 * @param mixed $kategoria Lehiaketaren kategoria.
 * @param mixed $denboraldia Lehiaketaren denboraldia.
 * @param mixed $hasiera_data Lehiaketaren hasierako data.
 * @param mixed $bukaera_data Lehiaketaren bukaerako data.
 * @return void
 */
function sortuLehiaketa($kodea, $izena, $kategoria, $denboraldia, $hasiera_data, $bukaera_data){
    $connection = connection();
    $sql="INSERT INTO `lehiaketa` (`kodea`, `izena`, `kategoria`, `denboraldia`, `hasiera_data`, `bukaera_data`) VALUES ('$kodea', '$izena', '$kategoria', '$denboraldia', '$hasiera_data', '$bukaera_data');";
    $query = mysqli_query($connection, $sql);
}

/**
 * Erabiltzailea lehiaketara harpidetzen du datu-basean.
 *
 * @param mixed $username Erabiltzailearen erabiltzaile-izena.
 * @param mixed $lKodea Lehiaketaren kodea.
 * @return void
 */
function harpidetu($username, $lKodea){
    $connection = connection();
    $sql="INSERT INTO `harpidetu`(`erabiltzailea_username`,`lehiaketa_kodea`) VALUES ('$username', '$lKodea')";
    $query = mysqli_query($connection, $sql);
}

/**
 * Enpresa bat sortzen du datu-basean.
 *
 * @param mixed $nif Enpresaren NIF-a.
 * @param mixed $izena Enpresaren izena.
 * @param mixed $telefonoa Enpresaren telefono zenbakia.
 * @param mixed $helbidea Enpresaren helbidea.
 * @param mixed $email Enpresaren emaila.
 * @return void
 */
function sortuEnpresa($nif, $izena, $telefonoa, $helbidea, $email){
    $connection = connection();
    $sql="INSERT INTO `enpresa` (`nif`, `izena`, `telefonoa`, `helbidea`, `email`) VALUES ('$nif', '$izena', '$telefonoa', '$helbidea', '$email');";
    $query = mysqli_query($connection, $sql);
}

/**
 * Pelotaria bat sortzen du datu-basean.
 *
 * @param mixed $nan Pelotariaren NAN-a.
 * @param mixed $izena Pelotariaren izena.
 * @param mixed $abizenak Pelotariaren abizenak.
 * @param mixed $pisua Pelotariaren pisua.
 * @param mixed $altuera Pelotariaren altuera.
 * @param mixed $jaiotze_data Pelotariaren jaiotze data.
 * @param mixed $estrenaldi_data Pelotariaren estrenaldi data.
 * @return void
 */
function sortuPelotaria($nan, $izena, $abizenak, $pisua, $altuera, $jaiotze_data, $estrenaldi_data){
    $connection = connection();
    $sql="INSERT INTO `pelotaria` (`nan`, `izena`, `abizenak`, `pisua`, `altuera`, `jaiotze_data`, `estrinaldi_data`) VALUES ('$nan', '$izena', '$abizenak', '$pisua', '$altuera', '$jaiotze_data', '$estrenaldi_data');";
    $query = mysqli_query($connection, $sql);
}




?>
