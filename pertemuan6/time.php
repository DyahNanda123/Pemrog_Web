<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h3> Time </h3>
        <?php
        date_default_timezone_set("asia/jakarta"); // mengatur zona waktu menjadi Waktu Indonesia Barat (WIB),
        echo date("h:i:sa"); //untuk mendapatkan dan memformat waktu saat ini sesuai dengan format yang diinginkan.
        ?>
    </body>
</html>