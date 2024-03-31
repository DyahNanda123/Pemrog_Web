<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // memeriksa apakah method request adalah post
    $selectedBuah = $_POST['buah']; // Menyimpan nilai dari input dengan nama 'buah' ke dalam variabel $selectedBuah.

    if (isset($_POST['warna'])) { // Memeriksa apakah ada input dengan nama 'warna'.
        $selectedWarna = $_POST['warna']; // Jika ada, menyimpan nilai dari input 'warna' ke dalam variabel $selectedWarna.
    } else { // jika tidak ada
        $selectedWarna = []; // Menginisialisasi $selectedWarna sebagai array kosong.
    }
    $selectedJenisKelamin = $_POST['jenis_kelamin']; // Menyimpan nilai dari input dengan nama 'jenis_kelamin' ke dalam variabel 
    echo "Anda memilih buah: " . $selectedBuah . "<br>"; // menampilkan buah yg dipilih
    
    if (!empty($selectedWarna)) { // Memeriksa apakah array $selectedWarna tidak kosong.
        echo "Warna favorit anda: " . implode(", ", $selectedWarna) . "<br>"; //Jika tidak kosong, menampilkan warna favorit yang dipilih
    } else { // jika kosong
        echo "Anda tidak memilih warna favorit.<br>";
    }
    echo "Jenis kemalin Anda: " . $selectedJenisKelamin; // menampilkan jenis kelamin yg dipilih
}
?>