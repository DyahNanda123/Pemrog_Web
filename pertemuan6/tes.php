<?php

$nama=@$_GET['nama']; // Mengambil nilai dari parameter nama dan usia yang dikirimkan melalui URL.
$usia=@$_GET['usia']; // Menyimpan nilai yang diambil dari parameter URL tersebut.

echo "Halo {$nama}! Apakah benar anda berusia {$usia}tahun ?"; // Mencetak pesan ke layar dengan menggunakan nilai variabel $nama dan $usia yang telah diambil dari parameter URL.
?>
