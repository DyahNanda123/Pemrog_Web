<?php
// Memulai sesi
session_start();

// Memeriksa apakah sesi username tidak kosong
if (!empty($_SESSION['username'])) {
    // Memasukkan file koneksi, pesan_kilat, dan anti_injection
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    // Memeriksa apakah terdapat parameter jabatan dalam GET
    if (!empty($_GET['jabatan'])) {
        // Membersihkan input dari potensi serangan injeksi
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $keterangan = antiinjection($koneksi, $_POST['keterangan']);

        // Menyiapkan query untuk menambahkan jabatan baru
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES('$jabatan', '$keterangan')";

        // Menjalankan query dan memberikan pesan sesuai hasilnya
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Baru Ditambahkan.");
        } else {
            pesan('danger', "Gagal Menambahkan Jabatan Karena: " . mysqli_error($koneksi));
        }
        
        // Mengarahkan pengguna ke halaman jabatan setelah operasi selesai
        header("Location: ../index.php?page=jabatan");
    } elseif (!empty($_GET['anggota'])) {
        // Membersihkan input dari potensi serangan injeksi
        $username = antiinjection($koneksi, $_POST['username']);
        $password = antiinjection($koneksi, $_POST['password']);
        $level = antiinjection($koneksi, $_POST['level']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $nama = antiinjection($koneksi, $_POST['nama']);
        $jenis_kelamin = antiinjection($koneksi, $_POST['jenis_kelamin']);
        $alamat = antiinjection($koneksi, $_POST['alamat']);
        $no_telp = antiinjection($koneksi, $_POST['no_telp']);

        // Membuat salt dan menggabungkannya dengan password, lalu meng-hash password
        $salt = bin2hex(random_bytes(16));
        $combined_password = $salt . $password;
        $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);

        // Menyiapkan query untuk menambahkan data pengguna baru
        $query = "INSERT INTO user (username, password, salt, level) VALUES ('$username', '$hashed_password', '$salt','$level')";

        // Menjalankan query dan memberikan pesan sesuai hasilnya
        if (mysqli_query($koneksi, $query)) {
            // Mendapatkan ID terakhir yang dimasukkan
            $last_id = mysqli_insert_id($koneksi);
            // Menyiapkan query untuk menambahkan data anggota baru
            $query2 = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp, user_id, jabatan_id) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp', '$last_id','$jabatan')";

            // Menjalankan query dan memberikan pesan sesuai hasilnya
            if (mysqli_query($koneksi, $query2)) {
                pesan('success', "Anggota Baru Ditambahkan.");
            } else {
                pesan('warning', "Gagal Menabahkan Anggota Tetapi Data Login Tersimpan Karena: " . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', "Gagal Menambahkan Anggota Karena: " . mysqli_error($koneksi));
        }
        
        // Mengarahkan pengguna ke halaman anggota setelah operasi selesai
        header("Location: ../index.php?page=anggota");
    }
} else {
    // Mengarahkan pengguna ke halaman login jika tidak ada sesi username
    header("Location: ../index.php?page=login");
}
?>
