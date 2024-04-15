<?php
// Cek apakah cookies tersedia
if(isset($_COOKIE['nisn']) && isset($_COOKIE['nama_siswa']) && isset($_COOKIE['nik'])) {
    echo "PENDAFTAR BEASISWA KIP-K 2024" . "<br>" . "<br>";
    echo "Cookie NISN: " . $_COOKIE['nisn'] . "<br>";
    echo "Cookie Nama Siswa: " . $_COOKIE['nama_siswa'] . "<br>";
    echo "Cookie NIK: " . $_COOKIE['nik'] . "<br>";
} else {
    echo "Cookies tidak tersedia.";
}
?>
