<?php

function perkenalan($nama,$salam="Assalamualaikum"){
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
// memanggil fungsi yang sudah dibuat
perkenalan("Hamdana","Hallo");

echo "<hr>";

$saya = "Dyah";
$uacapanSalam= "Selamat Pagi";

// memanggil lagi tanpa mengisi parameter salam
perkenalan($saya);
?>