<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FROMULIR PENDAFTARAN KIP-K INDONESIA</title>
    <link rel="stylesheet" href="styleFormulir.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <script>
        $(document).ready(function(){
            $(".navbar-nav a").click(function(){
                var sectionID = $(this).attr("href");
                $('html, body').animate({
                    scrollTop: $(sectionID).offset().top
                }, 1000);
                return false;
            });
        });
    </script>
</head>
<body>
    <header>
        <nav class="navbar">
        <a href="#" class="navbar-logo">
            <img src="logo.png" alt="Logo Beasiswa KIP-K Indonesia">
            FORMULIR PENDAFTARAN <span></span>   
        </a>
        <div class="navbar-nav">
            <a href="#">Home</a>
            <a href="#Biodata">Biodata</a>
            <a href="#Keluarga">Keluarga</a>
            <a href="#Ekonomi">Ekonomi</a>
            <a href="#Aset">Aset</a>
            <a href="#Prestasi">Prestasi</a>
            <a href="#Seleksi">Seleksi</a>
        </div>
        </nav>
    </header>

    <!-- FORMULIR BIODATA -->
    <section class="Biodata" id="Biodata">
        <h2>Formulir Biodata</h2>
        <form method="post" action="proses_biodata.php" enctype="multipart/form-data">

            <label for="gambar">Unggah Foto Pribadi:</label>
            <input type="file" id="gambar" name="gambar" accept="image/*"><br><br>

            <label for="nama">NISN:</label>
            <input type="text" id="nisn" name="nisn" required><br><br>

            <label for="nama">Nama Siswa:</label>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="nama">NIK:</label>
            <input type="text" id="nik" name="nik" required><br><br>

            <label for="nama">No KIP:</label>
            <input type="text" id="noKip" name="noKip" required><br><br>

            <label for="nama">No KKS:</label>
            <input type="text" id="noKKS" name="noKKS" required><br><br>

            <label for="nama">Asal Sekolah:</label>
            <input type="text" id="asal" name="asal" required><br><br>

            <label for="nama">Tahun Lulus:</label>
            <input type="text" id="th" name="th" required><br><br>

            <label for="nama">Tempat Lahir:</label>
            <input type="text" id="tempatLahir" name="tempatLahir" required><br><br>

            <label for="nama">Tanggal Lahir:</label>
            <input type="text" id="tglLahir" name="tglLahir" required><br><br>

            <label for="nama">Jenis Kelamin:</label>
            <select id="jk" name="jk" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select><br><br>

            <label for="nama">Agama:</label>
            <input type="text" id="agama" name="agama" required><br><br>

            <label for="nama">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required><br><br>

            <label for="nama">Provinsi:</label>
            <input type="text" id="provinsi" name="provinsi" required><br><br>

            <label for="nama">Kabupaten/Kota:</label>
            <input type="text" id="kab" name="kab" required><br><br>

            <label for="nama">Kode Pos:</label>
            <input type="text" id="pos" name="pos" required><br><br>

            <label for="nama">Email:</label>
            <input type="text" id="email" name="email" required><br><br>

            <label for="nama">No Telepon:</label>
            <input type="text" id="no" name="no" required><br><br>

            <label for="nama">No Handphone:</label>
            <input type="text" id="hp" name="hp" required><br><br>

            <input type="submit" name="submit" value="Simpan Perubahan">
            </form>
            
    </section>

    <section class = "Keluarga" id="Keluarga">
        <h2>Formulir Keluarga</h2>
        <form method="post" action="proses_keluarga.php">
            <label for="nama">Nomor KK:</label>
            <input type="text" id="noKK" name="noKK" required><br><br>

            <label for="nama">NIK Kepala Keluarga:</label>
            <input type="text" id="nikKK" name="nikKK" required><br><br>

            <label for="nama">Nama Ayah/Wali:</label>
            <input type="text" id="namaayah" name="namaayah" required><br><br>

            <label for="nama">Status Ayah/Wali:</label>
            <input type="text" id="statusayah" name="statusayah" required><br><br>

            <label for="nama">Hubungan dengan Ayah:</label>
            <input type="text" id="hubayah" name="hubayah" required><br><br>

            <label for="nama">Pendidikan Ayah/Wali:</label>
            <select id="pendidikanAyah" name="pendidikanAyah" required>
                <option value="">Pilih</option>
                <option value="SD">SD</option>
                <option value="SLTP">SLTP</option>
                <option value="SLTA">SLTA</option>
                <option value="Sarjana">Sarjana</option>
                <option value="Lainnya">Lainnya</option>
            </select><br><br>

            <label for="nama">Pekerjaan Ayah/Wali:</label>
            <select id="kerjaAyah" name="kerjaAyah" required>
                <option value="">Pilih</option>
                <option value="PNS">PNS</option>
                <option value="Wiraswasta">Wiraswasta</option>
                <option value="Wirausaha">Wirausaha</option>
                <option value="Petani">Petani</option>
                <option value="Lainnya">Lainnya</option>
            </select><br><br>

            <label for="nama">Nama Ibu:</label>
            <input type="text" id="namaibu" name="namaibu" required><br><br>

            <label for="nama">Status Ibu:</label>
            <input type="text" id="statusibu" name="statusibu" required><br><br>

            <label for="nama">Pendidikan Ibu:</label>
            <select id="pendidikanIbu" name="pendidikanIbu" required>
                <option value="">Pilih</option>
                <option value="SD">SD</option>
                <option value="SLTP">SLTP</option>
                <option value="SLTA">SLTA</option>
                <option value="Sarjana">Sarjana</option>
                <option value="Lainnya">Lainnya</option>
            </select><br><br>

            <label for="nama">Pekerjaan Ibu:</label>
            <select id="kerjaIbu" name="kerjaIbu" required>
                <option value="">Pilih</option>
                <option value="PNS">PNS</option>
                <option value="Wiraswasta">Wiraswasta</option>
                <option value="Wirausaha">Wirausaha</option>
                <option value="Petani">Petani</option>
                <option value="Lainnya">Lainnya</option>
            </select><br><br>

            <label for="nama">Jumlah Tanggungan:</label>
            <input type="text" id="tanggungan" name="tanggungan" required><br><br>

            <label for="nama">No Telepon Orang Tua:</label>
            <input type="text" id="noOrtu" name="noOrtu" required><br><br>

            <input type="submit" name="submit" value="Simpan Perubahan"> 
            </form>
    </section>

    <section class="Ekonomi" id="Ekonomi">
    <h2>Formulir Ekonomi</h2>
    <form method="post" action="proses_ekonomi.php">

    <label for="nama">Pekerjaan Ayah/Wali:</label>
    <select id="kerjaAyah" name="kerjaAyah" required>
        <option value="">Pilih</option>
        <option value="PNS">PNS</option>
        <option value="Wiraswasta">Wiraswasta</option>
        <option value="Wirausaha">Wirausaha</option>
        <option value="Petani">Petani</option>
        <option value="Lainnya">Lainnya</option>
    </select><br><br>

    <label for="nama">Penghasilan Ayah:</label>
    <input type="text" id="penghasilanAyah" name="penghasilanAyah" required><br><br>

    <label for="nama">Pekerjaan Ibu:</label>
    <select id="kerjaIbu" name="kerjaIbu" required>
        <option value="">Pilih</option>
        <option value="PNS">PNS</option>
        <option value="Wiraswasta">Wiraswasta</option>
        <option value="Wirausaha">Wirausaha</option>
        <option value="Petani">Petani</option>
        <option value="Lainnya">Lainnya</option>
    </select><br><br>

    <label for="nama">Penghasilan Ibu:</label>
    <input type="text" id="penghasilanIbu" name="penghasilanIbu" required><br><br>

    <label for="nama">Total Hutang Kepada Pihak Lain:</label>
    <input type="text" id="Hutang" name="Hutang" required><br><br>

    <label for="nama">Cicilan Hutang Dibayar Per Bulan:</label>
    <input type="text" id="cicilan" name="cicilan" required><br><br>

    <label for="nama">Total Piutang Kepada Pihak Lain:</label>
    <input type="text" id="Piutang" name="Piutang" required><br><br>

    <label for="nama">Cicilan Piutang Dibayar Per Bulan:</label>
    <input type="text" id="cicilanPiutang" name="cicilanPiutang" required><br><br>

    <label for="nama">Tabungan Keluarga:</label>
    <input type="text" id="Tabungan" name="Tabungan" required><br><br>

    <input type="submit" name="submit" value="Simpan Perubahan"> 
    </form>
