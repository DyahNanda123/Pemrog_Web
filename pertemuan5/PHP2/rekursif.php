<?php
// deklarasi fungsi tampikanHaloDUnia
// Fungsi ini mencetak teks "Halo dunia!" diikuti dengan tag <br>
function tampilkanHaloDunia(){
    echo "Halo dunia! <br>";

    // memanggil dirinya sendiri
    tampilkanHaloDunia();
}
// fungsi tampilkanHaloDunia() dipanggil untuk pertama kalinya untuk memulai proses rekursif. 
tampilkanHaloDunia();
?>