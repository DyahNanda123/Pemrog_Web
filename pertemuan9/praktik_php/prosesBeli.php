<?php
    if(isset($_POST["beliNovel"]) && isset($_POST["beliBuku"])){ // Memeriksa apakah data beliNovel dan beliBuku sudah dikirim
        setcookie("beliNovel", $_POST["beliNovel"]); // Menyimpan nilai beliNovel dalam cookie
        setcookie("beliBuku", $_POST["beliBuku"]); // Menyimpan nilai beliBuku dalam cookie
        header("location:keranjangBelanja.php"); // Mengarahkan ke halaman keranjangBelanja.php
    }
?>
