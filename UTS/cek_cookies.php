<?php
// Cek apakah cookies tersedia
if(isset($_COOKIE['nisn']) && isset($_COOKIE['nama_siswa']) && isset($_COOKIE['nik'])) {
    echo "PENDAFTAR BEASISWA KIP-K 2024" . "<br>" . "<br>";
    echo "NISN: " . $_COOKIE['nisn'] . "<br>";
    echo "Nama Siswa: " . $_COOKIE['nama_siswa'] . "<br>";
    echo "NIK: " . $_COOKIE['nik'] . "<br>";
    echo "No KIP: " . $_COOKIE['noKip'] . "<br>";
    echo "No KKS: " . $_COOKIE['noKKS'] . "<br>";
    echo "Asal Sekolah: " . $_COOKIE['asal'] . "<br>";
    echo "Tahun Lulus: " . $_COOKIE['th'] . "<br>";
    echo "Tempat Lahir: " . $_COOKIE['tempatLahir'] . "<br>";
    echo "Tanggal Lahir: " . $_COOKIE['tglLahir'] . "<br>";
    echo "Jenis Kelamin: " . $_COOKIE['jk'] . "<br>";
    echo "Agama: " . $_COOKIE['agama'] . "<br>";
    echo "Alamat: " . $_COOKIE['alamat'] . "<br>";
    echo "Provinsi: " . $_COOKIE['provinsi'] . "<br>";
    echo "Kabupaten/Kota: " . $_COOKIE['kab'] . "<br>";
    echo "Kode Pos: " . $_COOKIE['pos'] . "<br>";
    echo "Email: " . $_COOKIE['email'] . "<br>";
    echo "No Telepon: " . $_COOKIE['no'] . "<br>";
    echo "No Handphone: " . $_COOKIE['hp'] . "<br>";
} else {
    echo "Cookies tidak tersedia.";
}
?>
