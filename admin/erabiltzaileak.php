<?php include "head_admin.php"; ?>

<?php include "nav_admin.php"; ?>

<main>
    <div class="main-art">
        <div class="erabil-table-cont">

        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Erabiltzailea</th>
                <th scope="col">Izena</th>
                <th scope="col">Abizena</th>
                <th scope="col">Email-a</th>
                <th scope="col">Telefonoa</th>
                <th scope="col">Helbidea</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = getErabiltzaileak();
                    
                    if(mysqli_num_rows($query)>0){
                        while($row = mysqli_fetch_array($query)){
                            $username=$row["username"];
                            $izena=$row["izena"];
                            $abizenak=$row["abizenak"];
                            $email=$row["email"];
                            $telefonoa=$row["telefonoa"];
                            $helbidea=$row["helbidea"];

                            echo '
                            <tr>
                                <td>' . $username . '</td>
                                <td>' . $izena . '</td>
                                <td>' . $abizenak . '</td>
                                <td>' . $email . '</td>
                                <td>' . $telefonoa . '</td>
                                <td>' . $helbidea . '</td>
                            </tr>
                            ';
                        };
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div>
    
    </div>
</main>