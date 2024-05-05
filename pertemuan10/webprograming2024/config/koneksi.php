<?php
date_default_timezone_set('Asia/Jakarta'); // memberi koneksi pada database
$koneksi = mysqli_connect("localhost", "root", "", "webdinamis");

if (mysqli_connect_error()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}