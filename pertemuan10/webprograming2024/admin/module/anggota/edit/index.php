<div class="container-fluid"> <!--Membuat div untuk tata letak responsif dalam container penuh -->
    <div class="row"> <!-- Mmebuat div denga class row -->
        <?php
        require 'admin/template/menu.php'; // memanggil file menu.php yg berisi menu navigasi
        $id = $_GET['id']; // mengambil nilai dari parameter id
        $query = "SELECT * FROM anggota a, jabatan j, user u WHERE a.jabatan_id = j.id AND a.user_id = u.id AND a.user_id = '$id'"; // Membuat query SQL untuk mengambil data anggota, jabatan, dan user berdasarkan ID yang diberikan.
        $result = mysqli_query($koneksi, $query); //Menjalankan query SQL menggunakan fungsi mysqli_query().
        $row = mysqli_fetch_assoc($result); // Mengambil hasil query dan menyimpannya dalam variabel $row sebagai array asosiatif.
        ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> <!--Membuat elemen <main> dengan class "col-md-9 ms-sm-auto col-lg-10 px-md-4" untuk menentukan tata letak kolom.-->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"> <!--Membuat div dengan class "d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" untuk bagian judul halaman.-->
                <h1 class="h2">Anggota</h1> <!-- Membuat judul-->
            </div>
            <form action="fungsi/edit.php?anggota=edit" method="post"> <!--Membuat form dengan aksi "fungsi/edit.php?anggota=edit" dan metode "post"-->
                <div class="row"> <!--Membuat div dengan class "row" untuk membuat baris dalam tata letak responsif-->
                    <div class="col-sm-6"> <!--Membuat div dengan class "col-sm-6" untuk menentukan tata letak kolom di setengah lebar pada perangkat dengan ukuran kecil-->
                        <div class="card"> <!--Membuat div dengan class "card" untuk membuat kartu-->
                            <div class="card-header"> <!--Membuat div dengan class "card-header" untuk bagian header kartu-->
                                Form Edit Anggota
                            </div>
                            <div class="card-body"> <!--Membuat div dengan class "card-body" untuk bagian isi kartu-->
                                <input type="hidden" name="id" value="<?= $row['user_id'] ?>"> <!--Membuat input dengan tipe "hidden" untuk menyimpan nilai ID dalam form-->
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama </label> <!--Membuat label dengan class "col-form-label" untuk input Nama-->
                                    <input type="text" name="nama" value="<?= $row['nama'] ?>" class="form-control" id="recipient-name"> <!--Membuat input dengan tipe "text" untuk mengisi Nama dengan nilai awal dari database-->
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Jabatan</label>
                                    <select name="jabatan" class="form-select"> <!--Membuat label dengan class "col-form-label" untuk input Jabatan-->
                                        <option>Pilih Jabatan</option>
                                        <?php
                                        $query2 = "SELECT * FROM jabatan order by jabatan asc";
                                        $reqult2 = mysqli_query($koneksi, $query2);
                                        while ($row2 = mysqli_fetch_assoc($reqult2)) { //Membuat query SQL untuk mengambil data jabatan dari database dan melakukan perulangan untuk membuat opsi dalam elemen <select>
                                        ?> <!--Membuat opsi untuk setiap jabatanyang ada dalam database dan menandai opsi yang sesuai dengan jabatan saat ini-->
                                            <option value="<?= $row2['id'] ?>" <?= ($row['jabatan_id'] == $row2['id']) ? 'selected' : '' ?>><?= $row2['jabatan'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Jenis Kelamin </label>
                                    <br>
                                    <!--Membuat input dengan tipe "radio" untuk memilih jenis kelamin Laki-laki dan menandai sebagai dipilih jika jenis kelamin saat ini adalah Laki-laki-->
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" <?= ($row['jenis_kelamin'] === 'L') ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" <?= ($row['jenis_kelamin'] === 'P') ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Alamat </label>
                                    <input type="text" name="alamat" class="form-control" value="<?= $row['alamat'] ?>" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">No Telepon </label>
                                    <input type="text" name="no_telp" class="form-control" value="<?= $row['no_telp'] ?>" id="recipient-name">
                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                Form Edit Login Anggota
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Username</label>
                                    <input type="text" name="username" class="form-control" value="<?= $row['username'] ?>" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="recipient-name">
                                    <div class="form-text">Kosongi password, jika tidak ingin menggantinya.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body" style="text-align: center;">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>Ubah</button>
                                <a href="index.php?page=anggota" class="btn btn-secondary"><i class="fa fa-times"></i>Batal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </main>
    </div>
</div>