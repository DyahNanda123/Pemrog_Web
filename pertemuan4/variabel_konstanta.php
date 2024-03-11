<?php
// Variabel $angka1 dan $angka2 dideklarasikan dan diinisialisasi dengan nilai 10 dan 5.
$angka1 = 10;
$angka2 = 5;
// Variabel $hasil diisi dengan hasil penjumlahan dari $angka1 dan $angka2.
$hasil = $angka1 + $angka2;
// Hasil penjumlahan ditampilkan menggunakan echo.
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.<br><br>";

// Variabel $benar dan $salah dideklarasikan sebagai nilai boolean true dan false.
// Nilai dari kedua variabel tersebut ditampilkan menggunakan echo.
$benar = true;
$salah = false;
echo "Variabel benar: $benar, variabel salah: $salah <br><br>";

// mendefinisikan konstanta untuk nilai tetap
define("NAMA_STATUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", "2023");

// Konstanta-konstanta tersebut digunakan dalam pesan selamat datang yang ditampilkan menggunakan echo.
echo "Selamat datang di " . NAMA_STATUS . ", situs yang 
didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
?>