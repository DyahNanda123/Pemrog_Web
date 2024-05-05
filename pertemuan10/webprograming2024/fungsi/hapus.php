<?php
// Memulai sesi
session_start();

// Memeriksa apakah sesi username tidak kosong
if (!empty($_SESSION['username'])) {
    // Memasukkan file koneksi
    require '../config/koneksi.php';
    // Memasukkan file fungsi pesan kilat
    require '../fungsi/pesan_kilat.php';
    // Memasukkan file fungsi anti injection
    require '../fungsi/anti_injection.php';

    // Memeriksa apakah parameter jabatan tidak kosong
    if (!empty($_GET['jabatan'])) {
        // Mengambil nilai ID dari URL dan mencegah serangan injeksi
        $id = antiinjection($koneksi, $_GET['id']);
        
        // Menyiapkan query untuk menghapus jabatan berdasarkan ID
        $query = "DELETE FROM jabatan WHERE id = '$id'";
        
        // Menjalankan query dan menampilkan pesan sesuai hasilnya
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Terhapus.");
        } else {
            pesan('danger', "Jabatan Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
        
        // Mengarahkan kembali ke halaman jabatan setelah proses selesai
        header("Location: ../index.php?page=jabatan");
        
    // Memeriksa apakah parameter anggota tidak kosong
    } elseif (!empty($_GET['anggota'])) {
        // Mengambil nilai ID dari URL dan mencegah serangan injeksi
        $id = antiinjection($koneksi, $_GET['id']);
        
        // Menyiapkan query untuk menghapus anggota berdasarkan user_id
        $query = "DELETE FROM anggota WHERE user_id = '$id'";
        
        // Menjalankan query dan menampilkan pesan sesuai hasilnya
        if (mysqli_query($koneksi, $query)) {
            // Jika anggota berhasil dihapus, juga hapus entri login terkait
            $query2 = "DELETE FROM user WHERE id = '$id'";
            // Menjalankan query untuk menghapus login
            if (mysqli_query($koneksi, $query2)) {
                pesan('success', "Anggota Telah Terhapus.");
            } else {
                pesan('warning', "Data Anggota Terhapus Tetapi Login Tidak Terhapus Karena: " . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', "Anggota Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
        
        // Mengarahkan kembali ke halaman anggota setelah proses selesai
        header("Location: ../index.php?page=anggota");
    }
}
?>
