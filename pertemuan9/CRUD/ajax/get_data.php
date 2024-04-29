<?php
session_start();
include "./koneksi.php";
include "./csrf.php";

// Mengambil id dari formulir
$id = $_POST['id'];

// Menyiapkan dan menjalankan query untuk mengambil data anggota berdasarkan id
$query = "SELECT * FROM anggota WHERE id = ? ORDER BY id DESC";
$sql = $db1->prepare($query);
$sql->bind_param('i', $id);
$sql->execute();
$res1 = $sql->get_result();

// Mengambil hasil query dan menyusunnya ke dalam array
while ($row = $res1->fetch_assoc()) {
    $h['id'] = $row['id'];
    $h['nama'] = $row['nama'];
    $h['jenis_kelamin'] = $row['jenis_kelamin'];
    $h['alamat'] = $row['alamat'];
    $h['no_telp'] = $row['no_telp'];
}

// Mengirimkan respon JSON berisi data anggota
echo json_encode($h);

// Menutup koneksi database
$db1->close();
?>
