<a href="/kontaktua.php" class="contact-bt">?</a>
<header>
    <div class="header-left">
        <img class="logo" src="/resources/logo.png" alt="">
    </div>
    <div class="header-center">
        <a class="esteka" href="/index.php">Erabiltzaileak</a>
        <a class="esteka" href="/norgara.php">Ezarpenak</a>
        <a class="esteka" href="/historia.php">Historia</a>
        <a class="esteka" href="/bazkidetza.php">Bazkidetza</a>
        <a class="esteka" href="/palmaresa.php">Palmaresa</a>
    </div>
    <div class="header-right">
        <?php
            session_start();
            if (isset($_SESSION['username'])){
                if($_SESSION['admin']){
                    echo '<a class="logout-bt" href="/"><i class="bi bi-arrow-left-circle"></i></i></a>';
                }
                echo '<a href="/erabiltzailea.php" class="user-cont">
                <img src="/resources/user-icon-argia.png" width="40px" alt="">
                <span>' . $_SESSION['izena'] . ' ' . $_SESSION['abizena'] . '</span>
                </a>
                <a class="logout-bt" href="/funtzioak/logout.php"><i class="bi bi-box-arrow-right"></i></a>
                ';
            }
            else{
                echo '<a class="botoia" href="/login.php">Saioa hasi</a>
                <a class="botoia-tx" href="/erregistratu.php">Erregistratu</a>';
            }

            include "../funtzioak/sesioa.php"; 
            adminKonprobatu() 
        ?>
    </div>
</header>