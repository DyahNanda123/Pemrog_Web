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
        // Mengambil nilai ID, jabatan, dan keterangan dari formulir dengan mencegah serangan injeksi
        $id = antiinjection($koneksi, $_POST['id']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $keterangan = antiinjection($koneksi, $_POST['keterangan']);
        
        // Menyiapkan query untuk mengupdate jabatan berdasarkan ID
        $query = "UPDATE jabatan SET jabatan = '$jabatan' ,keterangan = '$keterangan' WHERE id = '$id'";
        
        // Menjalankan query dan menampilkan pesan sesuai hasilnya
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Diubah.");
        } else {
            pesan('danger', "Mengubah Jabatan Karena: " . mysqli_error($koneksi));
        }
        
        // Mengarahkan ke halaman jabatan setelah proses selesai
        header("Location: ../index.php?page=jabatan");
        
    // Memeriksa apakah parameter anggota tidak kosong
    } elseif (!empty($_GET['anggota'])) {
        // Mengambil nilai user_id, nama, jabatan, jenis_kelamin, alamat, no_telp, dan username dari formulir dengan mencegah serangan injeksi
        $user_id = antiinjection($koneksi, $_POST['id']);
        $nama = antiinjection($koneksi, $_POST['nama']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $jenis_kelamin = antiinjection($koneksi, $_POST['jenis_kelamin']);
        $alamat = antiinjection($koneksi, $_POST['alamat']);
        $no_telp = antiinjection($koneksi, $_POST['no_telp']);
        $username = antiinjection($koneksi, $_POST['username']);

        // Menyiapkan query untuk mengupdate anggota berdasarkan user_id
        $query_anggota = "UPDATE anggota SET nama = '$nama' ,jabatan_id = '$jabatan',jenis_kelamin = '$jenis_kelamin',alamat = '$alamat',no_telp = '$no_telp' WHERE user_id = '$user_id'";
        
        // Menjalankan query dan menampilkan pesan sesuai hasilnya
        if (mysqli_query($koneksi, $query_anggota)) {
            // Memeriksa apakah password tidak kosong
            if (!empty($_POST['password'])) {
                // Mengambil password dari formulir
                $password = $_POST['password'];
                // Membuat salt acak
                $salt = bin2hex(random_bytes(16));
                // Menggabungkan salt dan password
                $combine_password = $salt . $password;
                // Meng-hash password dengan bcrypt
                $hashed_password = password_hash($combine_password, PASSWORD_BCRYPT);

                // Menyiapkan query untuk mengupdate user berdasarkan user_id
                $query_user = "UPDATE user SET username = '$username' ,password = '$hashed_password', salt = '$salt' WHERE id = '$user_id'";

                // Menjalankan query dan menampilkan pesan sesuai hasilnya
                if (mysqli_query($koneksi, $query_user)) {
                    pesan('success', "Anggota Telah Diubah.");
                } else {
                    pesan('warning', "Data Anggota Berhasil Diubah Tetapi Password Gagal Diubah Karena: " . mysqli_error($koneksi));
                }
            } else {
                // Jika password kosong, hanya mengupdate username
                $query_user = "UPDATE user SET username = '$username' WHERE id = '$user_id'";
                // Menjalankan query dan menampilkan pesan sesuai hasilnya
                if (mysqli_query($koneksi, $query_user)) {
                    pesan('success', "Anggota Telah Diubah.");
                } else {
                    pesan('warning', "Data Anggota Berhasil Diubah Tetapi Username Gagal Diubah Karena: " . mysqli_error($koneksi));
                }
            }
        } else {
            pesan('danger', "Mengubah Anggota Karena: " . mysqli_error($koneksi));
        }
        
        // Mengarahkan ke halaman anggota setelah proses selesai
        header("Location: ../index.php?page=anggota");
    }
}
?>
