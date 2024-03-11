<?php
// Variabel $nilaiNumerik diberi nilai.
$nilaiNumerik = 92;

// Dilakukan pengecekan rentang nilai untuk menentukan nilai huruf.
// Nilai huruf yang sesuai ditampilkan menggunakan echo.
if($nilaiNumerik >=90 && $nilaiNumerik <=100){
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70){
    echo "Nilai huruf: D";
} 

echo "<br>";
echo "<br>";

// Variabel untuk jarak saat ini, jarak target, peningkatan harian, dan jumlah hari dideklarasikan.
$jarakSaatIni      = 0;
$jarakTarget       = 500;
$peningkatanHarian = 30;
$hari              = 0;

// Dilakukan iterasi menggunakan while loop untuk menghitung berapa hari yang dibutuhkan untuk mencapai jarak target.
while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

// Jumlah hari yang diperlukan ditampilkan menggunakan echo.
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br>";
echo "<br>";

// Variabel untuk jumlah lahan, tanaman perlahan, buah per tanaman, dan jumlah buah dideklarasikan.
$jumlahLahan         = 10;
$tanamanPerlahan     = 5;
$buahPerTanaman      = 10;
$jumlahBuah          = 0;

// Dilakukan iterasi menggunakan for loop untuk menghitung total jumlah buah yang akan dipanen.
for($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

// Jumlah buah yang akan dipanen ditampilkan menggunakan echo.
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br>";
echo "<br>";

// Variabel $skorUjian berisi daftar skor ujian.
$skorUjian = [85,92,78,96,88];
$totalSkor = 0;

// Dilakukan iterasi menggunakan foreach untuk menjumlahkan semua skor.
foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
// Total skor ujian ditampilkan menggunakan echo.
echo "Total skor ujian adalah : $totalSkor ";

echo "<br>";
echo "<br>";

// Variabel $nilaiSiswa berisi daftar nilai siswa.
$nilaiSiswa = [85,92,58,64,90,55,88,79,70,96];

// Dilakukan iterasi menggunakan foreach untuk memeriksa setiap nilai siswa.
foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60){
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
// Status kelulusan setiap siswa ditampilkan menggunakan echo.
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br>";
echo "<br>";

// Variabel $nilaiSiswa berisi daftar nilai siswa.
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
// Daftar nilai diurutkan menggunakan sort.
sort($nilaiSiswa);
$totalNilai = 0;
$count = count($nilaiSiswa);
// Total nilai dihitung dengan mengabaikan dua nilai tertinggi dan dua nilai terendah.
for ($i = 2; $i < $count - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i];
}
// Total nilai tersebut ditampilkan menggunakan echo.
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilai";

echo "<br>";
echo "<br>";

// Variabel $hargaProduk dan $diskon dideklarasikan.
$hargaProduk = 120000;
$diskon = 0;
// Dilakukan pengecekan apakah harga produk lebih besar dari 100000, jika ya, diskon diberikan.
if ($hargaProduk > 100000) {
    $diskon = 0.2; 
}
// Harga akhir setelah diskon ditampilkan menggunakan echo.
$totalHarga = $hargaProduk - ($hargaProduk * $diskon);
echo "Harga yang harus dibayar setelah diskon adalah: Rp " . number_format($totalHarga, 0, ',', '.');

echo "<br>";
echo "<br>";

// Variabel $poin diberi nilai.
$poin = 700; 
$totalSkor = "Total skor pemain adalah: $poin";
// Dilakukan pengecekan apakah poin lebih besar dari 500, jika ya, pemain mendapatkan hadiah tambahan.
$hadiahTambahan = ($poin > 500) ? "YA" : "TIDAK";
echo $totalSkor . PHP_EOL;
// Status pemberian hadiah tambahan ditampilkan menggunakan echo.
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";
?>