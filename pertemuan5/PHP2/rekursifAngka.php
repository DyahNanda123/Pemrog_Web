<?php
// mendefinisikan sebuah fungsi tampilkanAngka() yang memiliki dua parameter: $jumlah dan $indeks. 
// Parameter $jumlah adalah jumlah total perulangan yang akan dilakukan, sedangkan parameter $indeks adalah indeks perulangan
    function tampilkanAngka(int $jumlah,int $indeks = 1){
        echo"Perulangan ke-{$indeks}<br>";

        if($indeks< $jumlah){
            tampilkanAngka($jumlah,$indeks +1);
        }
    }

    // memanggil fungsi, dan memberi nilai 20 untuk parameter jumlah. 
    tampilkanAngka(20);
    ?>