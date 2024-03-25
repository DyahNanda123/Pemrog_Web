<?php
// Mendeklarasikan variabel $loremipsum yang berisi teks lorem ipsum.
$loremipsum = "lorem ipsum dolor sit amet consectur adipisicing elit.
Vouptatem reprehenderit nobis veriratis commodi fugiat molestias
impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum 
quisquam? Qups impedit eum nulla optio. ";

// Mencetak teks lorem ipsum di dalam tag paragraf HTML.
echo "<p>{$loremipsum}</p>";

// Mencetak panjang karakter dari teks dalam variabel $loremipsum menggunakan fungsi strlen().
echo "Panjang karakter: " . strlen($loremipsum) . "<br>";

// Mencetak jumlah kata dalam teks dalam variabel $loremipsum menggunakan fungsi str_word_count().
echo "Panjang kata: " . str_word_count($loremipsum) . "<br>";

// Mencetak teks dalam variabel $loremipsum yang diubah menjadi huruf besar (uppercase) menggunakan fungsi strtoupper().
echo "<p>" . strtoupper($loremipsum) . "</p>";

// Mencetak teks dalam variabel $loremipsum yang diubah menjadi huruf kecil (lowercase) menggunakan fungsi strtolower().
echo "<p>" . strtolower($loremipsum) . "</p>";
?>
