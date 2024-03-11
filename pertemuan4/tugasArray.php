<!DOCTYPE html>
<html>
<head>
    <title>IMPLEMENTASI LOOPS PADA MULTIDIMENSIONAL ARRAY</title>
</head>
<body>

<?php  

// Deklarasi array $gambar yang berisi informasi tentang setiap gambar
$gambar = array(
    "gambar1.jpg" => array(
        "nama" => "Maudy Ayunda",
        "alamat" => "Jl. Soekarno Hatta No.30E, Jakarta",
        "nomor_telepon" => "088763542267",
        "jurusan" => "Ilmu Hukum"
    ),
    "gambar2.jpeg" => array(
        "nama" => "Kenanga Sanjung Bulan",
        "alamat" => "Jl. Mekarsari No.47A, Bandung",
        "nomor_telepon" => "082345768900",
        "jurusan" => "Ekonomi"
    ),
    "gambar3.jpg" => array(
        "nama" => "Ranggini Sukma",
        "alamat" => "Jl. Semanggi Barat No.31B, Kota Malang",
        "nomor_telepon" => "087764325555",
        "jurusan" => "Pertanian"
    )
);

// Judul untuk multidimensional array
echo "<h2>Data Mahasiswa Kwangya University</h2>";

// Loop foreach untuk mencetak informasi setiap gambar
foreach ($gambar as $gambar_file => $info) {
    // Menampilkan tag img dengan atribut src yang sesuai dengan file gambar
    echo '<img src="' . $gambar_file . '"><br>';
    // Menampilkan informasi nama, alamat, nomor telepon, dan jurusan dari setiap gambar
    echo "Nama       ".": " . $info['nama'] . "<br>";
    echo "Alamat     ".": " . $info['alamat'] . "<br>";
    echo "Nomor Telp ".": " . $info['nomor_telepon'] . "<br>";
    echo "Jurusan    ".": " . $info['jurusan'] . "<br>";
    echo "<br>";
    echo "<br>";
}

?>  

</body>
</html>