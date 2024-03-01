<?php include "head.php"; ?>
<body>
    <?php
        include "nav.php";

        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $query=getAlbistea($id);

            if(mysqli_num_rows($query)>0){
                while($row = mysqli_fetch_array($query)){
                    $albistea_titulua=$row["titulua"];
                    $albistea_cont=$row["gorputza"];
                    $albistea_irudia=$row["irudia"];
                };
            }
        }
        else{

        }
    ?>
    <main>
        <div class="main-art">
            <div class="alb-cont">
                <div class="alb-img">
                    <img src="data:image/jpeg;base64,<?php echo $albistea_irudia; ?>" alt="">
                </div>
                <div class="alb-header">
                    <h1><?php echo $albistea_titulua; ?></h1>
                </div>
                <div class="alb-desc">
                    <?php echo nl2br($albistea_cont); ?>
                </div>
            </div>
        </div>
    </main>
    <?php
        include "footer.php";
    ?>
</body>
</html>