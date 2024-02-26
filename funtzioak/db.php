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
    $sql="INSERT INTO `pelotaria` (`nan`, `izena`, `abizenak`, `pisua`, `altuera`, `jaiotze_data`, `estreinaldi_data`) VALUES ('$nan', '$izena', '$abizenak', '$pisua', '$altuera', '$jaiotze_data', '$estrenaldi_data');";
    $query = mysqli_query($connection, $sql);
}

/**
 * Partidu bat sortzen du datu-basean.
 *
 * @param mixed $pelotaria_nan Pelotariaren NAN-a.
 * @param mixed $kolorea Pelotariaren kolorea.
 * @param mixed $multzoa Partiduaren multzoa.
 * @param mixed $mota Partiduaren mota.
 * @param mixed $data Partiduaren data.
 * @param mixed $hasiera_ordua Partiduaren hasiera ordua.
 * @param mixed $bukaera_ordua Partiduaren bukaera ordua.
 * @param mixed $jaurdunldia Partiduaren jaurdunaldia.
 * @param mixed $oharra Partiduaren oharra.
 * @param mixed $lehiaketa_kode Lehiaketaren kodea.
 * @return void
 */
function sortuPartidua($pelotaria_nan, $kolorea, $multzoa, $mota, $data, $hasiera_ordua, $bukaera_ordua, $jaurdunldia, $oharra, $lehiaketa_kode){
    $connection = connection();
    $sql="INSERT INTO `partidua` (`mota`, `data`, `hasiera_ordua`, `bukaera_ordua`, `jausdunaldia`, `oharra`, `lehiaketa_kode`) VALUES ('$mota', '$data', '$hasiera_ordua', '$bukaera_ordua', '$jausdunaldia', '$oharra', '$lehiaketa_kode');";
    $query = mysqli_query($connection, $sql);

    $sql="INSERT INTO `jolastu` (`pelotaria_nan`, `kolorea`, `multzoa`) VALUES ('$pelotaria_nan', '$kolorea', '$multzoa');";
    $query = mysqli_query($connection, $sql);
}

/**
 * Albistea sortzen du datu-basean.
 *
 * @param mixed $titulua Albistearen titulua.
 * @param mixed $deskripzioa Albistearen deskripzioa.
 * @param mixed $gorputza Albistearen gorputza.
 * @param mixed $irudia Albistearen irudia.
 * @param mixed $data Albistearen data.
 * @param mixed $ordua Albistearen ordua.
 * @param mixed $egilea Albistearen egilea.
 * @param mixed $mota Albistearen mota.
 * @return void
 */
function sortuAlbistea($titulua, $deskripzioa, $gorputza, $irudia, $data, $ordua, $egilea, $mota){
    $connection = connection();
    $sql="INSERT INTO `albistea` (`titulua`, `deskripzioa`, `gorputza`, `data`, `ordua`, `egilea`, `mota`) VALUES ('$titulua', '$deskripzioa', '$gorputza', '$data', '$ordua', '$egilea', '$mota');";
    $query = mysqli_query($connection, $sql);
}

/**
 * Lehiaketaren albistea sortzen du datu-basean.
 *
 * @param mixed $lehiaketa_kodea Lehiaketaren kodea.
 * @param mixed $titulua Albistearen titulua.
 * @param mixed $deskripzioa Albistearen deskripzioa.
 * @param mixed $gorputza Albistearen gorputza.
 * @param mixed $irudia Albistearen irudia.
 * @param mixed $data Albistearen data.
 * @param mixed $ordua Albistearen ordua.
 * @param mixed $egilea Albistearen egilea.
 * @param mixed $mota Albistearen mota.
 * @return void
 */
function sortuAlbisteaLehiaketa($lehiaketa_kodea, $titulua, $deskripzioa, $gorputza, $irudia, $data, $ordua, $egilea, $mota){
    sortuAlbistea($titulua, $deskripzioa, $gorputza, $irudia, $data, $ordua, $egilea, $mota);
    $connection = connection();
    $sql="SELECT  `kodea` FROM `tolosa_pilota_elkartea`.`albistea` ORDER BY kodea DESC LIMIT 1;";
    $query = mysqli_query($connection, $sql);

    $query = mysqli_query($connection, $sql);
    if(mysqli_num_rows($query)>0){
        while($row = mysqli_fetch_array($query)){
            $albistea_kodea=$row["kodea"];
        };
    }

    $sql="INSERT INTO `albistea_lehiaketa` (`albistea_kodea`, `lehiaketa_kodea`) VALUES ('$albistea_kodea', '$lehiaketa_kodea');";
    $query = mysqli_query($connection, $sql);
}

