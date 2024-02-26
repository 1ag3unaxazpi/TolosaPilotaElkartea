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
                <div class="emaitza-txart">
                    <div class="emaitza-txart-left">
                        <div class="emaitza-txart-left-hilabetea">
                            Otsailak
                        </div>
                        <div class="emaitza-txart-left-eguna">
                            23
                        </div>
                    </div>
                    <div class="emaitza-txart-center">
                        <div class="emaitza-txart-center-pilotariak">
                            Tolosa - Jaka VI
                        </div>
                        <div class="emaitza-txart-center-lehiaketa">
                            Interpueblos
                        </div>
                    </div>
                    <div class="emaitza-txart-right">
                        <div class="emaitza-txart-right-gorri">
                            22
                        </div>
                        <div class="emaitza-txart-right-urdin">
                            16
                        </div>
                    </div>
                </div>
                <div class="emaitza-txart">
                    <div class="emaitza-txart-left">
                        <div class="emaitza-txart-left-hilabetea">
                            Otsailak
                        </div>
                        <div class="emaitza-txart-left-eguna">
                            18
                        </div>
                    </div>
                    <div class="emaitza-txart-center">
                        <div class="emaitza-txart-center-pilotariak">
                            Tolosa - Jaka VI
                        </div>
                        <div class="emaitza-txart-center-lehiaketa">
                            Interpueblos
                        </div>
                    </div>
                    <div class="emaitza-txart-right">
                        <div class="emaitza-txart-right-gorri">
                            22
                        </div>
                        <div class="emaitza-txart-right-urdin">
                            16
                        </div>
                    </div>
                </div>
                <div class="emaitza-txart">
                    <div class="emaitza-txart-left">
                        <div class="emaitza-txart-left-hilabetea">
                            Otsailak
                        </div>
                        <div class="emaitza-txart-left-eguna">
                            14
                        </div>
                    </div>
                    <div class="emaitza-txart-center">
                        <div class="emaitza-txart-center-pilotariak">
                            Ezkurdia - Altuna
                        </div>
                        <div class="emaitza-txart-center-lehiaketa">
                            Interpueblos
                        </div>
                    </div>
                    <div class="emaitza-txart-right">
                        <div class="emaitza-txart-right-gorri">
                            13
                        </div>
                        <div class="emaitza-txart-right-urdin">
                            22
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
        include "footer.php";
    ?>
</body>
</html>