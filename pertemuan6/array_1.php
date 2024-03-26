<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h2>Array Terindeks</h2> <!-- Elemen heading level 2 yang menampilkan judul "Array Terindeks".
<?php
    $Listdosen=["Elok Nur Hamdana","Unggul Pamenang","Bagas Nugraha"]; // Mendefinisikan sebuah array $Listdosen yang berisi daftar nama dosen.

    foreach ($Listdosen as $dosen) { // Menggunakan perulangan foreach untuk menampilkan setiap elemen dalam array $Listdosen.
        echo $dosen . "<br>"; // Menampilkan setiap nama dosen dengan menambahkan tag <br> untuk membuat baris baru 
    }
?>
</body>
</html>