/**
 * @param mixed $partidua_kodea
 * @param mixed $titulua
 * @param mixed $deskripzioa
 * @param mixed $gorputza
 * @param mixed $irudia
 * @param mixed $data
 * @param mixed $ordua
 * @param mixed $egilea
 * @param mixed $mota
 * 
 * @return [type]
 */
function sortuAlbisteaPartidua($partidua_kodea, $titulua, $deskripzioa, $gorputza, $irudia, $data, $ordua, $egilea, $mota){
    sortuAlbistea($titulua, $deskripzioa, $gorputza, $irudia, $data, $ordua, $egilea, $mota);
    $connection = connection();
    $sql="SELECT  `kodea` FROM `tolosa_pilota_elkartea`.`albistea` ORDER BY kodea DESC LIMIT 1;";
    $query = mysqli_query($connection, $sql);

    $query = mysqli_query($connection, $sql);
    if(mysqli_num_rows($query)>0){
        while($row = mysqli_fetch_array($query)){
            $albistea_kodea=$row["kodea"];
        };
    }

    $sql="INSERT INTO `albistea_partidua` (`albistea_kodea`, `partidua_kodea`) VALUES ('$albistea_kodea', '$partidua_kodea');";
    $query = mysqli_query($connection, $sql);
}

/**
 * @param mixed $pelotaria_kodea
 * @param mixed $titulua
 * @param mixed $deskripzioa
 * @param mixed $gorputza
 * @param mixed $irudia
 * @param mixed $data
 * @param mixed $ordua
 * @param mixed $egilea
 * @param mixed $mota
 * 
 * @return [type]
 */
function sortuAlbisteaPelotaria($pelotaria_kodea, $titulua, $deskripzioa, $gorputza, $irudia, $data, $ordua, $egilea, $mota){
    sortuAlbistea($titulua, $deskripzioa, $gorputza, $irudia, $data, $ordua, $egilea, $mota);
    $connection = connection();
    $sql="SELECT  `kodea` FROM `tolosa_pilota_elkartea`.`albistea` ORDER BY kodea DESC LIMIT 1;";
    $query = mysqli_query($connection, $sql);

    $query = mysqli_query($connection, $sql);
    if(mysqli_num_rows($query)>0){
        while($row = mysqli_fetch_array($query)){
            $albistea_kodea=$row["kodea"];
        };
    }

    $sql="INSERT INTO `albistea_pelotaria` (`albistea_kodea`, `pelotaria_kodea`) VALUES ('$albistea_kodea', '$pelotaria_kodea');";
    $query = mysqli_query($connection, $sql);
}

/**
 * @param mixed $erabiltzailea_username
 * @param mixed $lehiaketa_kodea
 * 
 * @return [type]
 */
function sortuHarpidetu($erabiltzailea_username, $lehiaketa_kodea){
    $connection = connection();
    $sql="INSERT INTO `harpidetu` (`erabiltzailea_username`, `lehiaketa_kodea`) VALUES ('$erabiltzailea_username', '$lehiaketa_kodea');";
    $query = mysqli_query($connection, $sql);
}

<<<<<<< HEAD
function emaitzaGuztiak(){
    $connection = connection();
    $sql="INSERT INTO `harpidetu` (`erabiltzailea_username`, `lehiaketa_kodea`) VALUES ('$erabiltzailea_username', '$lehiaketa_kodea');";
    $query = mysqli_query($connection, $sql);
=======
function getAlbisteak(){
    $connection = connection();
    $sql="SELECT `titulua`, `deskripzioa`, `irudia` FROM albistea ORDER BY albistea.data"
    $query = mysqli_query($connection, $sql);

    return $query;
}

function ateraAlbistea() {
    $query = getAlbisteak();
    if(mysqli_num_rows($query)>0){
        while($row = mysqli_fetch_array($query)){
            $albistea_titulua=$row["titulua"];
            $albistea_deskripzioa=$row["deskripzioa"];
            $albistea_irudia=$row["irudia"];
        };
    }

    echo "
    <div class="albistea-txart">
        <div class="albistea-txart-img">
            <img src="data:image/jpeg;base64,$albistea_irudia" alt="">
        </div>
        <div class="albistea-txart-header">
            $albistea_titulua
        </div>
        <div class="albistea-txart-desc">
            $albistea_deskripzioa
        </div>
    </div>
    ";
>>>>>>> bbbe4015a15a7a7e37eff80c27b9e8a2656a33c0
}

?>
