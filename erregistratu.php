<?php include "head.php"; ?>
<body>
    <div class="login-main">
        <div class="login-cont">
            <div class="login-cont-logo">
                <img src="resources/logo.png" alt="">
            </div>
            <form beforesumbit="" id="form_erregistratu" method="POST" action="/funtzioak/erregistratuFuntzioa.php" class="login-cont-form">
                <div class="login-cont-form-user">
                    <input type="text" name="izena" placeholder="Izena" id="izena">
                </div>
                <div class="login-cont-form-user">
                    <input type="text" name="abizena" placeholder="Abizena" id="abizena">
                </div>
                <div class="login-cont-form-user">
                    <input type="email" name="email" placeholder="Email-a" id="email">
                </div>
                <div class="login-cont-form-user">
                    <input type="email" name="helbidea" placeholder="Helbidea (Aukerakoa)" id="helbidea">
                </div>
                <div class="login-cont-form-user">
                    <input type="email" name="tlf" placeholder="Telefono zenbakia (Aukerakoa)" id="tlf">
                </div>
                <div class="login-cont-form-user">
                    <input type="text" name="username" placeholder="Erabiltzailea" id="username">
                </div>
                <div class="login-cont-form-password">
                    <input type="password" placeholder="Pasahitza" name="password" id="password">
                </div>
                <div class="login-cont-form-password">
                    <input type="password" placeholder="Pasahitza errepikatu" name="password_er" id="password_er">
                </div>
            </form>
            <div class="login-cont-footer">
                <button form="form_erregistratu" type="sumbit" class="login-cont-footer-bt" id="erregistratu-bt" disabled>Erabiltzailea sortu</button>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    
        izena = document.getElementById("izena");
        abizena = document.getElementById("abizena");
        email = document.getElementById("email");
        helbidea = document.getElementById("helbidea");
        tlf = document.getElementById("tlf");
        username = document.getElementById("username");
        password = document.getElementById("password");
        password_er = document.getElementById("password_er");


        password_er.addEventListener("keyup", pasahitzaKonprobatu);
        password.addEventListener("keyup", pasahitzaKonprobatu);

        function pasahitzaKonprobatu(){
            console.log("BAI")
            if (password.value != password_er.value){
                password.style.borderColor="red";
                password.style.color="red";
                password_er.style.borderColor="red";
                password_er.style.color="red";
            }
            else{
                password.style.borderColor="black";
                password.style.color="black";
                password_er.style.borderColor="black";
                password_er.style.color="black";
                document.getElementById("erregistratu-bt").disabled=false
            }
        }
        
    
</script>