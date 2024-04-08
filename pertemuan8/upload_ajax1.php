<!--Praktikum 3-->
<!--Soal 3.2-->
<?php
// Memeriksa apakah ada file yang diunggah
if (isset($_FILES['files'])) {
    $errors = array(); // Array untuk menyimpan pesan kesalahan
    $uploaded_files = array(); // Array untuk menyimpan nama file yang berhasil diunggah

    // Melakukan iterasi pada setiap file yang diunggah
    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        // Mendapatkan informasi file yang diunggah
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        // Mendapatkan ekstensi file
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        // Mendefinisikan ekstensi file yang diizinkan
        $extensions_allowed = array("jpg", "jpeg", "png", "gif");

        // Memeriksa apakah ekstensi file diizinkan
        if (!in_array($file_ext, $extensions_allowed)) {
            $errors[] = "Ekstensi file yang diizinkan adalah PNG, JPG, JPEG, atau GIF. <br>";
        }

        // Memeriksa apakah ukuran file tidak melebihi batas 2 MB
        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB <br>';
        }

        // Jika tidak ada kesalahan, pindahkan file ke folder "uploads"
        if (empty($errors)) {
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
            $uploaded_files[] = $file_name; // Menambahkan nama file yang berhasil diunggah ke dalam array
        }
    }

    // Jika tidak ada kesalahan, tampilkan pesan bahwa file berhasil diunggah beserta daftar file yang diunggah
    if (empty($errors)) {
        echo "File berhasil diunggah<br>";
        echo "Daftar file yang diunggah: <br>";
        foreach ($uploaded_files as $file) {
            echo $file . "<br>";
        }
    } else {
        // Jika ada kesalahan, tampilkan pesan-pesan kesalahan
        echo implode(" ", $errors);
    }
}
?>
