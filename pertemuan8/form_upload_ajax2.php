<!-- PRATIKUM 4 MENGHIAS UPLOAD FILE -->
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="upload.css"> 
        <title>Unggah File Dokumen</title>
    </head>
    <body>
        <!-- Kontainer formulir unggah file -->
        <div class="upload-form-container">
            <h2>Unggah File Dokumen</h2>
            <!-- Formulir untuk mengunggah file -->
            <form id="upload-form" action="upload2.js" method="post" enctype="multipart/form-data">
                <!-- Kontainer input file -->
                <div class="file-input-container">
                    <!-- Input untuk memilih file -->
                    <input type="file" name="file" id="file" class="file-input"> 
                    <!-- Label untuk input file -->
                    <label for="file" class="file-label">Pilih File</label>
                </div>
                <!-- Tombol untuk mengunggah file -->
                <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah</button>
            </form>
            <!-- Area di mana status unggahan akan ditampilkan -->
            <div id="status" class="upload-status"></div>
        </div>
        <!-- Memuat jQuery dari Google CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <!-- Memuat skrip JavaScript dari file upload2.js -->
        <script src="upload2.js"></script>
    </body> 
</html>
