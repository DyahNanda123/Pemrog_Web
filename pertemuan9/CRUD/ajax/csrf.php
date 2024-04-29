<?php
header("Content-Type: application/json"); // Mengatur tipe konten sebagai JSON

if (empty($_SESSION['csrf_token'])) { // Jika csrf_token kosong dalam sesi, buat token baru
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Membuat token acak dan menyimpannya dalam sesi
}

$headers = apache_request_headers(); // Mengambil header permintaan 
if (isset($headers['Csrf-Token'])) { // Memeriksa apakah header permintaan mengandung Csrf-Token
    if ($headers['Csrf-Token'] != $_SESSION['csrf_token']) { // Memeriksa apakah token yang diterima sama dengan token sesi
        exit(json_encode(['error' => 'Wrong CSRF token.'])); // Mengakhiri skrip dan mengirimkan pesan 
    }
} else { // Jika header permintaan tidak mengandung Csrf-Token
    exit(json_encode(['error' => 'No CSRF token.'])); // Mengakhiri skrip dan mengirimkan pesan 
}
?>
