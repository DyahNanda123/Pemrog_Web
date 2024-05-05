<?php
// Fungsi untuk menetapkan flashdata
function set_flashdata($key = "", $value = "")
{
    // Memeriksa apakah kunci dan nilai tidak kosong
    if (!empty($key) || empty($value)) {
        // Menetapkan flashdata ke dalam sesi
        $_SESSION['_flashdata'][$key] = $value;
        return true;
    }
    return false;
}

// Fungsi untuk mendapatkan flashdata
function get_flashdata($key = "")
{
    // Memeriksa apakah kunci tidak kosong dan flashdata tersedia dalam sesi
    if (!empty($key) && isset($_SESSION['_flashdata'][$key])) {
        // Mengambil data flashdata
        $data = $_SESSION['_flashdata'][$key];
        // Menghapus flashdata dari sesi agar tidak ditampilkan kembali
        unset($_SESSION['_flashdata'][$key]);
        return $data;
    } else {
        // Menampilkan pesan jika flashdata tidak ditemukan
        echo "<script>alert(' Flash Message \'{$key}\' is not defined.')</script>";
    }
}

// Fungsi untuk menampilkan pesan
function pesan($key = "", $pesan = "")
{
    // Menetapkan flashdata sesuai dengan jenis pesan
    if ($key == "info") {
        set_flashdata("info", "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
        <strong>Info!</strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
    } elseif ($key == "success") {
        set_flashdata("success", "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
    } elseif ($key == "danger") {
        set_flashdata("danger", "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Danger!</strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
    } elseif ($key == "warning") {
        set_flashdata("warning", "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Warning!</strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
    }
}
?>
