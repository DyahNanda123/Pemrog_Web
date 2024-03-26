<?php
    function tampilkanAngka(int $jumlah,int $indeks = 1){ // Mendefinisikan fungsi tampilkanAngka() dengan dua parameter, yaitu $jumlah yang menentukan berapa kali perulangan dilakukan, dan $indeks yang merupakan 
        // indeks saat ini dari perulangan. 
        echo"Perulangan ke-{$indeks}<br>"; // Menampilkan pesan yang berisi nomor indeks perulangan saat ini.

        if($indeks< $jumlah){ // Melakukan pengecekan apakah indeks saat ini kurang dari jumlah perulangan yang diinginkan
            tampilkanAngka($jumlah,$indeks +1); // Memanggil kembali fungsi tampilkanAngka() dengan nilai $indeks yang ditingkatkan satu.
        }
    }
    tampilkanAngka(20); // Memanggil fungsi tampilkanAngka()
    ?>