<?php
// Memeriksa apakah sesi sudah dimulai, jika belum, mulai sesi
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Memeriksa apakah level pengguna tidak kosong dalam sesi
if (!empty($_SESSION['level'])) {
    // Memasukkan file koneksi ke database
    require 'config/koneksi.php';
    // Memasukkan file fungsi untuk menampilkan pesan
    require 'fungsi/pesan_kilat.php';

    // Memasukkan file header dari template admin
    include 'admin/template/header.php';
    
    // Memeriksa apakah ada parameter 'page' dalam URL
    if (!empty($_GET['page'])) {
        // Memasukkan file halaman yang sesuai dengan nilai parameter 'page'
        include 'admin/module/' . $_GET['page'] . '/index.php';
    } else {
        // Jika tidak ada parameter 'page', memasukkan halaman utama dari template admin
        include 'admin/template/home.php';
    }
    
    // Memasukkan file footer dari template admin
    include 'admin/template/footer.php';
} else {
    // Jika level pengguna kosong dalam sesi, mengarahkan pengguna kembali ke halaman login
    header("Location: login.php");
}
?>
