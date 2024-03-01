<?php include "head.php"; ?>
<body>
    <?php
        include "nav.php";
    ?>
    <main>
        <div class="main-sarrera hasiera">
            <div class="main-sarrera-h1">
                <b>Tolosako</b> <br>Pilota Elkartea
            </div>
            <div class="main-sarrera-desc">
                Gure webgunean sartzeak esan nahi du zuk ere pilota mundura hurbiltzen ari zarena. Tolosako Pilota Kluba, bertako pilota kultura, tradizioa eta gure jokalarien ardura bizia dituena da. Gure herrian, pilota ez da bakarrik kirola, kultura bat da, bizitza eredu bat da.
            </div>
        </div>
        <div class="main-art">
            <h2 class="sec-title">Azken <b>berriak</b></h2>
            <div class="albistea-txart-kont">
                <?php ateraAlbistea(); ?>
            </div>
            <h2 class="sec-title">Azken <b>emaitzak</b></h2>
            <div class="emaitza-txart-kont">
                <?php
                    $connection = connection();
                    $sql="SELECT partidua.*, lehiaketa.izena as lehiaketa_izena FROM partidua INNER JOIN lehiaketa ON partidua.lehiaketa_kodea = lehiaketa.kodea WHERE data< '". date('Y-m-d') ."';";
                    $query = mysqli_query($connection, $sql);

                    

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

                            echo '
                            <div class="emaitza-txart">
                                <div class="emaitza-txart-left">
                                    <div class="emaitza-txart-left-hilabetea">
                                        ' . $hilabeteak[date("m", strtotime($data)) - 1] . '
                                    </div>
                                    <div class="emaitza-txart-left-eguna">
                                        ' . date("d", strtotime($data)) . '
                                    </div>
                                </div>
                                <div class="emaitza-txart-center">
                                    <div class="emaitza-txart-center-pilotariak">
                                        ' . $urdinak . ' - ' . $gorriak . '
                                    </div>
                                    <div class="emaitza-txart-center-lehiaketa">
                                        ' . $lehiaketaIzena . '
                                    </div>
                                </div>
                                <div class="emaitza-txart-right">
                                    <div class="emaitza-txart-right-gorri">
                                        ' . $emaitzaG . '
                                    </div>
                                    <div class="emaitza-txart-right-urdin">
                                        ' . $emaitzaU . '
                                    </div>
                                </div>
                            </div>
                            ';
                        };
                    }
                    
                ?>
                
            </div>

            <h2 class="sec-title">Hurrengo <b>partiduak</b></h2>
            <div class="emaitza-txart-kont">
                <?php
                    $connection = connection();
                    $sql="SELECT partidua.*, lehiaketa.izena as lehiaketa_izena FROM partidua INNER JOIN lehiaketa ON partidua.lehiaketa_kodea = lehiaketa.kodea WHERE data>= '". date('Y-m-d') ."';";
                    $query = mysqli_query($connection, $sql);

                    

                    if(mysqli_num_rows($query)>0){
                        while($row = mysqli_fetch_array($query)){
                            $mota=$row["mota"];
                            $data=$row["data"];
                            $hasiera_ordua=$row["hasiera_ordua"];
                            $jardunaldia=$row["jardunaldia"];
                            $partiduKodea=$row["kodea"];
                            $lehiaketaIzena=$row["lehiaketa_izena"];

                            

                            $hilabeteak = ["Urtarrila", "Otsaila", "Martxoa", "Apirila", "Maiatza", "Ekaina", "Uztaila", "Abuztua", "Iraila", "Urria", "Azaroa", "Abendua"];

                            echo '
                            <div class="emaitza-txart">
                                <div class="emaitza-txart-left">
                                    <div class="emaitza-txart-left-hilabetea">
                                        ' . $hilabeteak[date("m", strtotime($data)) - 1] . '
                                    </div>
                                    <div class="emaitza-txart-left-eguna">
                                        ' . date("d", strtotime($data)) . '
                                    </div>
                                </div>
                                <div class="emaitza-txart-center">
                                    <div class="emaitza-txart-center-pilotariak">
                                        <h2>' . $lehiaketaIzena . '</h2>
                                    </div>
                                    <div class="emaitza-txart-center-lehiaketa">
                                        ' . $hasiera_ordua . '
                                    </div>
                                </div>
                            </div>
                            ';
                        };
                    }
                    
                ?>
                
            </div>
        </div>
    </main>
    <?php
        include "footer.php";
    ?>
</body>
</html>