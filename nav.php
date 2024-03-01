<a href="kontaktua.php" class="contact-bt">?</a>
<header>
    <div class="header-left">
        <img class="logo" src="/resources/logo.png" alt="">
    </div>
    <div class="header-center">
        <a class="esteka" href="/index.php">Hasiera</a>
        <a class="esteka" href="/norgara.php">Nor gara</a>
        <a class="esteka" href="/historia.php">Historia</a>
        <a class="esteka" href="/bazkidetza.php">Bazkidetza</a>
        <a class="esteka" href="/palmaresa.php">Palmaresa</a>
        <a class="esteka" href="/emaitzak.php">Emaitzak</a>
    </div>
    <div class="header-right">
        <?php
            session_start();
            if (isset($_SESSION['username'])){
                if($_SESSION['admin']){
                    echo '<a class="logout-bt" href="/admin"><i class="bi bi-gear"></i></a>';
                }
                echo '<a href="erabiltzailea.php" class="user-cont">
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
        ?>
    </div>
</header>
<div id="alert-cont" class="alert-cont">
    <div class="alert-header">
        <div class="alert-header-title" id="alert-header-title">

        </div>
        <button class="alert-header-close-bt" onclick="closeAlerta()">x</button>
    </div>
    <div class="alert-body">
        <div class="alert-body-icon" id="alert-body-icon"></div>
        <div class="alert-body-text" id="alert-body-text"></div>
    </div>
    <div class="alert-footer">
        <button class="alert-footer-accept-bt" id="alert-button" onclick="closeAlerta()">Ados</button>
    </div>
</div>