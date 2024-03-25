<?php
// mendefinisikan fungsi hitungUmur yg memilikki 2 parameter.
function hitungUmur($thn_lahir,$thn_sekarang){
    // menghitung umur dengan mengurangkan tahun lahir dari tahun sekarang. 
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

// mendefinisikan fungsi perkenalan dengan dua parameter.
function perkenalan($nama,$salam="Assalamualaikum"){
    echo $salam.",";
    echo "Perkenalkan,nama saya ".$nama."<br/>";


echo "saya berusia". hitungUmur(2004,2024)."tahun<br/>";
echo "senang berkenalan dengan anda<br/>";}

// memanggil fungsi perkenalan
    perkenalan("Dyah")
?>