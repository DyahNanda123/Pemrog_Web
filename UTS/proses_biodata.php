<?php
session_start();

// Mengambil data dari formulir jika tersedia
$nisn = isset($_POST["nisn"]) ? htmlspecialchars($_POST["nisn"]) : "";
$nama = isset($_POST["nama"]) ? htmlspecialchars($_POST["nama"]) : "";
$nik = isset($_POST["nik"]) ? htmlspecialchars($_POST["nik"]) : "";
$noKip = isset($_POST["noKip"]) ? htmlspecialchars($_POST["noKip"]) : "";
$noKKS = isset($_POST["noKKS"]) ? htmlspecialchars($_POST["noKKS"]) : "";
$asal = isset($_POST["asal"]) ? htmlspecialchars($_POST["asal"]) : "";
$th = isset($_POST["th"]) ? htmlspecialchars($_POST["th"]) : "";
$tempatLahir = isset($_POST["tempatLahir"]) ? htmlspecialchars($_POST["tempatLahir"]) : "";
$tglLahir = isset($_POST["tglLahir"]) ? htmlspecialchars($_POST["tglLahir"]) : "";
$jk = isset($_POST["jk"]) ? htmlspecialchars($_POST["jk"]) : "";
$agama = isset($_POST["agama"]) ? htmlspecialchars($_POST["agama"]) : "";
$alamat = isset($_POST["alamat"]) ? htmlspecialchars($_POST["alamat"]) : "";
$provinsi = isset($_POST["provinsi"]) ? htmlspecialchars($_POST["provinsi"]) : "";
$kab = isset($_POST["kab"]) ? htmlspecialchars($_POST["kab"]) : "";
$pos = isset($_POST["pos"]) ? htmlspecialchars($_POST["pos"]) : "";
$email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
$no = isset($_POST["no"]) ? htmlspecialchars($_POST["no"]) : "";
$hp = isset($_POST["hp"]) ? htmlspecialchars($_POST["hp"]) : "";

// Set session data
// Set session data
$_SESSION['nisn'] = $nisn;
$_SESSION['nama_siswa'] = $nama;
$_SESSION['nik'] = $nik;
$_SESSION['noKip'] = $noKip;
$_SESSION['noKKS'] = $noKKS;
$_SESSION['asal'] = $asal;
$_SESSION['th'] = $th;
$_SESSION['tempatLahir'] = $tempatLahir;
$_SESSION['tglLahir'] = $tglLahir;
$_SESSION['jk'] = $jk;
$_SESSION['agama'] = $agama;
$_SESSION['alamat'] = $alamat;
$_SESSION['provinsi'] = $provinsi;
$_SESSION['kab'] = $kab;
$_SESSION['pos'] = $pos;
$_SESSION['email'] = $email;
$_SESSION['no'] = $no;
$_SESSION['hp'] = $hp;

// Set cookies
// Set cookies
$expire = time() + (60 * 60 * 24 * 30); // 30 days
setcookie('nisn', $nisn, $expire, "/", "", true, true); // Secure, HttpOnly
setcookie('nama_siswa', $nama, $expire, "/", "", true, true); // Secure, HttpOnly
setcookie('nik', $nik, $expire, "/", "", true, true); // Secure, HttpOnly
setcookie('noKip', $noKip, $expire, "/", "", true, true); // Secure, HttpOnly
setcookie('noKKS', $noKKS, $expire, "/", "", true, true); // Secure, HttpOnly
setcookie('asal', $asal, $expire, "/", "", true, true); // Secure, HttpOnly
setcookie('th', $th, $expire, "/", "", true, true); // Secure, HttpOnly
setcookie('tempatLahir', $tempatLahir, $expire, "/", "", true, true); // Secure, HttpOnly
setcookie('tglLahir', $tglLahir, $expire, "/", "", true, true); // Secure, HttpOnly
setcookie('jk', $jk, $expire, "/", "", true, true); // Secure, HttpOnly
setcookie('agama', $agama, $expire, "/", "", true, true); // Secure, HttpOnly
setcookie('alamat', $alamat, $expire, "/", "", true, true); // Secure, HttpOnly
setcookie('provinsi', $provinsi, $expire, "/", "", true, true); // Secure, HttpOnly
setcookie('kab', $kab, $expire, "/", "", true, true); // Secure, HttpOnly
setcookie('pos', $pos, $expire, "/", "", true, true); // Secure, HttpOnly
setcookie('email', $email, $expire, "/", "", true, true); // Secure, HttpOnly
setcookie('no', $no, $expire, "/", "", true, true); // Secure, HttpOnly
setcookie('hp', $hp, $expire, "/", "", true, true); // Secure, HttpOnly


// Menangani unggahan file gambar
$gambarName = isset($_FILES['gambar']['name']) ? $_FILES['gambar']['name'] : '';
$gambarTmpName = isset($_FILES['gambar']['tmp_name']) ? $_FILES['gambar']['tmp_name'] : '';
$gambarSize = isset($_FILES['gambar']['size']) ? $_FILES['gambar']['size'] : 0;
$gambarError = isset($_FILES['gambar']['error']) ? $_FILES['gambar']['error'] : 0;

$uploadDir = 'uploads/';

if ($gambarError === UPLOAD_ERR_OK) {
    $allowedTypes = array('jpg', 'jpeg', 'png');
    $gambarExtension = strtolower(pathinfo($gambarName, PATHINFO_EXTENSION));

    if (in_array($gambarExtension, $allowedTypes) && $gambarSize < 5000000) {
        $gambarDestination = $uploadDir . $gambarName;
        move_uploaded_file($gambarTmpName, $gambarDestination);

        echo "File gambar berhasil diunggah.";
        $_SESSION['gambar'] = $gambarDestination;
    } else {
        echo "Error: Tipe file gambar tidak didukung atau ukuran file terlalu besar.";
    }
} else {
    echo "Error: Terjadi kesalahan saat mengunggah file gambar.";
}
?>

<script>
    // Konfirmasi sebelum menampilkan data siswa
    var konfirmasi = confirm("Apakah Anda yakin dengan data yang telah diinputkan?");
    if (!konfirmasi) {
        // Redirect kembali ke halaman sebelumnya jika pengguna tidak yakin
        history.back();
    }
</script>

<?php
// Menampilkan data yang diterima

// Menampilkan foto yang diunggah
if (isset($_SESSION['gambar'])) {
    echo "<h2>Foto Siswa:</h2>";
    echo "<img src='" . $_SESSION['gambar'] . "' alt='Foto Siswa'>";
}

echo "<h2>Data Siswa:</h2>";
echo "NISN: " . $nisn . "<br>";
echo "Nama Siswa: " . $nama . "<br>";
echo "NIK: " . $nik . "<br>";
echo "No KIP: " . $noKip . "<br>";
echo "No KKS: " . $noKKS . "<br>";
echo "Asal Sekolah: " . $asal . "<br>";
echo "Tahun Lulus: " . $th . "<br>";
echo "Tempat Lahir: " . $tempatLahir . "<br>";
echo "Tanggal Lahir: " . $tglLahir . "<br>";
echo "Jenis Kelamin: " . $jk . "<br>";
echo "Agama: " . $agama . "<br>";
echo "Alamat: " . $alamat . "<br>";
echo "Provinsi: " . $provinsi . "<br>";
echo "Kabupaten/Kota: " . $kab . "<br>";
echo "Kode Pos: " . $pos . "<br>";
echo "Email: " . $email . "<br>";
echo "No Telepon: " . $no . "<br>";
echo "No Handphone: " . $hp . "<br>";
?>
