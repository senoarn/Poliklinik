<?php
error_reporting(0);
session_start();
include "koneksi.php";

$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$hp = isset($_POST['hp']) ? $_POST['hp'] : '';
$password = isset($_POST['pass']) ? $_POST['pass'] : '';

$jabatan = "Admin";

$add = mysqli_query($connect, "INSERT INTO `user` (`Nama`, `Email`, `Password`, `Jabatan`) VALUES ('$nama', '$email', '$password', '$jabatan');");

if ($add) {
    echo "<script>alert('Daftar Berhasil');window.location = '../../index.php';</script>";
} else {
    echo "<script>alert('Terjadi kesalahan. Silakan coba lagi.'); window.location = '../register.php';</script>";
}
?>
