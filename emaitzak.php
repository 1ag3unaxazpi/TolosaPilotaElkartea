<?php include "head.php"; ?>
<body>
    <?php
        include "nav.php";
    ?>
    <main>
        <div class="main-art">
        <h2 class="sec-title"><b>Emaitzak</b></h2>
            <div class="filter-cont">
                <div class="filter-ind">
                    <label for="lehiaketa_filter">Lehiaketa</label>
                    <select name="" id="lehiaketa_filter">
                        <?php
                            $query = getLehiaketaIzenak();

                            if(mysqli_num_rows($query)>0){
                                while($row = mysqli_fetch_array($query)){
                                    $lehiaketa_izena=$row["izena"];

                                    echo '<option value="' . $lehiaketa_izena . '">' . $lehiaketa_izena . '</option>';
                                };
                            }
                        ?>
                    </select>
                </div>
                <div class="filter-ind">
                    <label for="kategoria_filter">Kategoria</label>
                    <select name="" id="kategoria_filter">
                        <?php
                            $query = getKategoriak();

                            if(mysqli_num_rows($query)>0){
                                while($row = mysqli_fetch_array($query)){
                                    $kategoria=$row["kategoria"];

                                    echo '<option>' . $kategoria . '</option>';
                                };
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="emaitza-txart-kont" id="emaitza-txart-kont">
            <script>

                datuakKargatu();

                document.getElementById("lehiaketa_filter").addEventListener("change", datuakKargatu);
                document.getElementById("kategoria_filter").addEventListener("change", datuakKargatu);

                function datuakKargatu(){
                    lehiaketa_filter=document.getElementById("lehiaketa_filter").value;
                    kategoria_filter=document.getElementById("kategoria_filter").value;

                    const xhttp = new XMLHttpRequest();
                    xhttp.onload = function() {
                        document.getElementById("emaitza-txart-kont").innerHTML =
                        this.responseText;
                    }
                    xhttp.open("GET", "funtzioak/emaitzakLortu.php?lehiaketa="+lehiaketa_filter+"&kategoria="+kategoria_filter);
                    xhttp.send();
                }
            </script>
            </div>
        </div>
    </main>
    <?php
        include "footer.php";
    ?>
</body>
</html>