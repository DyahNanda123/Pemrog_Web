<!--Praktikum 3-->
<?php
    // Memeriksa apakah ada file yang diunggah
    if (isset($_FILES['file'])) {
        // Membuat array untuk menyimpan pesan kesalahan
        $errors = array();
        // Mendapatkan informasi file yang diunggah
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size']; 
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        // Mendapatkan ekstensi file dan mengonversinya menjadi huruf kecil
        @$file_ext = strtolower("". end (explode('.', $_FILES['file']['name'])) . ""); 
        // Mendefinisikan ekstensi file yang diizinkan
        $extensions = array("pdf", "doc", "docx", "txt");

        // Memeriksa apakah ekstensi file diizinkan
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
        }
       
        // Memeriksa apakah ukuran file tidak melebihi batas 2 MB
        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
        }
        
        // Jika tidak ada kesalahan, pindahkan file ke folder "documents"
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "documents/". $file_name); 
            echo "File berhasil diunggah.";
        } else {
            // Jika ada kesalahan, tampilkan pesan-pesan kesalahan
            echo implode("", $errors);
        }
    }
?>
