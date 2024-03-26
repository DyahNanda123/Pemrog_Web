<?php
$x = 75; // mendefinisikan variabel x
$y = 25; // mendefinisikan variabel y

function addition(){ // Memanggil fungsi addition(), yang akan menambahkan nilai variabel global $x dan $y, dan menyimpan hasilnya dalam variabel global $z.
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z; //Mencetak nilai variabel $z 
?>