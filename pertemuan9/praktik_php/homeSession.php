<html>
    <body>
        <?php
            session_start(); 
            if ($_SESSION['status'] == 'login') { // Memeriksa status login dari sesi
                echo "selamat datang " . $_SESSION['username']; // Menampilkan pesan selamat datang jika sudah login
                ?>
                <br><a href="sessionLogout.php">Log Out</a> <!-- Tautan untuk logout jika sudah login -->
                <?php
            } else {
                echo "anda belum login. silahkan" ?> <!-- Menampilkan pesan jika belum login -->
                <a href="sessionLoginForm.html">Log In</a> <!-- Tautan untuk login jika belum login -->
                <?php
            }
        ?>
    </body>
</html>
