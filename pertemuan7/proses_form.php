<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){ // memerikasa apakah metode pengirimannya POST, jika iya data yng dikirim akan di proses
    $nama = $_POST["nama"]; // mengambil nilai nama
    $email = $_POST["email"]; // mengambil nilai email 

    echo "Nama: " . $nama . "<br>"; // mencetak nama
    echo "Email: " . $email; // mencetak email
}
?>