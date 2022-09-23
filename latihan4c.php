<?php
$negara = [
    "Indonesia" => "D.K.I Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naupyidaw"];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Associative</title>
    </head>
        <body>
        <p>
            <b>Daftar Negara ASEAN dan Ibukota : <br></b>

        <?php foreach ($negara as $kota => $ibukota) : 
        ?>

            <li><?php echo "$kota : $ibukota" ?></li>

        <?php endforeach
        ?>
        </p>
        </body>
</html>
