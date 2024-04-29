<?php
session_start();

// Memasukkan file koneksi database dan perlindungan CSRF
include "./koneksi.php";
include "./csrf.php";

// Mengambil id anggota yang akan dihapus dari permintaan POST
$id = $_POST['id'];

// Menyiapkan dan menjalankan query untuk menghapus data anggota berdasarkan id
$query = "DELETE FROM anggota WHERE id = ?";
$sql = $db1->prepare($query);
$sql->bind_param('i', $id);
$sql->execute();

// Mengirimkan respons JSON yang menyatakan penghapusan berhasil
echo json_encode(['success' => 'Sukses']);

// Menutup koneksi database
$db1->close();
?>
