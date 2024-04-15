<?php
session_start();

// Cek apakah session telah diatur
if(isset($_SESSION['nisn']) && isset($_SESSION['nama_siswa']) && isset($_SESSION['nik'])) {
    echo "PENDAFTAR BEASISWA KIP-K 2024" . "<br>" . "<br>";
    echo "Session NISN: " . $_SESSION['nisn'] . "<br>";
    echo "Session Nama Siswa: " . $_SESSION['nama_siswa'] . "<br>";
    echo "Session NIK: " . $_SESSION['nik'] . "<br>";
} else {
    echo "Session belum diatur atau telah kedaluwarsa.";
}
?>
