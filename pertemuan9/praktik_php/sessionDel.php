<?php
    session_start(); // Memulai sesi

?>
<html>
    <body>
        <?php
            session_unset(); // Menghapus semua variabel sesi
            session_destroy(); // Menghancurkan sesi
            echo "All session variables are now removed, and the session is destroyed."; // Menampilkan pesan 
    </body>
</html>
