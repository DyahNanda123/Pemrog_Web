<!DOCTYPE html>
<html>
<body>

<?php
// Mengambil data dari formulir jika tersedia
$noKK = isset($_POST["noKK"]) ? htmlspecialchars($_POST["noKK"]) : "";
$nikKK = isset($_POST["nikKK"]) ? htmlspecialchars($_POST["nikKK"]) : "";
$namaayah = isset($_POST["namaayah"]) ? htmlspecialchars($_POST["namaayah"]) : "";
$statusayah = isset($_POST["statusayah"]) ? htmlspecialchars($_POST["statusayah"]) : "";
$hubayah = isset($_POST["hubayah"]) ? htmlspecialchars($_POST["hubayah"]) : "";
$pendidikanAyah = isset($_POST["pendidikanAyah"]) ? htmlspecialchars($_POST["pendidikanAyah"]) : "";
$kerjaAyah = isset($_POST["kerjaAyah"]) ? htmlspecialchars($_POST["kerjaAyah"]) : "";
$namaibu = isset($_POST["namaibu"]) ? htmlspecialchars($_POST["namaibu"]) : "";
$statusibu = isset($_POST["statusibu"]) ? htmlspecialchars($_POST["statusibu"]) : "";
$pendidikanIbu = isset($_POST["pendidikanIbu"]) ? htmlspecialchars($_POST["pendidikanIbu"]) : "";
$kerjaIbu = isset($_POST["kerjaIbu"]) ? htmlspecialchars($_POST["kerjaIbu"]) : "";
$tanggungan = isset($_POST["tanggungan"]) ? htmlspecialchars($_POST["tanggungan"]) : "";
$noOrtu = isset($_POST["noOrtu"]) ? htmlspecialchars($_POST["noOrtu"]) : "";
?>

<script>
    // Konfirmasi sebelum menampilkan data siswa
    var konfirmasi = confirm("Apakah Anda yakin dengan data yang telah diinputkan?");
    if (!konfirmasi) {
        // Redirect kembali ke halaman sebelumnya jika pengguna tidak yakin
        history.back();
    }
</script>

<?php
// Menampilkan data yang diterima
echo "<h2>Data Keluarga:</h2>";
echo "Nomor KK: " . $noKK . "<br>";
echo "NIK Kepala Keluarga: " . $nikKK . "<br>";
echo "Nama Ayah/Wali: " . $namaayah . "<br>";
echo "Status Ayah/Wali: " . $statusayah . "<br>";
echo "Hubungan dengan Ayah: " . $hubayah . "<br>";
echo "Pendidikan Ayah/Wali: " . $pendidikanAyah . "<br>";
echo "Pekerjaan Ayah/Wali: " . $kerjaAyah . "<br>";
echo "Nama Ibu: " . $namaibu . "<br>";
echo "Status Ibu: " . $statusibu . "<br>";
echo "Pendidikan Ibu: " . $pendidikanIbu . "<br>";
echo "Pekerjaan Ibu: " . $kerjaIbu . "<br>";
echo "Jumlah Tanggungan: " . $tanggungan . "<br>";
echo "No Telepon Orang Tua: " . $noOrtu . "<br>";
?>

</body>
</html>
