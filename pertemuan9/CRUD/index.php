
Copy code
<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4"> <!-- Container untuk mengatur layout dengan margin atas 4 -->
        <h2>Data Anggota</h2> <!-- Judul halaman -->
        <a class="btn btn-success mt-2" href="create.php">Tambah Data</a> <!-- Tombol tambah data -->
        <br><br> <!-- Baris baru -->
        <?php
        include('koneksi.php');

        $query = "SELECT * FROM anggota order by id desc";
        $result = mysqli_query($koneksi, $query);
        ?>
        <table class="table"> <!-- Tabel untuk menampilkan data anggota -->
            <thead class="thead-light"> <!-- Bagian kepala tabel dengan latar belakang warna abu-abu muda -->
                <tr>
                    <!--Judul/nama kolom -->
                    <th>No</th> 
                    <th>Nama</th> 
                    <th>Jenis Kelamin</th> 
                    <th>Alamat</th> 
                    <th>No. Telp</th> 
                    <th>Aksi</th> 
                </tr>
            </thead>
            <tbody> <!-- Bagian isi tabel -->
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $kelamin = ($row["jenis_kelamin"] == 'L') ? 'Laki-laki' : 'Perempuan';
                ?>
                    <tr> 
                        <td><?= $no++ ?></td> 
                        <td><?= $row["nama"] ?></td> 
                        <td><?= $kelamin ?></td> 
                        <td><?= $row["alamat"] ?></td> 
                        <td><?= $row["no_telp"] ?></td> 
                        <td> <!-- Kolom aksi -->
                            <a class="btn btn-primary" href="edit.php?id=<?= $row["id"] ?>">Edit</a> <!-- Tombol edit dengan class btn-primary -->
                            <a class="btn btn-danger" href='#' data-toggle='modal' data-target='#hapusModal<?= $row["id"] ?>'>Hapus</a> <!-- Tombol hapus dengan class btn-danger -->
                        </td>
                    </tr>
                    <div class="modal fade" id='hapusModal<?= $row["id"] ?>' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'> <!-- Modal untuk konfirmasi hapus -->
                        <div class='modal-dialog' role='document'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='exampleModalLabel'>Konfirmasi Hapus</h5>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                                <div class='modal-body'>
                                    Apakah Anda yakin ingin menghapus data dengan nama <?= $row["nama"] ?>?
                                </div>
                                <div class='modal-footer'>
                                    <a class='btn btn-danger' href='proses.php?aksi=hapus&id=<?= $row["id"] ?>'>Hapus</a> <!-- Tombol hapus dengan class btn-danger -->
                                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Batal</button> <!-- Tombol batal dengan class btn-secondary -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>