</section>

<section class="Aset"  id="Aset">
    <h2>Formulir Aset</h2>
    <form method="post" action="proses_aset.php">
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Merk</th>
                <th>Kondisi</th>
                <th>Harga Beli</th>
                <th>Metode Perolehan</th>
            </tr>
            <tr>
                <td><input type="number" name="no" required></td>
                <td><input type="text" name="nama" required></td>
                <td><input type="text" name="jenis" required></td>
                <td><input type="text" name="merk" required></td>
                <td><input type="text" name="kondisi" required></td>
                <td><input type="text" name="harga" required></td>
                <td><input type="text" name="metodePerolehan" required></td>
            </tr>
        </table>
        <input type="submit" value="Simpan Perubahan">
    </form>
</section>

<section class="Prestasi" id="Prestasi">
    <h2>Formulir Prestasi</h2>
    <form method="post" action="proses_prestasi.php">
    <table>
        <tr>
            <th>No</th>
            <th>Nama Kegiatan</th>
            <th>Jenis</th>
            <th>Tingkat</th>
            <th>Tahun</th>
            <th>Pencapaian</th>
        </tr>
        <tr>
            <td><input type="number" name="no" required></td>
            <td><input type="text" name="nama" required></td>
            <td><input type="text" name="jenis" required></td>
            <td><input type="text" name="tingkat" required></td>
            <td><input type="text" name="tahun" required></td>
            <td><input type="text" name="pencapaian" required></td>
        </tr>
    </table>
    <input type="submit" value="Simpan Perubahan">
    </form>
</section>

<section class ="Seleksi" id="Seleksi">
    <h2>Formulir Seleksi</h2>
    <form method="post" action="proses_seleksi.php">
    <label for="nama">Jenis Seleksi:</label>
    <select id="kerjaIbu" name="kerjaIbu" required>
        <option value="">Pilih</option>
        <option value="SNBP">SNBP</option>
        <option value="SNBT">SNBT</option>
        <option value="Mandiri">Mandiri</option>
        <option value="SNMPN">SNMPN</option>
        <option value="SBMPN">SBMPN</option>
    </select><br><br>
    <input type="submit" value="Simpan Perubahan">
    </form>
</section>
</body>
</html>