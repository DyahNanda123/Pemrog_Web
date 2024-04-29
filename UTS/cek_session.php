<?php
session_start();

// Cek apakah session telah diatur
if(isset($_SESSION['nisn']) && isset($_SESSION['nama_siswa']) && isset($_SESSION['nik'])) {
    echo "PENDAFTAR BEASISWA KIP-K 2024" . "<br>" . "<br>";
    echo "NISN: " . $_SESSION['nisn'] . "<br>";
    echo "Nama Siswa: " . $_SESSION['nama_siswa'] . "<br>";
    echo "NIK: " . $_SESSION['nik'] . "<br>";
    echo "No KIP: " . $_SESSION['noKip'] . "<br>";
    echo "No KKS: " . $_SESSION['noKKS'] . "<br>";
    echo "Asal Sekolah: " . $_SESSION['asal'] . "<br>";
    echo "Tahun Lulus: " . $_SESSION['th'] . "<br>";
    echo "Tempat Lahir: " . $_SESSION['tempatLahir'] . "<br>";
    echo "Tanggal Lahir: " . $_SESSION['tglLahir'] . "<br>";
    echo "Jenis Kelamin: " . $_SESSION['jk'] . "<br>";
    echo "Agama: " . $_SESSION['agama'] . "<br>";
    echo "Alamat: " . $_SESSION['alamat'] . "<br>";
    echo "Provinsi: " . $_SESSION['provinsi'] . "<br>";
    echo "Kabupaten/Kota: " . $_SESSION['kab'] . "<br>";
    echo "Kode Pos: " . $_SESSION['pos'] . "<br>";
    echo "Email: " . $_SESSION['email'] . "<br>";
    echo "No Telepon: " . $_SESSION['no'] . "<br>";
    echo "No Handphone: " . $_SESSION['hp'] . "<br>";
} else {
    echo "Session belum diatur atau telah kedaluwarsa.";
}
?>
