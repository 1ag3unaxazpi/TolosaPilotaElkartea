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
            <form action="/funtzioak/erabiltzaileaFuntzioak.php" method="POST" class="erab-row" id="erab">
                <div>
                    <img width="250px" src="/resources/user-icon-argia.png" alt="">
                </div>
                <div class="erab-column">
                    <div class="erab-row-ind">
                        <input value="<?php if(isset($_SESSION['izena'])) {echo $_SESSION['izena'];} ?>" placeholder="izena" type="text" name="izena">
                    </div>
                    <div class="erab-row-ind">
                        <input value="<?php if(isset($_SESSION['email'])) {echo $_SESSION['email'];} ?>" placeholder="email" type="text" name="email">
                    </div>
                </div>
                <div class="erab-column">
                    <div class="erab-row-ind">
                        <input value="<?php if(isset($_SESSION['abizena'])) {echo $_SESSION['abizena'];} ?>" placeholder="abizena" type="text" name="abizena">
                    </div>
                    <div class="erab-row-ind">
                        <input value="<?php if(isset($_SESSION['tlf'])) {echo $_SESSION['tlf'];} ?>" placeholder="Telefono zenbakia" type="text" name="tlf">
                    </div>
                </div>
                <div class="erab-column">
                    <div class="erab-row-ind">
                        <input value="<?php if(isset($_SESSION['password'])) {echo $_SESSION['password'];} ?>" placeholder="Pasahitza" type="password" name="password">
                        <input value="<?php if(isset($_SESSION['username'])) {echo $_SESSION['username'];} ?>" style="display: none;" placeholder="Erabiltzailea" type="text" name="username">
                    </div>
                    <div class="erab-row-ind">
                        <input value="<?php if(isset($_SESSION['helbidea'])) {echo $_SESSION['helbidea'];} ?>" placeholder="Helbidea"  name="helbidea" type="text">
                    </div>
                </div>
            </form>
            <div class="baja-cont">
                <button class="baja-bt" onclick="alerta('Zihur erabiltzailea ezabatu nahi duzula? Baizkoa izank egin klik onartu botoian bestela itxi ezazu lehilatila hau', 'Zihur?', `<i class='bi bi-exclamation-triangle'></i>`,'window.location.href=`funtzioak/bajaEman.php?username=<?php echo $_SESSION['username']; ?>`')"><i class="bi bi-x-lg"></i> Baja eman</button>
            </div>
            <?php
                if(isset($_GET['success'])){
                    if($_GET['success']){
                        echo "<script>alerta('Saioa hasi berriz aldaketak ikusteko', 'Adi', '','window.location.href=`funtzioak/logout.php`')</script>";
                    }
                }
            ?>
            <button type="submit" form="erab" class="erab-bt-gorde">Gorde</button>
        </div>
    </main>
    <?php
        include "footer.php";
    ?>
</body>
</html>