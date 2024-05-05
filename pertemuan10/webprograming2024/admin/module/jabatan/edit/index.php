<div class="container-fluid">
    <div class="row">
        <?php
        require 'admin/template/menu.php'; // Memasukkan menu dari file eksternal
        $id = $_GET['id']; // Mendapatkan ID jabatan dari URL
        $query = "SELECT * FROM jabatan WHERE id = '$id'"; // Query untuk mendapatkan data jabatan berdasarkan ID
        $result = mysqli_query($koneksi, $query); // Eksekusi query
        $row = mysqli_fetch_assoc($result); // Mendapatkan data jabatan dalam bentuk array
        ?>
        
        <!-- Bagian Utama -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <!-- Judul Halaman -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Jabatan</h1>
            </div>
            
            <!-- Form Edit Jabatan -->
            <div class="card col-sm-6">
                <div class="card-header">
                    Form Edit Jabatan
                </div>
                <div class="card-body">
                    <form action="fungsi/edit.php?jabatan=edit" method="post">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>"> <!-- Input hidden untuk menyimpan ID jabatan -->
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Nama Jabatan:</label>
                            <input type="text" name="jabatan" class="form-control" id="jabatan" value="<?= $row['jabatan'] ?>"> <!-- Input nama jabatan -->
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan:</label>
                            <textarea class="form-control" name="keterangan" id="keterangan"><?= $row['keterangan'] ?></textarea> <!-- Input keterangan jabatan -->
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>Ubah</button> <!-- Tombol untuk menyimpan perubahan -->
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
