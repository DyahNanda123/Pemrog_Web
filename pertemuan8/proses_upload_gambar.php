<!--Praktikum 2-->
<!--Gambar-->
<?php
//Lokasi penyimpanan file yang diunggah
$targetDirectory = "UploadGambar/";

// periksa apakah directory penyimpanan ada, jika ada maka buat
if(!file_exists($targetDirectory)){
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['imageFiles']['name']){
    $totalFiles = count($_FILES['imageFiles']['name']);

    //loop melalui semua file yang diunggah
    for($i = 0; $i < $totalFiles; $i++){
        $fileName = $_FILES['imageFiles']['name'][$i];
        $targetFile = $targetDirectory . $i . '_' . $fileName;

        //Pindahkan file yang diunggah ke direktori penyimpanan
        if(move_uploaded_file($_FILES['imageFiles']['tmp_name'][$i], $targetFile)){
            echo "File $fileName berhasil diunggah. <br>";
        }else{
            echo "gagal mengunggah file $fileName.<br>";
        }
    }
}else{
    echo "Tidak ada file yang diunggah.";
}
?>
