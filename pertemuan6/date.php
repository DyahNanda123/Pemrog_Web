<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <h3>Date</h3> 
        <?php
        echo " Today is ". date("y/m/d") . "<br>"; // Menampilkan tanggal hari ini dalam format tahun/bulan/tanggal, contohnya "21/03/25".
        echo " Today is ". date("y.m.d") . "<br>"; // Menampilkan tanggal hari ini dalam format tahun.bulan.tanggal, contohnya "21.03.25".
        echo " Today is ". date("y-m-d") . "<br>"; // Menampilkan tanggal hari ini dalam format tahun-bulan-tanggal, contohnya "21-03-25".
        echo " Today is ". date("l") . "<br>"; // Menampilkan nama hari ini, contohnya "Thursday".
        ?>
    </body>
</html>