<!DOCTYPE html>
<html>
<body>

<?php
// Mengambil data dari formulir jika tersedia
$jenisSeleksi = isset($_POST["kerjaIbu"]) ? htmlspecialchars($_POST["kerjaIbu"]) : "";
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
echo "<h2>Hasil Seleksi:</h2>";
echo "Jenis Seleksi: " . $jenisSeleksi;
?>

</body>
</html>
