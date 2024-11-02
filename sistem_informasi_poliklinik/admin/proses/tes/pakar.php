<?php
error_reporting(0);
include "koneksi.php";

$nama = $_POST['nama'];
$id   = $_REQUEST['id'];
$tgl  = $_POST['tgl'];
$kode = $_REQUEST['kode'];

if ($id == 'diagnosa' || $id == 'penyakit') {
  $input = mysqli_query($connect, "INSERT INTO `penyakit_diagnosa` (`id`, `nama`, `tgl`, `ket`) VALUES (NULL, '$nama', '$tgl', '$id');");
  echo "<script>alert('Data Berhasil di Tambahkan'); window.location = '../penyakit.php?id=$id';</script>";
} else if ($id == 'pakar') {
  $a      = $_POST['a'];
  $b      = $_POST['b'];
  $c      = $_POST['c'];
  $d      = $_POST['d'];
  $e      = $_POST['e'];
  $f      = $_POST['f'];
  $g      = $_POST['g'];
  $h      = $_POST['h'];
  $i      = $_POST['i'];
  $j      = $_POST['j'];
  $sakit  = $_POST['penyakit'];
  $rekom  = $_POST['rekomendasi'];
  $input  = mysqli_query($connect, "INSERT INTO `pakar` (`id`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`, `penyakit`, `rekom`) VALUES (NULL, '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$sakit', '$rekom');");
  echo "<script>alert('Data Berhasil di Tambahkan'); window.location = '../penyakit.php?id=$id';</script>";
} else if($id == "delete") {
  $delete = mysqli_query($connect, "DELETE FROM `pakar` WHERE `pakar`.`id` = '$kode'");
  echo "<script>alert('Data Berhasil di Hapus'); window.location = '../penyakit.php?id=view';</script>";
} else {
  echo "View";
}

 ?>
