<?php include "head.php"; ?>
<body>
    <div class="login-main">
        <form action="/funtzioak/loginFuntzioa.php" method="POST" class="login-cont">
            <div class="login-cont-logo">
                <img src="resources/logo.png" alt="">
            </div>
            <div class="login-cont-form">
                <div class="login-cont-form-user">
                    <input type="text" name="username_form" placeholder="Erabiltzailea" id="username_form">
                </div>
                <div class="login-cont-form-password">
                    <input type="password" placeholder="Pasahitza" name="password_form" id="password_form">
                </div>
            </div>
            <?php if(isset($_GET['errorea'])){
                echo $_GET['errorea'];
            } ?>
            <div class="login-cont-footer">
                <button class="login-cont-footer-bt" type="sumbit">Saioa hasi</button>
            </div>
        </form>
    </div>
</body>
</html>