<?php
    include ('koneksi.php'); // Menghubungkan ke database menggunakan file koneksi.php
     // Mengambil nilai dari inputan
    $aksi = $_GET['aksi']; 
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin']; 
    $alamat = $_POST['alamat']; 
    $no_telp = $_POST['no_telp']; 

    if ($aksi == 'tambah') { // Jika aksi adalah 'tambah'
        $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp)
                  VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')"; // Query untuk menambah data anggota ke database
        if (mysqli_query($koneksi, $query)) { // Menjalankan query
            header("location: indeks.php"); // Redirect ke halaman indeks setelah berhasil
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($koneksi); // Menampilkan pesan jika query gagal
        }
    } elseif ($aksi == 'ubah') { // Jika aksi adalah 'ubah'
        if (isset($_POST['id'])) { // Memeriksa apakah ada id yang dikirimkan dari form
            $id = $_POST['id']; // Mengambil nilai id dari form

            $query = "UPDATE anggota SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', 
                      no_telp='$no_telp' WHERE id='$id'"; // Query untuk mengubah data anggota di database

            if (mysqli_query($koneksi, $query)) { // Menjalankan query
                header("Location: index.php"); // Redirect ke halaman indeks setelah berhasil
                exit();
            } else {
                echo "Gagal mengupdate data: " . mysqli_error($koneksi); // Menampilkan pesan jika query gagal
            }
        } else {
            echo "ID tidak valid"; // Menampilkan pesan jika id tidak valid
        }
    }
    // Bagian baru untuk aksi hapus
    elseif ($aksi == 'hapus') { // Jika aksi adalah 'hapus'
        if (isset($_GET['id'])) { // Memeriksa apakah ada id yang dikirimkan dari URL
            $id = $_GET['id']; // Mengambil nilai id dari URL
            $query = "DELETE FROM anggota WHERE id='$id'"; // Query untuk menghapus data 
            
            if (mysqli_query($koneksi, $query)) { // Menjalankan query
                header("Location: index.php"); // Redirect ke halaman indeks setelah berhasil
                exit();
            } else {
                echo "Gagal menghapus data: " . mysqli_error($koneksi); // Menampilkan pesan kesalahan 
            }
        } else {
            echo "ID tidak valid."; // Menampilkan pesan 
        }
    } else {
        header("Location: index.php"); // Redirect ke halaman indeks jika tidak ada aksi yang valid
    }

    mysqli_close($koneksi); // Menutup koneksi ke database
?>
