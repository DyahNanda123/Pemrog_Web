<?php
// mengatur mySql
    $namaHost = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $database = "prakwebdb"; 
    try {
        $connect = mysqli_connect($namaHost, $username, $password, $database); //  melakukan koneksi ke MySQL
        if ($connect) { // Jika koneksi berhasil
            echo "Koneksi dengan MySQL Berhasil <br>"; 
        } else { // Jika koneksi gagal
            echo "Koneksi dengan MySQL Gagal " . mysqli_connect_error(); 
        }
    } 
    catch (Exception $e) { 
        echo $e->getMessage(); // Menampilkan pesan kesalahan
    }
?>
