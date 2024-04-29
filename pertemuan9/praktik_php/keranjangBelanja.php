<html>
    <body>
        <h2>Keranjang Belanja</h2> <!-- Judul halaman -->
        <?php
            $beliNovel = $_COOKIE['beliNovel']; // Mengambil nilai jumlah novel dari cookie
            $beliBuku = $_COOKIE['beliBuku']; // Mengambil nilai jumlah buku dari cookie
            echo "Jumlah Novel: " . $beliNovel . "<br>"; // Menampilkan jumlah novel
            echo "Jumlah Buku: " . $beliBuku . "<br>"; // Menampilkan jumlah buku
        ?>
    </body>
</html>
