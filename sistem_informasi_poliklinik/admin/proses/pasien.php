<?php
error_reporting(0);
include "koneksi.php";

$id       = $_REQUEST['id'];
$data     = $_REQUEST['data'];
$rm       = $_POST['rm'];
$nama     = $_POST['nama'];
$nrp      = $_POST['nrp'];
$ktp      = $_POST['ktp'];
$tempat   = $_POST['tempat'];
$tgl      = $_POST['tgl'];
$usia     = $_POST['usia'];
$jk       = $_POST['jk'];
$kerja    = $_POST['kerja'];
$detail   = $_POST['detail'];
$agama    = $_POST['agama'];
$alamat   = $_POST['alamat'];
$tlp      = $_POST['tlp'];
$status   = $_POST['status'];
$bb       = $_POST['bb'];
$tb       = $_POST['tb'];
$goldar   = $_POST['goldar'];
$rhesus   = $_POST['rhesus'];
$thn_masuk= $_POST['thn_masuk'];
$nim      = $_POST['nim'];
$tanggal  = date('d/M/Y h:i:sa');

if ($id == "tambah") {
    $sql = "INSERT INTO pasien (rm, nama, nrp, ktp, tempat, tgl, usia, jk, kerja, detail, agama, alamat, tlp, status, bb, tb, goldar, rhesus, thn_masuk, nim)
            VALUES ('$rm', '$nama', '$nrp', '$ktp', '$tempat', '$tgl', '$usia', '$jk', '$kerja', '$detail', '$agama', '$alamat', '$tlp', '$status', '$bb', '$tb', '$goldar', '$rhesus', '$thn_masuk', '$nim')";

    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo "<script>alert('Data Berhasil disimpan'); window.location = '../data-pasien.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data: " . mysqli_error($connect) . "'); window.location = '../data-pasien.php';</script>";
    }
} else if ($id == "hapus") {
    $hapus = mysqli_query($connect, "DELETE FROM `pasien` WHERE `pasien`.`id` = '$data'");
    echo "<script>alert('Data Berhasil Dihapus'); window.location = '../data-pasien.php';</script>";
} else if ($id == "edit") {
    $edit = mysqli_query($connect, "UPDATE `pasien` SET `nama` = '$nama', `nrp` = '$nrp', `ktp` = '$ktp', `tempat` = '$tempat', `tgl` = '$tgl', `usia` = '$usia', `jk` = '$jk', `kerja` = '$kerja', `detail` = '$detail', `agama` = '$agama', `alamat` = '$alamat', `tlp` = '$tlp', `status` = '$status', `bb` = '$bb', `tb` = '$tb', `goldar` = '$goldar', `rhesus` = '$rhesus', `thn_masuk` = '$thn_masuk', `nim` = '$nim' WHERE `pasien`.`id` = '$data'");
    echo "<script>alert('Data Berhasil diupdate'); window.location = '../data-pasien.php';</script>";
}
?>
