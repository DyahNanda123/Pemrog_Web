<?php
$pattern = '/[a-z]/'; // cocokkan huruf kecil dan membuat variabel $pattern
$text = 'This is a Sample Text.'; // Membuat variabel $text yang berisi string teks yang akan dicari pola.
if (preg_match($pattern, $text)){ // preg_match untuk mencari pola yang ditentukan dalam $pattern dalam string $text
    echo "Huruf kecil ditemukan!<br>"; // jika ditemukan
} else {
    echo "Tidak ada huruf kecil!<br>"; // jika tidak ditemukan
}

$pattern = '/[0-9]+/'; // membuat variabel dan memasukkan nilai 
$text = 'There are 123 apples.'; // Membuat variabel $text yang berisi string teks yang akan dicari pola.
if (preg_match($pattern, $text, $matches)){ // preg_match untuk mencari pola yang ditentukan dalam $pattern dalam string $text
    echo "Cocokkan: " . $matches[0] . "<br>"; // jika ditemukan
} else {
    echo "Tidak ada yang cocok!<br>"; // jika tidak ditemukan
}

$pattern = '/apple/'; // membuat variabel dan memasukkan nilai
$replacement = 'banana'; // membuat avriabel $replacement yg berisi banana
$text = 'I like apple pie.'; // Membuat variabel $text yang berisi string teks yang akan dicari pola.
$new_text = preg_replace($pattern, $replacement, $text); // menetapkan variabel yg akan menyimpan string hasil penggantian ($new_text)
echo $new_text . "<br>"; // mecetak hasil 

$pattern = '/go*d/'; // cocokkan "god", "good", "goooood", dll.
$text = 'god is good.'; // mendeklarasikan $text dengan nilai tersebut
if (preg_match($pattern, $text, $matches)){ // menggunakan fungsi preg_math untuk mencari pola
    echo "Cocokkan: " . $matches[0] . "<br>"; // jika ditemukan
} else {
    echo "Tidak ada yang cocok!<br>"; // jika tidak ditemukan 
}

// soal 5.5
$pattern = '/go?d/'; // cocokkan "god" dan bukan "good" "goooood" karena o tidak boleh muncul lebih dr 1x
$text = 'god is good.'; // mendeklarasikan $text dengan nilai tersebut
if (preg_match($pattern, $text, $matches)){ // menggunakan fungsi preg_math untuk mencari pola
    echo "Cocokkan: " . $matches[0] . "<br>"; // jika ditemukan
} else {
    echo "Tidak ada yang cocok!<br>"; // jika tidak ditemukan 
}

// soal 5.6
$pattern ='/go{1,2}d/'; // cocokkan "god" dan bukan "good" "goooood" karena o tidak boleh muncul lebih dr 2x
$text = 'god is good.'; // mendeklarasikan $text dengan nilai tersebut
if (preg_match($pattern, $text, $matches)){ // menggunakan fungsi preg_math untuk mencari pola
    echo "Cocokkan: " . $matches[0] . "<br>"; // jika ditemukan
} else {
    echo "Tidak ada yang cocok!<br>"; // jika tidak ditemukan 
}
?>