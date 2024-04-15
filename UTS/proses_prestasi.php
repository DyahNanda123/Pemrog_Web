<!DOCTYPE html>
<html>
<body>

<?php
// Mengambil data dari formulir jika tersedia
$no = isset($_POST["no"]) ? htmlspecialchars($_POST["no"]) : "";
$nama = isset($_POST["nama"]) ? htmlspecialchars($_POST["nama"]) : "";
$jenis = isset($_POST["jenis"]) ? htmlspecialchars($_POST["jenis"]) : "";
$tingkat = isset($_POST["tingkat"]) ? htmlspecialchars($_POST["tingkat"]) : "";
$tahun = isset($_POST["tahun"]) ? htmlspecialchars($_POST["tahun"]) : "";
$pencapaian = isset($_POST["pencapaian"]) ? htmlspecialchars($_POST["pencapaian"]) : "";
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
echo "<h2>Data Prestasi:</h2>";
echo "<table border='1'>";
echo "<tr><th>No</th><th>Nama</th><th>Jenis</th><th>Tingkat</th><th>Tahun</th><th>Pencapaian</th></tr>";
echo "<tr><td>$no</td><td>$nama</td><td>$jenis</td><td>$tingkat</td><td>$tahun</td><td>$pencapaian</td></tr>";
echo "</table>";
?>

</body>
</html>
