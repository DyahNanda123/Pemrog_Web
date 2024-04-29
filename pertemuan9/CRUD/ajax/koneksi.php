<?php
// Mendefinisikan konstanta untuk koneksi ke database
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBI', 'prakwebdb');


// Membuat objek koneksi database menggunakan mysqli
$db1 = new mysqli(HOST, USER, PASS, DBI);
?>