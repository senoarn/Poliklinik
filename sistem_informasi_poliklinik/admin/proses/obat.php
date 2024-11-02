<?php
error_reporting(0);
include "koneksi.php";
$id       = $_REQUEST['id'];
$data     = $_REQUEST['data'];
$kode     = $_POST['kode'];
$nama     = $_POST['nama'];
$jenis    = $_POST['jenis'];
$stok     = $_POST['stok'];
$kode     = $_POST['kode'];
$produksi = $_POST['produksi'];
$expired = $_POST['expired'];
$tanggal  = date('d/M/Y h:i:sa');

if ($id == "tambah") {
  $obat = mysqli_query($connect, "INSERT INTO `obat` (`id`, `kode`, `nama`, `jenis`, `stok`, `produksi`, `expired`) VALUES (NULL, '$kode', '$nama', '$jenis', '$stok', '$produksi', '$expired');");
  echo "<script>alert('Data Berhasil disimpan'); window.location = '../data-obat.php';</script>";
} else if ($id == "simpan") {
  $obat   = mysqli_query($connect, "INSERT INTO `cart` (`id`, `kode`) VALUES (NULL, '$data');");
  echo "<script> window.location = '../cari-obat.php';</script>";
} else if($id == "hapus") {
  $hapus = mysqli_query($connect, "DELETE FROM `obat` WHERE `obat`.`id` = '$data'");
  echo "<script>alert('Data Berhasil Dihapus'); window.location = '../data-obat.php';</script>";
} else if ($id == "edit") {
  $edit = mysqli_query($connect, "UPDATE `obat` SET `nama` = '$nama', `jenis` = '$jenis', `stok` = '$stok', `produksi` = '$produksi', `expired` = '$expired' WHERE `obat`.`id` = '$data';");
  echo "<script>alert('Data Berhasil diupdate'); window.location = '../data-obat.php';</script>";
}
?>
