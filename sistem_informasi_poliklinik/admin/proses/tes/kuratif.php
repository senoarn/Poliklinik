<?php
error_reporting(0);
include "koneksi.php";
session_start();

$id        = $_REQUEST['id'];
$pasien    = $_REQUEST['pasien'];
$kode      = $_REQUEST['kode'];
$kel_utama = $_POST['kel_utama'];
$kel_tgl   = $_POST['kel_tgl'];
$his_sakit = $_POST['history_penyakit'];
$fisik     = $_POST['periksa_fisik'];
$koles1    = '';
$hiper1    = '';
$diagnosis = $_POST['diagnosis'];
$lab       = basename($_FILES["lab"]["name"]);
$radiologi = basename($_FILES["radio"]["name"]);

$nama         = $_POST['nama'];
$kerja        = $_POST['kerja'];
$tgl_riwayat  = date("d-m-Y h:i:sa");

if ($id == 'delobat') {
  $delete = mysqli_query($connect, "DELETE FROM `cart` WHERE `cart`.`id` = $kode");
  echo "<script>alert('Data Berhasil Dihapus');window.location = '../cari-obat.php';</script>";
} else if($id == 'saveobat') {
  $id_kuratif = $_SESSION['kuratif'];
  $kode_obat  = $_POST['kode'];
  $total      = $_POST['total'];
  $aturan     = $_POST['aturan'];
  $nama       = $_POST['nama'];
  $tanggal    = date('d/M/Y h:i:sa');
  for ($i=0; $i < count($kode_obat); $i++) {
    // echo $kode_obat[$i]." ".$total[$i]." ".$aturan[$i]." ".$nama[$i]." ".$tanggal."<br>";
    $insert      = mysqli_query($connect, "INSERT INTO `data_obat` (`id`, `order_id`, `kode`, `jumlah`, `minum`) VALUES (NULL, '$id_kuratif', '$kode_obat[$i]', '$total[$i]', '$aturan[$i]');");
    $a           = mysqli_query($connect, "SELECT * FROM `obat` WHERE `id` = '$kode_obat[$i]'");
    while ($obat = mysqli_fetch_array($a)) {
      $stok      = $obat['stok'];
      $sisa      = $stok-$total[$i];

    $b           = mysqli_query($connect, "UPDATE `obat` SET `stok` = '$sisa' WHERE `obat`.`id` = '$kode_obat[$i]';");
    }

    $ubah = mysqli_query($connect, "INSERT INTO `riwayat_obat.php` (`no`, `nama`, `keterangan`, `tanggal`) VALUES (NULL, '$nama[$i]', '$total[$i] butir obat keluar untuk pemeriksaan kuratif $id_kuratif', '$tanggal');");
  }

  // echo "$keluhan_utama | $tanggal_keluhan | $history_penyakit | $pemeriksaan_lab | $pemeriksaan_radio | $diagnosis | $hiper | $koles";
  $clear  = mysqli_query($connect, "TRUNCATE cart");
  echo "<script> window.location = '../data-kuratif.php';</script>";
} else if($id == 'hapus') {
    $kuratif   = $_REQUEST['kuratif'];
    $data      = $_REQUEST['data'];
    $hapus_kuratif        = mysqli_query($connect, "DELETE FROM `kuratif` WHERE `kuratif`.`order_id` = '$kuratif'");
    $hapus_rehabilitatif  = mysqli_query($connect, "DELETE FROM `rehabilitatif` WHERE `rehabilitatif`.`kuratif` = '$kuratif'");
    echo "<script> window.location = '../data-kuratif-all.php?data=$data';</script>";
} else if($id == 'tambah'){
$_SESSION['kode_pasien']   = $pasien;
$_SESSION['id_kuratif']    = $id_kuratif;

// echo $pasien;
$target_dir = "kuratif/";
$lab = $target_dir . basename($_FILES["lab"]["name"]);
if (move_uploaded_file($_FILES["lab"]["tmp_name"], $lab)) {
  // echo "The file ". basename( $_FILES["lab"]["name"]). " has been uploaded.";
} else {
  // echo "Sorry, there was an error uploading your file.";
}

$radio = $target_dir . basename($_FILES["radio"]["name"]);
if (move_uploaded_file($_FILES["radio"]["tmp_name"], $radio)) {
  // echo "The file ". basename( $_FILES["radio"]["name"]). " has been uploaded.";
} else {
  // echo "Sorry, there was an error uploading your file.";
}
$_SESSION['kuratif']  = date('dmY').rand(10, 1000);
$id_kuratif = $_SESSION['kuratif'];
// echo $_SESSION['kode_pasien']." - ".$_SESSION['keluhan_utama']." - ".$_SESSION['keluhan_tanggal']." - ".$_SESSION['history_penyakit']." - ".$_SESSION['pemeriksaan_fisik']." - ".$_SESSION['pemeriksaan_lab']." - ".$_SESSION['radiologi']." - ".$_SESSION['diagnosis']." - ".$_SESSION['kolesterol']." ".$_SESSION['hipertensi']." - ".$_SESSION['nama']." - ".$_SESSION['kerja']." - ".$_SESSION['tgl_riwayat'];
$input  = mysqli_query($connect, "INSERT INTO `kuratif` (`order_id`, `pasien`, `kel_utama`, `tgl_periksa`, `riwayat_penyakit`, `fisik`, `lab`, `radio`, `diagnosis`) VALUES ('$id_kuratif', '$pasien', '$kel_utama', '$kel_tgl', '$his_sakit', '$fisik', '$lab', '$radiologi','$diagnosis');");
$riwayat= mysqli_query($connect, "INSERT INTO `riwayat` (`id`, `nama`, `jenis_periksa`, `tanggal`, `diagnosis`) VALUES (NULL, '$nama', 'Kuratif', '$tgl_riwayat', '$diagnosis');");
echo "<script> alert('Sukses Terupload');window.location = '../cari-obat.php';</script>";
}
 ?>
