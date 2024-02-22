<?php include "head.php"; ?>
<body>
    <?php
        include "nav.php";
    ?>
    <main>
        <div class="erab-cont">
            <?php
                if (isset($_SESSION['username'])){

                }
                else{
                    header("Location: index.php");
                }
            ?>
            <h2 class="sec-title">Erabiltzailearen<b> datuak</b></h2>
            <div class="erab-row">
                <div>
                    <img width="250px" src="/resources/user-icon-argia.png" alt="">
                </div>
                <div class="erab-column">
                    <div class="erab-row-ind">
                        <input value="<?php if(isset($_SESSION['izena'])) {echo $_SESSION['izena'];} ?>" placeholder="izena" type="text">
                    </div>
                    <div class="erab-row-ind">
                        <input value="<?php if(isset($_SESSION['email'])) {echo $_SESSION['email'];} ?>" placeholder="email" type="text">
                    </div>
                </div>
                <div class="erab-column">
                    <div class="erab-row-ind">
                        <input value="<?php if(isset($_SESSION['abizena'])) {echo $_SESSION['abizena'];} ?>" placeholder="abizena" type="text">
                    </div>
                    <div class="erab-row-ind">
                        <input value="<?php if(isset($_SESSION['tlf'])) {echo $_SESSION['tlf'];} ?>" placeholder="Telefono zenbakia" type="text">
                    </div>
                </div>
                <div class="erab-column">
                    <div class="erab-row-ind">
                        <input value="<?php if(isset($_SESSION['username'])) {echo $_SESSION['username'];} ?>" placeholder="Erabiltzailea" type="text" disabled>
                    </div>
                    <div class="erab-row-ind">
                        <input value="<?php if(isset($_SESSION['helbidea'])) {echo $_SESSION['helbidea'];} ?>" placeholder="Helbidea" type="text">
                    </div>
                </div>
            </div>
            <h2 class="sec-title">Erabiltzailearen<b> harpidetzak</b></h2>
            <div class="erab-harp-cont">
                
            </div>
        </div>
        
    </main>
    <?php
        include "footer.php";
    ?>
</body>
</html>