<?php
    include "koneksi.php"; // Memasukkan file koneksi.php

    $username = $_POST['username']; // Mengambil nilai username dari form
    $password = md5($_POST['password']); // Mengambil nilai password dari form dan mengenkripsi menggunakan md5

    $query = "SELECT * FROM user WHERE username = '$username' and password = '$password'"; // Query untuk mencari user 
    $result = mysqli_query($connect, $query); // Menjalankan query
    $cek = mysqli_num_rows($result); // Menghitung jumlah baris 
    
    if ($cek) { // Jika username dan password sesuai
        echo "Anda berhasil login. Silahkan menuju "; ?>
        <a href="homeAdmin.html">Halaman HOME</a> <!-- Tautan menuju halaman home -->
<?php
    } else { // Jika tidak ada username dan password tidak sesuai
        echo "Anda gagal login. Silahkan "; ?> 
        <a href="loginForm.html">Login kembali</a> <!-- Tautan untuk login kembali -->
<?php
        echo mysqli_error($connect); // Menampilkan pesan error MySQL jika terjadi
    }    
?>
