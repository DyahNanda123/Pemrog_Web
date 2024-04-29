<?php
    session_start(); // Memulai sesi

?>

<html>
    <body>
        <?php
            echo "Favorite color is ".$_SESSION["favcolor"]."<br>"; // Menampilkan warna favorit dari sesi
            echo "Favorite animal is ".$_SESSION["favanimal"]."<br>"; // Menampilkan hewan favorit dari sesi
        ?> 
    </body>
</html>
