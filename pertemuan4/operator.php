<?php
// memberi nilai pada variabel a dan b
$a = 10;
$b = 5;

// Dilakukan operasi penjumlahan, pengurangan, perkalian, pembagian, sisa bagi, dan pangkat antara $a dan $b.
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali   = $a * $b;
$hasilBagi   = $a / $b;
$SisaBagi    = $a % $b;
$pangkat     = $a ** $b;

// Hasil dari setiap operasi aritmatika ditampilkan menggunakan echo.
echo "Hasil Penjumlahan: " . $hasilTambah . "<br>";
echo "Hasil Pengurangan: " . $hasilKurang . "<br>";
echo "Hasil Perkalian: " . $hasilKali . "<br>";
echo "Hasil Pembagian: " . $hasilBagi . "<br>";
echo "Sisa Bagi: " . $SisaBagi . "<br>";
echo "Hasil Pangkat: " . $pangkat . "<br>";

// Dilakukan perbandingan antara $a dan $b menggunakan operator perbandingan.
$hasilSama              = $a = $b;
$hasilTidakSama         = $a != $b;
$hasilLebihKecil        = $a < $b;
$hasilLebihBesar        = $a > $b;
$hasilLebihKecilSama    = $a <= $b;
$hasilLebihBesarSama    = $a >= $b;

// Hasil perbandingan ditampilkan menggunakan echo.
echo "Apakah a sama dengan b? " . ($hasilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a tidak sama dengan b? " . ($hasilTidakSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih kecil dari b? " . ($hasilLebihKecil ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih besar dari b? " . ($hasilLebihBesar ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih kecil atau sama dengan b? " . ($hasilLebihKecilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih besar atau sama dengan b? " . ($hasilLebihBesarSama ? "Ya" : "Tidak") . "<br>";

// Dilakukan operasi logika AND, OR, dan NOT antara $a dan $b.
$hasilAND   = $a && $b ;
$hasilOr    = $a || $b ;
$hasilNotA  = !$a  ;
$hasilNotB  = !$b  ;

// Hasil operasi logika ditampilkan menggunakan echo.
echo "Hasil dari operasi AND: " . ($hasilAND ? "True" : "False") . "<br>";
echo "Hasil dari operasi OR: " . ($hasilOr ? "True" : "False") . "<br>";
echo "Hasil dari operasi NOT pada a: " . ($hasilNotA ? "True" : "False") . "<br>";
echo "Hasil dari operasi NOT pada b: " . ($hasilNotB ? "True" : "False") . "<br>";

// Dilakukan operasi penugasan penambahan, pengurangan, perkalian, pembagian, dan sisa bagi antara $a dan $b.
$a += $b;
echo "Nilai a setelah ditambah dengan b: " . $a . "<br>";
$a -= $b;
echo "Nilai a setelah dikurangi dengan b: " . $a . "<br>";
$a *= $b;
echo "Nilai a setelah dikali dengan b: " . $a . "<br>";
$a /= $b;
echo "Nilai a setelah dibagi dengan b: " . $a . "<br>";
$a %= $b;
echo "Sisa bagi a setelah dibagi dengan b: " . $a . "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a identik dengan b? " . ($hasilIdentik ? "Ya" : "Tidak") . "<br>";
echo "Apakah a tidak identik dengan b? " . ($hasilTidakIdentik ? "Ya" : "Tidak") . "<br>";

// Mendeklarasikan jumlah kursi total dan terisi
$jmlKursiTotal = 45;
$jmlKursiTerisi = 28;
// membuat rumus untuk perhitungan kursi kosong
$jmlKursiKosong = $jmlKursiTotal - $jmlKursiTerisi;
// menentukan persentase kursi kosong
$persentaseKursiKosong = ($jmlKursiKosong / $jmlKursiTotal) * 100;

// menampilkan hasil dengan echo
echo "Jumlah kursi yang masih kosong di restoran: " . $jmlKursiKosong . "<br>";
echo "Persentase kursi yang masih kosong di restoran: " . number_format($persentaseKursiKosong, 2) . "%";

?>