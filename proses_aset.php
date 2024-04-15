<!DOCTYPE html>
<html>
<body>

<?php
// Mengambil data dari formulir jika tersedia
$no = isset($_POST["no"]) ? htmlspecialchars($_POST["no"]) : "";
$nama = isset($_POST["nama"]) ? htmlspecialchars($_POST["nama"]) : "";
$jenis = isset($_POST["jenis"]) ? htmlspecialchars($_POST["jenis"]) : "";
$merk = isset($_POST["merk"]) ? htmlspecialchars($_POST["merk"]) : "";
$kondisi = isset($_POST["kondisi"]) ? htmlspecialchars($_POST["kondisi"]) : "";
$harga = isset($_POST["harga"]) ? htmlspecialchars($_POST["harga"]) : "";
$metodePerolehan = isset($_POST["metodePerolehan"]) ? htmlspecialchars($_POST["metodePerolehan"]) : "";
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
echo "<h2>Data Aset:</h2>";
echo "<table border='1'>";
echo "<tr><th>No</th><th>Nama</th><th>Jenis</th><th>Merk</th><th>Kondisi</th><th>Harga Beli</th><th>Metode Perolehan</th></tr>";
echo "<tr><td>$no</td><td>$nama</td><td>$jenis</td><td>$merk</td><td>$kondisi</td><td>$harga</td><td>$metodePerolehan</td></tr>";
echo "</table>";
?>

</body>
</html>
