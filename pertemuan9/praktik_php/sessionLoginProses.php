<?php
    include 'koneksi.php'; // Memasukkan file koneksi.php
    $username = $_POST['username']; // Mengambil nilai username dari form
    $password = md5($_POST['password']); // Mengambil nilai password dari form dan mengenkripsi menggunakan md5
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'"; // Query untuk mencari user 
    $result = mysqli_query($connect, $sql); // Menjalankan query
    $cek = mysqli_num_rows($result); // Menghitung jumlah baris 

    if ($cek > 0) { // Jika ada username dan password sesuai
        session_start(); // Memulai sesi
        $_SESSION['username'] = $username; // Menyimpan nilai username ke dalam variabel sesi
        $_SESSION['status'] = "login"; // Menyimpan status login ke dalam variabel sesi
        ?>
        Anda berhasil Login, silahkan menuju <!-- Menampilkan pesan login berhasil -->
        <a href="homeSession.php">Halaman Home</a> <!-- Tautan menuju halaman home -->
        <?php
    } else { // Jika tidak ada username dan password tidak sesuai
        ?>
        Gagal login, silahkan login lagi <!-- Menampilkan pesan login gagal -->
        <a href="sessionLoginForm.html">Halaman Login</a> <!-- Tautan untuk login kembali -->
        <?php
        echo mysqli_error($connect); // Menampilkan pesan error MySQL jika terjadi
    }
?>
