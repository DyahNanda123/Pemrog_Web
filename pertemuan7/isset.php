<?php
/* Penggunaan isset untuk memerikasa apakah variabel sudah diinisialisasi atau belum */
$umur; /* Mendeklarasikan variabel umur */
if (isset($umur) && $umur >= 18){ // Jika $umur sudah diinput dengan nilai >= 18, maka akan menampilakan “Anda sudah dewasa”.
    echo "Anda sudah dewasa.<br>";
} else { // Jika tidak, maka menampilkan “Anda belum dewasa atau variabel ‘umur’ tidak ditemukan.”
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.<br>";
}
 // mendefinisikan array data dengan 2 nilai (nama & usia)
$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])){ // memeriksa apakah "nama" telah diinisialisasi
    echo "Nama: " . $data["nama"] . "<br>"; // jika sudah diinisialisasi, menampilkan "nama" ditambah nama
} else { // jika belum, menampilkan "Variabel 'nama' tidak ditemukan dalam array"
    echo "Varibel 'nama' tidak ditemukan dalam array.<br>";
}
?>