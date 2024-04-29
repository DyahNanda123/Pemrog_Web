<?php
session_start();
include "./koneksi.php";
include "./csrf.php";

// Mengambil data dari formulir
$id = $_POST['id'];
$nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
$jenis_kelamin = stripslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES)));
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'], ENT_QUOTES)));
$no_telp = stripslashes(strip_tags(htmlspecialchars($_POST['no_telp'], ENT_QUOTES)));

// Memeriksa apakah id kosong atau tidak
if ($id == "") {
    // Jika id kosong, jalankan query untuk menambahkan data anggota baru
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES (?, ?, ?, ?)";
    $sql = $db1->prepare($query);
    $sql->bind_param('ssss', $nama, $jenis_kelamin, $alamat, $no_telp);
    $sql->execute();
} else {
    // Jika id tidak kosong, jalankan query untuk memperbarui data anggota yang ada
    $query = "UPDATE anggota SET nama=?, jenis_kelamin=?, alamat=?, no_telp=? WHERE id=?";
    $sql = $db1->prepare($query);
    $sql->bind_param('ssssi', $nama, $jenis_kelamin, $alamat, $no_telp, $id);
    $sql->execute();
}

// Mengirimkan respon JSON jika operasi berhasil
echo json_encode(['success' => 'Sukses']);

// Menutup koneksi database
$db1->close();
?>
