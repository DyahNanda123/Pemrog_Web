<html>
<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){ // Sebuah kondisi yang memeriksa apakah formulir telah disubmit menggunakan metode POST.
        $name = $_REQUEST['fname']; // Mengambil nilai yang dimasukkan ke dalam input teks dengan nama fname menggunakan $_REQUEST, yang dapat mengambil nilai dari metode POST atau GET.
        if (empty($name)){ // Sebuah kondisi yang memeriksa apakah input teks kosong
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>
</body>
</html> 
