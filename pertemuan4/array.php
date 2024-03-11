<?php

//  Mendeklarasikan array $nilaiSiswa yang berisi nilai-nilai siswa.
$nilaiSiswa = [85,92,78,64,90,55,88,79,70,96];
$nilaiLulus = [];

// Melakukan perulangan untuk setiap nilai dalam $nilaiSiswa.
// Jika nilai siswa lebih besar dari atau sama dengan 70, nilai tersebut dimasukkan ke dalam array $nilaiLulus.
foreach ($nilaiSiswa as $nilai){
    if ($nilai >=70){
        $nilaiLulus [] = $nilai;
}
}

// Menampilkan daftar nilai siswa yang lulus dengan menggunakan implode() untuk menggabungkan nilai-nilai dalam array.
echo "Daftar nilai siswa yang lulus: ".implode(',', $nilaiLulus);

echo "<br>";
echo "<br>";
echo "<br>";

//  Mendeklarasikan array $daftarKaryawan yang berisi daftar karyawan dan pengalaman kerja masing-masing.
$daftarKaryawan = [
    ['Alice',7],
    ['Bob',3],
    ['Charlie',9],
    ['David',5],
    ['Eva',6],
];

// Melakukan perulangan untuk setiap karyawan dalam $daftarKaryawan.
// Jika pengalaman kerja karyawan lebih dari 5 tahun, nama karyawan tersebut dimasukkan ke dalam array $karyawanPengalamanLimaTahun.
$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

// Menampilkan daftar karyawan dengan pengalaman kerja lebih dari 5 tahun dengan menggunakan implode() untuk menggabungkan nama-nama dalam array.
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);

echo "<br>";
echo "<br>";
echo "<br>";

// Mendeklarasikan array $daftarNilai yang berisi nilai-nilai mahasiswa dalam beberapa mata kuliah.
$daftarNilai =[
    'Matematika' =>[
        ['Alice',85],
        ['Bob',92],
        ['Charlie',78],
    ],
    'Fisika' =>[
        ['Alice',90],
        ['Bob',88],
        ['Charlie',75],
    ],
    'Kimia' =>[
        ['Alice',92],
        ['Bob',88],
        ['Charlie',85],
    ],
];

// Menggunakan variabel $mataKuliah untuk menentukan mata kuliah yang ingin ditampilkan.
$mataKuliah = 'Fisika';
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
    foreach ($daftarNilai[$mataKuliah] as $nilai ){
        echo "Nama : {$nilai[0]}, Nilai: {$nilai[1]}<br>";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";

// Mendeklarasikan array $daftarNilaiSiswa yang berisi nama dan nilai siswa.
    $daftarNilaiSiswa = [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90]
    ];

// Menghitung total nilai semua siswa untuk menghitung rata-rata kelas.
    $totalNilai = 0;
    foreach ($daftarNilaiSiswa as $siswa) {
        $totalNilai += $siswa[1];
    }
    $rataRataKelas = $totalNilai / count($daftarNilaiSiswa);
    echo "Daftar nilai siswa yang mencapai nilai di atas rata-rata kelas: <br>";
    foreach ($daftarNilaiSiswa as $siswa) {
// Jika nilai siswa lebih besar dari rata-rata kelas, nama siswa dan nilai mereka ditampilkan.
        if ($siswa[1] > $rataRataKelas) {
            echo $siswa[0] . " dengan nilai " . $siswa[1] . "<br>";
        }
    }
?>