<!--Praktikum 2-->
<!--Dokumen-->
<!DOCTYPE html>
<html>
    <head>
        <title>Multiupload Dokumen</title>
    </head>
    <body>
        <h2>Unggah Dokumen</h2>
        <form action="proses_upload.php" method="post" enctype="multipart/form-data"> <!--untuk memilih file yang ingin diunggah dan dapat diunggah-->
            <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx"/> <!--input untuk memilih file-file dokumen dengan tipe file PDF, DOC, atau DOCX, dan dapat memilih lebih dari satu file-->
            <input type="submit" value="Unggah"/> <!--tombol untuk mengirim file-file yang telah dipilih-->
        </form>
    </body>
</html>
