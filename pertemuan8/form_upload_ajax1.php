<!--Praktikum 3-->
<!--SOAL 3.2-->
<!DOCTYPE html>
<html>
    <head>
        <title>Unggah Gambar</title>
    </head>
    <body>
        <!-- Formulir untuk mengunggah gambar -->
        <form id="upload-form" action="upload_ajax1.php" method="post" enctype="multipart/form-data">
            <!-- Input untuk memilih file gambar -->
            <input type="file" name="files[]" id="files" multiple="multiple" accept=".jpg, .jpeg, .png, .gif">
            <!-- Tombol untuk mengunggah gambar -->
            <input type="submit" name="submit" value="Unggah">
        </form>
        <!-- Area di mana status unggahan akan ditampilkan -->
        <div id="status"></div>
        <!-- Memuat jQuery dari Google CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <!-- Memuat skrip JavaScript dari file upload1.js -->
        <script src="upload1.js"></script>
    </body>
</html>
