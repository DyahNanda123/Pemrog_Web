<?php
    session_start(); // Memulai sesi

?>

<html>
    <body>
        <?php
            $_SESSION["favcolor"] = "green"; // Menyimpan nilai "green" ke variabel sesi favcolor
            $_SESSION["favanimal"] = "set"; // Menyimpan nilai "set" ke variabel sesi favanimal
            echo "Session variables are set."; 
        ?> 
    </body>
</html>
