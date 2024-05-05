<?php
// Memeriksa apakah sesi sudah dimulai, jika belum, mulai sesi
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Memasukkan file koneksi ke database
include "config/koneksi.php";
// Memasukkan file fungsi untuk menampilkan pesan
include "fungsi/pesan_kilat.php";
// Memasukkan file fungsi untuk mencegah serangan SQL Injection
include "fungsi/anti_injection.php";

// Membersihkan input dari potensi serangan SQL Injection
$username = antiinjection($koneksi, $_POST['username']);
$password = antiinjection($koneksi, $_POST['password']);

// Menyiapkan query untuk memilih username, level, salt, dan password dari tabel user
$query = "SELECT username, level, salt, password as hashed_password FROM user WHERE username = '$username'";
// Menjalankan query
$result = mysqli_query($koneksi, $query);

// Memeriksa apakah query berhasil dijalankan
if ($result) {
    // Mengambil baris hasil query sebagai array asosiatif
    $row = mysqli_fetch_assoc($result);
    // Menutup koneksi database
    mysqli_close($koneksi);
    
    // Mengambil salt dan hashed password dari hasil query
    $salt = $row['salt'];
    $hashed_password = $row['hashed_password'];

    // Memeriksa apakah salt dan hashed password tidak null
    if ($salt !== null && $hashed_password !== null) {
        // Menggabungkan salt dengan password yang dimasukkan
        $combined_password = $salt . $password;

        // Memeriksa apakah password yang dimasukkan sesuai dengan hashed password yang disimpan di database
        // atau apakah login sebagai admin dengan username 'admin' dan password 'admin'
        if (password_verify($combined_password, $hashed_password) || ($username === 'admin' && $password === 'admin' && $row['level'] === 'admin')) {
            // Menyimpan username dan level pengguna ke dalam sesi
            $_SESSION['username'] = $row['username'];
            $_SESSION['level'] = $row['level'];
            // Mengarahkan pengguna ke halaman utama setelah login berhasil
            header('Location: index.php');
        } else {
            // Menampilkan pesan kesalahan karena password salah
            pesan('danger', "Login gagal. Password Anda Salah.");
            // Mengarahkan pengguna kembali ke halaman login
            header("Location: login.php");
        }
    } else {
        // Menampilkan pesan kesalahan karena password tidak valid
        pesan('danger', "Login gagal. Password tidak valid.");
        // Mengarahkan pengguna kembali ke halaman login
        header("Location: login.php");
    }
} else {
    // Menampilkan pesan kesalahan karena terjadi kesalahan dalam mengakses data pengguna
    pesan('danger', "Terjadi kesalahan dalam mengakses data pengguna.");
    // Mengarahkan pengguna kembali ke halaman login
    header("Location: login.php");
}
?>
