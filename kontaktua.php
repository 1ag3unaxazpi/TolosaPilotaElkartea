<!DOCTYPE html>
<html lang="eus">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Tolosako Pilota Elkartea - Kontaktua</title>
</head>
<body>
    <?php
        include "nav.php";
    ?>
    <main>
        <div class="main-art">
            <div class="kontaktua-cont">
                <h1 class="sec-title" style="margin-top: 0px;"><b>Ezagutu</b> gaitezen elkar</h1>
                <form action="">
                    <input placeholder="Email-a" type="email">
                    <input placeholder="Izena" type="text">
                    <input placeholder="Gaia" type="text">
                    <textarea placeholder="Mezua" name="" id="" cols="30" rows="10"></textarea>
                    <div class="kontaktua-cont-footer">
                        <button class="kontaktua-bt">Bidali</button>
                    </div>
                </form>
            </div>
            <div class="kontaktua-cont">
                <h2 class="sec-title" style="margin-top: 0px;"><b>Bisita</b> gaitzazu</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d461.8590873180187!2d-2.0750501351267143!3d43.13638877126905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd504b67f4d4e931%3A0x809e85e39e61b607!2sFronton%20Beotibar!5e0!3m2!1ses!2ses!4v1708429778744!5m2!1ses!2ses" height="600px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </main>
    <?php
        include "footer.php";
    ?>
</body>
</html>