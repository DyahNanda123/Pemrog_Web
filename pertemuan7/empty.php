<?php
$myArray = array(); // array kosong
if (empty($myArray)){ // memeriksa apakah array kosong
    // Fungsi empty() digunakan untuk memeriksa apakah sebuah variabel kosong 
    echo "Array tidak terdefinisi atau kosong.<br>";
} else { // Jika array tidak kosong 
    echo "Array terdefinisi dan tidak kosong.<br>";
}
// memeriksa apakah variabel $nonExistentVar sudah diinisialisasi atau tidak. 
if (empty($nonExistentVar)){ // Jika sudah diinisialisasi
    echo "Variabel tidak terdefinisi atau kosong.<br>";
} else { // Jika belum diinisialisasi
    echo "Variabel terdefinisian dan tidak kosong.<br>";
}
?>