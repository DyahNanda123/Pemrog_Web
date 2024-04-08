<!-- PRAKTIKUM 4-->
<?php
    // Memeriksa apakah ada file yang diunggah
    if (isset($_FILES['file'])) {
        $errors = array(); // Array untuk menyimpan pesan kesalahan
        $file_name = $_FILES['file']['name']; // Mendapatkan nama file yang diunggah
        $file_size = $_FILES['file']['size']; // Mendapatkan ukuran file yang diunggah
        $file_tmp = $_FILES['file']['tmp_name']; // Mendapatkan lokasi sementara file yang diunggah
        $file_type = $_FILES['file']['type']; // Mendapatkan tipe file yang diunggah
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); // Mendapatkan ekstensi file

        // Mendefinisikan ekstensi file yang diizinkan
        $extensions = array("txt", "pdf", "doc", "docx");

        // Memeriksa apakah ekstensi file diizinkan
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah TXT, PDF, DOC, dan DOCX.";
        }

        // Memeriksa apakah ukuran file tidak melebihi batas 2 MB
        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
        }

        // Jika tidak ada kesalahan, pindahkan file ke folder "uploads"
        if (empty($errors)) {
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
            echo "File berhasil diunggah.";
        } else {
            // Jika ada kesalahan, tampilkan pesan-pesan kesalahan
            echo implode("", $errors);
        }
    }
?>
