<?php
    include "koneksi.php"; // Memasukkan file koneksi.php

    $username = $_POST['username']; // Mengambil nilai username dari form
    $password = md5($_POST['password']); // Mengambil nilai password dari form dan mengenkripsi menggunakan md5

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'"; // Query untuk mencari user berdasarkan username dan password
    $result = mysqli_query($connect, $query); // Menjalankan query
    $row = mysqli_fetch_assoc($result); // Mengambil hasil query dalam bentuk array

    if ($row['level'] == 1) { // Jika level user adalah 1 (admin)
        echo "Anda berhasil login. silahkan menuju"; ?> <!-- Menampilkan pesan login berhasil -->
        <a href="homeAdmin.html">Halaman HOME</a> <!-- Tautan menuju halaman home admin -->
    <?php
    } else if ($row['level'] == 2) { // Jika level user adalah 2 (guest)
        echo "Anda berhasil login. silahkan menuju"; ?> <!-- Menampilkan pesan login berhasil -->
        <a href="homeGuest.html">Halaman HOME</a> <!-- Tautan menuju halaman home guest -->
    <?php
    } else { // Jika login gagal
        echo "Anda gagal login. silahkan "; ?> <!-- Menampilkan pesan login gagal -->
        <a href="loginForm1.html">Login Kembali</a> <!-- Tautan untuk login kembali -->
    <?php
        echo mysqli_error($connect); // Menampilkan pesan error MySQL jika terjadi
    }
?>
