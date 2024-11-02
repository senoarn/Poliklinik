<?php
error_reporting(0);
include "koneksi.php";
$pasien             = $_REQUEST['pasien'];
$data               = $_REQUEST['data'];
$diagnosa_akhir     = $_POST['diagnosa_akhir'];
$saran              = $_POST['saran'];
$kemajuan           = $_POST['kemajuan'];
$tgl_rehab          = $_POST['tgl_rehab'];
$id                 = $_REQUEST['id'];
$nama               = $_REQUEST['nama'];
$tgl_riwayat        = date("d-m-Y h:i:sa");
if($id == 'tambah') {
$insert             = mysqli_query($connect, "INSERT INTO `rehabilitatif` (`id`, `tangal`, `diagnosa_akhir`, `saran`, `kemajuan`, `kuratif`) VALUES (NULL, '$tgl_rehab', '$diagnosa_akhir', '$saran', '$kemajuan', '$data');");
$riwayat= mysqli_query($connect, "INSERT INTO `riwayat` (`id`, `nama`, `jenis_periksa`, `tanggal`, `diagnosis`) VALUES (NULL, '$nama', 'Rehabilitatif', '$tgl_riwayat', '');");
echo "<script>alert('Data Rehabilitatif Disimpan'); window.location = '../data-rehabilitasi.php?data=$pasien&id=$data';</script>";
} else if($id == 'hapus') {
  $rehab   = $_REQUEST['rehab'];
  $kuratif = $_REQUEST['kuratif'];
  $hapus  = mysqli_query($connect, "DELETE FROM `rehabilitatif` WHERE `rehabilitatif`.`id` = $rehab");
  echo "<script>alert('Data Rehabilitatif Dihapus'); window.location = '../data-rehabilitasi.php?data=$data&id=$kuratif';</script>";
} ?>
