<!--Praktikum 3-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah File Dokumen</title>
</head>
<body>
    <!-- Formulir untuk mengunggah file dokumen -->
    <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
        <!-- Input untuk memilih file dokumen -->
        <input type="file" name="file" id="file">
        <!-- Tombol untuk mengunggah file -->
        <input type="submit" name="submit" value="Unggah">
    </form>

    <!-- Area di mana status unggahan akan ditampilkan -->
    <div id="status"></div>

    <!-- Memuat jQuery untuk digunakan dalam skrip -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Memuat skrip JavaScript dari file upload.js -->
    <script src="upload.js"></script>
</body>
</html>
