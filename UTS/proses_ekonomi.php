<!DOCTYPE html>
<html>
<body>

<?php
// Mengambil data dari formulir jika tersedia
$kerjaAyah = isset($_POST["kerjaAyah"]) ? htmlspecialchars($_POST["kerjaAyah"]) : "";
$penghasilanAyah = isset($_POST["penghasilanAyah"]) ? htmlspecialchars($_POST["penghasilanAyah"]) : "";
$kerjaIbu = isset($_POST["kerjaIbu"]) ? htmlspecialchars($_POST["kerjaIbu"]) : "";
$penghasilanIbu = isset($_POST["penghasilanIbu"]) ? htmlspecialchars($_POST["penghasilanIbu"]) : "";
$Hutang = isset($_POST["Hutang"]) ? htmlspecialchars($_POST["Hutang"]) : "";
$cicilan = isset($_POST["cicilan"]) ? htmlspecialchars($_POST["cicilan"]) : "";
$Piutang = isset($_POST["Piutang"]) ? htmlspecialchars($_POST["Piutang"]) : "";
$cicilanPiutang = isset($_POST["cicilanPiutang"]) ? htmlspecialchars($_POST["cicilanPiutang"]) : "";
$Tabungan = isset($_POST["Tabungan"]) ? htmlspecialchars($_POST["Tabungan"]) : "";
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
echo "<h2>Data Ekonomi:</h2>";
echo "Pekerjaan Ayah/Wali: " . $kerjaAyah . "<br>";
echo "Penghasilan Ayah: " . $penghasilanAyah . "<br>";
echo "Pekerjaan Ibu: " . $kerjaIbu . "<br>";
echo "Penghasilan Ibu: " . $penghasilanIbu . "<br>";
echo "Total Hutang Kepada Pihak Lain: " . $Hutang . "<br>";
echo "Cicilan Hutang Dibayar Per Bulan: " . $cicilan . "<br>";
echo "Total Piutang Kepada Pihak Lain: " . $Piutang . "<br>";
echo "Cicilan Piutang Dibayar Per Bulan: " . $cicilanPiutang . "<br>";
echo "Tabungan Keluarga: " . $Tabungan . "<br>";
?>

</body>
</html>
