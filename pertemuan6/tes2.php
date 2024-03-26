<html>
<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    //  Sebuah kondisi yang memeriksa apakah formulir telah disubmit menggunakan metode POST.
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['fname']; // Mengambil nilai yang dimasukkan ke dalam input teks dengan nama fname dan menyimpannya dalam variabel $name.
        if (empty($name)){ // Sebuah kondisi yang memeriksa apakah input teks kosong. 
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>
</body>
</html> 
