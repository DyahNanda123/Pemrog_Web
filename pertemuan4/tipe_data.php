<?php
// Variabel $a, $b, $c, $d, dan $e dideklarasikan.
$a = 10;
$b = 5;
// Dilakukan operasi aritmatika untuk mendefinisikan nilai variabel $c, $d, dan $e.
$c = $a + 5;
$d = $b +(10 * 5);
$e = $d - $c;
// Nilai dari masing-masing variabel dan ekspresi aritmatika ditampilkan menggunakan echo.
echo "Variabel a:{$a}<br>";
echo "Variabel b:{$b}<br>";
echo "Variabel c:{$c}<br>";
echo "Variabel d:{$d}<br>";
echo "Variabel e:{$e}<br>";

// Variabel $e diperiksa menggunakan var_dump untuk menampilkan tipe data dan nilainya.
var_dump($e);

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia ) / 3;

echo "Matematika: {$nilaiMatematika}<br>";
echo "IPA: {$nilaiIPA}<br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia}<br>";
echo "Rata-rata: {$rataRata}<br>";

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;
// Variabel $apakahSiswaLulus dan $apakahSiswaSudahUjian juga diperiksa menggunakan var_dump.
var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

// Variabel $namaDepan dan $namaBelakang dideklarasikan sebagai string.
$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria';
// Variabel $namaLengkap diisi dengan penggabungan $namaDepan dan $namaBelakang menggunakan tanda kurung kurawal {}.
// Variabel $namaLengkap2 juga diisi dengan penggabungan $namaDepan dan $namaBelakang menggunakan penggabungan string.
$namaLengkap = "{$namaDepan} {$namaBelakang}<br>";
$namaLengkap2 = $namaDepan . '' . $namaBelakang;

// Nama depan, nama belakang, dan nama lengkap ditampilkan menggunakan echo.
echo "Nama Depan: {$namaDepan}<br>";
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

echo $namaLengkap;
// Array $listMahasiswa dideklarasikan dengan beberapa nilai string.
// Nilai pertama dari array $listMahasiswa ditampilkan menggunakan echo.
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>