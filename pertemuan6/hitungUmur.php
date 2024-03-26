<?php

function hitungUmur($thn_lahir,$thn_sekarang){ // Fungsi ini menghitung umur seseorang berdasarkan tahun kelahiran dan tahun sekarang
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama,$salam="Assalamualaikum"){ // Fungsi ini digunakan untuk memperkenalkan seseorang dengan menggunakan parameter nama dan salam (defaultnya "Assalamualaikum"). 
    echo $salam.",";
    echo "Perkenalkan,nama saya ".$nama."<br/>";


echo "saya berusia". hitungUmur(2004,2024)."tahun<br/>";
echo "senang berkenalan dengan anda<br/>";}

    perkenalan("Dyah")
?>