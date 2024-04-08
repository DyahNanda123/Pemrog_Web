<!--Praktikum 2-->
<!--Gambar-->
<!DOCTYPE html>
<html>
    <head>
        <title>Multiupload Gambar</title>
    </head>
    <body>
        <h2>Unggah Gambar</h2>
        <form action="proses_upload_gambar.php" method="post" enctype="multipart/form-data"> <!--untuk memilih file yang ingin diunggah dan dapat diunggah-->
            <input type="file" name="imageFiles[]" multiple="multiple" accept="image/jpeg, image/png"/> <!--input untuk memilih file-file gambar dengan tipe file JPEG atau PNG, dan dapat memilih lebih dari satu file-->
            <input type="submit" value="Unggah Gambar"/> <!--tombol untuk mengirim file-file gambar yang telah dipilih-->
        </form>
    </body>
</html>
