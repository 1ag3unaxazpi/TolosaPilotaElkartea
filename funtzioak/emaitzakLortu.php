<?php

    include "db.php";

    if(isset($_GET['lehiaketa']) && isset($_GET['kategoria'])){

        $lehiaketa=$_GET['lehiaketa'];
        $kategoria=$_GET['kategoria'];

        $connection = connection();
        $sql="SELECT partidua.*, lehiaketa.izena as lehiaketa_izena FROM partidua INNER JOIN lehiaketa ON partidua.lehiaketa_kodea = lehiaketa.kodea WHERE data< '". date('Y-m-d') ."' AND lehiaketa.izena='$lehiaketa' AND kategoria='$kategoria'";
        $query = mysqli_query($connection, $sql);


        $zerrenda=array();

        if(mysqli_num_rows($query)>0){
            while($row = mysqli_fetch_array($query)){
                $urdinak="";
                $gorriak="";
                $mota=$row["mota"];
                $data=$row["data"];
                $jardunaldia=$row["jardunaldia"];
                $partiduKodea=$row["kodea"];
                $lehiaketaIzena=$row["lehiaketa_izena"];

                $sql2="SELECT  `kodea`, `emaitza`, `pelotaria`.`izena`,`pelotaria`.`abizenak`,  `hasiera_ordua`,  `bukaera_ordua`,  `jardunaldia`, `lehiaketa_kodea`
                FROM `tolosa_pilota_elkartea`.`partidua` 
                INNER JOIN jolastu ON partidua.kodea=jolastu.partidua_kodea
                INNER JOIN pelotaria ON jolastu.pelotaria_nan = pelotaria.nan
                WHERE kolorea='urdina' AND partidua.kodea='$partiduKodea';";
                $query2 = mysqli_query($connection, $sql2);

                if(mysqli_num_rows($query2)>0){
                    while($row = mysqli_fetch_array($query2)){
                        $izena=$row["izena"] . " " . $row['abizenak'];
                        $urdinak = $urdinak . " " . $izena;
                        $emaitzaU = $row['emaitza'];
                    };
                }

                $sql2="SELECT  `kodea`, `emaitza` ,`pelotaria`.`izena`,`pelotaria`.`abizenak`,  `hasiera_ordua`,  `bukaera_ordua`,  `jardunaldia`, `lehiaketa_kodea`
                FROM `tolosa_pilota_elkartea`.`partidua` 
                INNER JOIN jolastu ON partidua.kodea=jolastu.partidua_kodea
                INNER JOIN pelotaria ON jolastu.pelotaria_nan = pelotaria.nan
                WHERE kolorea='gorria' AND partidua.kodea='$partiduKodea';";
                $query2 = mysqli_query($connection, $sql2);

                if(mysqli_num_rows($query2)>0){
                    while($row = mysqli_fetch_array($query2)){
                        $izena=$row["izena"] . " " . $row['abizenak'];
                        $gorriak = $gorriak . " " . $izena;
                        $emaitzaG = $row['emaitza'];
                    };
                }

                $hilabeteak = ["Urtarrila", "Otsaila", "Martxoa", "Apirila", "Maiatza", "Ekaina", "Uztaila", "Abuztua", "Iraila", "Urria", "Azaroa", "Abendua"];
                $str=" <div class='emaitza-txart'><div class='emaitza-txart-left'> <div class='emaitza-txart-left-hilabetea'> " . $hilabeteak[date('m', strtotime($data)) - 1] . " </div> <div class='emaitza-txart-left-eguna'> " . date('d', strtotime($data)) . " </div> </div> <div class='emaitza-txart-center'> <div class='emaitza-txart-center-pilotariak'> " . $urdinak . " - " . $gorriak . " </div> <div class='emaitza-txart-center-lehiaketa'> " . $lehiaketaIzena . " </div> </div> <div class='emaitza-txart-right'> <div class='emaitza-txart-right-gorri'> " . $emaitzaG . " </div> <div class='emaitza-txart-right-urdin'> " . $emaitzaU . " </div> </div> </div> ";
                
                echo $str;
            };

        }

        else{
            echo '<div class="emaitz-ez-cont">
            <div class="emaitz-ez-desc">
                <img src="resources/no_result.jpg"/>
                Ez dago emaitzik
            </div>
        </div>';
        }
    }

    
    
?>