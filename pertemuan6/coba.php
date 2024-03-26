<?php
echo $_SERVER['PHP_SELF']; // Menampilkan nama file skrip PHP yang sedang dieksekusi.
echo "<br>";
echo $_SERVER['SERVER_NAME']; // Menampilkan nama server host.
echo "<br>";
echo $_SERVER['HTTP_HOST']; // Menampilkan nama host dari URL yang sedang diakses.
echo "<br>";
echo $_SERVER['HTTP_REFERER']; // Menampilkan URL dari halaman web yang mengarahkan pengguna ke halaman saat ini.
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT']; //  Menampilkan informasi tentang browser web
echo "<br>";
echo $_SERVER['SCRIPT_NAME']; //  Menampilkan jalur skrip yang sedang dieksekusi 
?>