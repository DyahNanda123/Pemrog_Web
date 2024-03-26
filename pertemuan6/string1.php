<?php
// Variabel yang menyimpan teks "Lorem Ipsum".
$loremipsum = "lorem ipsum dolor sit amet consectur adipisicing elit.
Vouptatem reprehenderit nobis veriratis commodi fugiat molestias
impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum 
quisquam? Qups impedit eum nulla optio. ";

echo"<p>{$loremipsum}</p>"; // Menampilkan teks "Lorem Ipsum" di dalam tag paragraf.
echo"Panjang karakter: ". strlen($loremipsum) . "<br>"; // Menampilkan panjang karakter dari teks "Lorem Ipsum" menggunakan fungsi strlen().
echo"Panjang kata: ". str_word_count($loremipsum) ."<br>"; // Menampilkan jumlah kata dalam teks "Lorem Ipsum" menggunakan fungsi str_word_count().
echo"<p>" . strtoupper($loremipsum) . "</p>"; // Menampilkan teks "Lorem Ipsum" dalam huruf besar (uppercase) menggunakan fungsi strtoupper().
echo"<p>" . strtolower($loremipsum) . "</p>"; //  Menampilkan teks "Lorem Ipsum" dalam huruf kecil (lowercase) menggunakan fungsi strtolower().

?>
