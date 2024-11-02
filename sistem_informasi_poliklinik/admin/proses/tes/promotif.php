<?php
error_reporting(0);
include "koneksi.php";
$idx            = $_REQUEST['idx'];
if ($idx == "hapussemua") {
  $data      = $_REQUEST['data'];
  $pasyen    = mysqli_query($connect, "SELECT * FROM `promotif` WHERE `nrp` = '$data'");
  while ($a  = mysqli_fetch_row($pasyen) ) {
    $id_prom = $a[0];
    $promotif2 = mysqli_query($connect, "DELETE FROM `promotif_hiper` WHERE `promotif_hiper`.`id_promotif` = '$id_prom'");
    $promotif3 = mysqli_query($connect, "DELETE FROM `promotif_jantung` WHERE `promotif_jantung`.`id` = '$id_prom'");
    $promotif4 = mysqli_query($connect, "DELETE FROM `promotif_kulit` WHERE `promotif_kulit`.`id` = '$id_prom'");
    $promotif5 = mysqli_query($connect, "DELETE FROM `promotif_mata` WHERE `promotif_mata`.`id` = '$id_prom'");
    $promotif6 = mysqli_query($connect, "DELETE FROM `promotif_mulut` WHERE `promotif_mulut`.`id` = '$id_prom'");
    $promotif7 = mysqli_query($connect, "DELETE FROM `promotif_telinga` WHERE `promotif_telinga`.`id` = '$id_prom'");
  }
  $hapusemua = mysqli_query($connect, "DELETE FROM `promotif` WHERE `promotif`.`nrp` = '$data'");
  echo "<script>window.location = '../data-promotif.php';</script>";
} else if($idx == "hapus") {
  $data      = $_REQUEST['data'];
  $pasien    = $_REQUEST['pasien'];
  $promotif1 = mysqli_query($connect, "DELETE FROM `promotif` WHERE `promotif`.`id` = '$data'");
  $promotif2 = mysqli_query($connect, "DELETE FROM `promotif_hiper` WHERE `promotif_hiper`.`id_promotif` = '$data'");
  $promotif3 = mysqli_query($connect, "DELETE FROM `promotif_jantung` WHERE `promotif_jantung`.`id` = '$data'");
  $promotif4 = mysqli_query($connect, "DELETE FROM `promotif_kulit` WHERE `promotif_kulit`.`id` = '$data'");
  $promotif5 = mysqli_query($connect, "DELETE FROM `promotif_mata` WHERE `promotif_mata`.`id` = '$data'");
  $promotif6 = mysqli_query($connect, "DELETE FROM `promotif_mulut` WHERE `promotif_mulut`.`id` = '$data'");
  $promotif7 = mysqli_query($connect, "DELETE FROM `promotif_telinga` WHERE `promotif_telinga`.`id` = '$data'");
  echo "<script>window.location = '../data-promotif-all.php?data=$pasien';</script>";
} else {
$id             = rand(10,10000).date('dmy');
$tanggal        = date('d/m/Y');
$data           = $_POST['nrp'];
$nama           = $_POST['nama'];
$kerja          = $_POST['kerja'];
$kb_umum        = $_POST['kb_umum'];
$bmi            = $_POST['bmi'];
$tkd            = $_POST['tkd'];
$nadi           = $_POST['nadi'];
$respirasi      = $_POST['respirasi'];
$suhu           = $_POST['suhu'];
$cacat_badan    = $_POST['cab'];
$bagian_cacat   = $_POST['btc'];
$conjuctiva     = $_POST['con'];
$sclera         = $_POST['sec'];
$cyanosis       = $_POST['cya'];
$dyspnea        = $_POST['dyspnea'];

$hiperkoles     = $_POST['Hiperkolesterol'];
$hiperurisemia  = $_POST['hiperurisemia'];
$guldar         = $_POST['guldar'];
$indikasi       = $_POST['indikasi'];
$jk             = $_POST['jk'];

if ($guldar == 1) {
  $kondisi      = "Gula Darah Sebelum Makan";
  if ($indikasi < 131 && $indikasi > 69) {
    $ket_guldar  = "Normal";
  } else {
    $ket_guldar  = "Tidak Normal";
  }
} else if ($guldar == 2) {
  $kondisi      = "Setelah 8 jam puasa";
  if ($indikasi < 101) {
    $ket_guldar  = "Normal";
  } else {
    $ket_guldar  = "Tidak Normal";
  }
} else if ($guldar == 3) {
  $kondisi      = "2 jam setelah makan";
  if ($indikasi < 179) {
    $ket_guldar  = "Normal";
  } else {
    $ket_guldar  = "Tidak Normal";
  }
} else if ($guldar == 4) {
  $kondisi      = "Menjelang Tidur";
  if ($indikasi < 141 && $indikasi > 99) {
    $ket_guldar  = "Normal";
  } else {
    $ket_guldar  = "Tidak Normal";
  }
}


if ($hiperkoles <  151) {
   $ket_hiperkoles = "Normal";
} else {
    $ket_hiperkoles = "Tidak Normal";
}

if($jk == "Laki-Laki ") {
  if ($hiperurisemia <  7.1 && $hiperurisemia > 3.3) {
     $ket_hiperuri = "Normal";
  } else {
      $ket_hiperuri = "Tidak Normal";
  }
} else {
  if ($hiperurisemia <  6.1 && $hiperurisemia > 2.3) {
     $ket_hiperuri = "Normal";
  } else {
      $ket_hiperuri = "Tidak Normal";
  }
}

// echo "$jk - $hiperkoles - $hiperurisemia - $guldar - $indikasi - $ket_hiperuri - $ket_hiperkoles - $ket_guldar - $id";

$hiper          = mysqli_query($connect, "INSERT INTO `promotif_hiper` (`no`, `hiperkolesterol`, `hiperurisemia`, `guladar`, `indikasi_guldar`, `ket_hiperkoles`, `ket_hiperuris`, `ket_guldar`, `id_promotif`) VALUES (NULL, '$hiperkoles', '$hiperurisemia', '$guldar', '$indikasi', '$ket_hiperkoles', '$ket_hiperuri', '$ket_guldar', '$id');");

$tgl_riwayat    = date("d-m-Y h:i:sa");

// echo "$nama - $kerja - $data - $tgl_riwayat";
// echo "1. $id - $data - $kb_umum - $bmi - $tkd - $nadi - $respirasi - $suhu - $cacat_badan - $bagian_cacat - $conjuctiva - $sclera - $cyanosis - $dyspnea <br>";
$promotif       = mysqli_query($connect, "INSERT INTO `promotif` (`id`, `nrp`, `kb_umum`, `bmi`, `tekanan_darah`, `nadi`, `respirasi`, `suhu`, `cacat_anggota_tubuh`, `bagian_cacat`, `conjuctiva`, `sclera`, `cyanosis`, `dyspnea`, `tanggal`) VALUES ('$id', '$data', '$kb_umum', '$bmi', '$tkd', '$nadi', '$respirasi', '$suhu', '$cacat_badan', '$bagian_cacat', '$conjuctiva', '$sclera', '$cyanosis', '$dyspnea', '$tanggal')");

// Telinga
$tajam_dengar_kanan = $_POST['kpn'];
$tajam_dengar_kiri  = $_POST['kpr'];
$liang_kanan        = $_POST['ltn'];
$liang_kiri         = $_POST['ltr'];
$serumen_kanan      = $_POST['srmn'];
$serumen_kiri       = $_POST['srmr'];
$keterangan_telinga = $_POST['ket_telinga'];
// echo "2. $tajam_dengar_kiri - $tajam_dengar_kanan - $liang_kiri - $liang_kanan - $serumen_kiri - $serumen_kanan - $keterangan_telinga<br>";
$promotif_telinga   = mysqli_query($connect, "INSERT INTO `promotif_telinga` (`id`, `tajam_kanan`, `tajam_kiri`, `liang_kanan`, `liang_kiri`, `serumen_kanan`, `serumen_kiri`, `ket_telinga`) VALUES ('$id', '$tajam_dengar_kanan', '$tajam_dengar_kiri', '$liang_kanan', '$liang_kiri', '$serumen_kanan', '$serumen_kiri', '$keterangan_telinga');");

// Mata
$tajam_lihat_kanan  = $_POST['ktpn'];
$tajam_lihat_kiri   = $_POST['ktpr'];
$buta_kanan         = $_POST['btwn'];
$buta_kiri          = $_POST['btwr'];
$juling_kanan       = $_POST['jln'];
$juling_kiri        = $_POST['jlr'];
$kacamata           = $_POST['kacamata'];
$keterangan_mata    = $_POST['ket_mata'];
// echo "3. $tajam_lihat_kanan - $tajam_lihat_kiri - $buta_kanan - $buta_kiri - $juling_kanan - $juling_kiri - $kacamata - $keterangan_mata<br>";
$promotif_mata      = mysqli_query($connect, "INSERT INTO `promotif_mata` (`id`, `tajam_kanan`, `tajam_kiri`, `buta_kanan`, `buta_kiri`, `juling_kanan`, `juling_kiri`, `kacamata`, `ket_mata`) VALUES ('$id', '$tajam_lihat_kanan', '$tajam_lihat_kiri', '$buta_kanan', '$buta_kiri', '$juling_kanan', '$juling_kiri', '$kacamata', '$keterangan_mata');");

// Mulut
$labio_scesis       = $_POST['lbs'];
$lidah_kotor        = $_POST['ldk'];
$gagap              = $_POST['ggp'];
$gondok             = $_POST['gondok'];
$gigi_lubang        = $_POST['gglubang'];
$lympa              = $_POST['lympa'];
$keterangan_mulut   = $_POST['ket_mulut'];
// echo "4. $labio_scesis - $lidah_kotor - $gagap - $gigi_lubang - $lympa - $keterangan_mulut<br>";
$promotif_mulut     = mysqli_query($connect, "INSERT INTO `promotif_mulut` (`id`, `labio_scesis`, `lidah_kotor`, `gagap`, `kelenjar_gondok`, `gigi_lubang`, `lympa`, `ket_mulut`) VALUES ('$id', '$labio_scesis', '$lidah_kotor', '$gagap', '$gondok', '$gigi_lubang', '$lympa', '$keterangan_mulut');");

// Pernafasan, Jantung, Perut
$asma               = $_POST['asma'];
$bronkitis          = $_POST['bronkitis'];
$jantung            = $_POST['jantung'];
$wasir              = $_POST['wasir'];
$hepar              = $_POST['hepar'];
$hypertensi         = $_POST['hypertensi'];
$hernia             = $_POST['hernia'];
$lien               = $_POST['lien'];
$tetis              = $_POST['tetis'];
$penyakit_kelamin   = $_POST['pklmn'];
$keterangan_jantung = $_POST['ket_jantung'];
// echo "5. $asma - $bronkitis - $jantung - $wasir - $hepar - $hypertensi - $hernia - $lien - $tetis - $penyakit_kelamin - $keterangan_jantung<br>";
$promotif_jantung   = mysqli_query($connect, "INSERT INTO `promotif_jantung` (`id`, `asma`, `bronkitis`, `jantung`, `wasir`, `hepar`, `hypertensi`, `hernia`, `lien`, `tetis`, `penyakit_kelamin`, `ket_jantung`) VALUES ('$id', '$asma', '$bronkitis', '$jantung', '$wasir', '$hepar', '$hypertensi', '$hernia', '$lien', '$tetis', '$penyakit_kelamin', '$keterangan_jantung');");

// Kulit
$lepra              = $_POST['lepra'];
$tato               = $_POST['tato'];
$borok              = $_POST['borok'];
$penyakit_kulit     = $_POST['pklt'];
$keterangan_kulit   = $_POST['ket_kulit'];
$catatan            = $_POST['catatan'];
$kesimpulan         = $_POST['kesimpulan'];
// echo "6. $lepra - $tato - $penyakit_kulit - $keterangan_kulit - $catatan - $kesimpulan";
$promotif_kulit     = mysqli_query($connect, "INSERT INTO `promotif_kulit` (`id`, `lepra`, `tato`, `borok`, `penyakit_kulit`, `ket_kulit`, `catatan`, `kesimpulan`) VALUES ('$id', '$lepra', '$tato', '$borok', '$penyakit_kulit', '$keterangan_kulit', '$catatan', '$kesimpulan');");
$riwayat            = mysqli_query($connect, "INSERT INTO `riwayat` (`id`, `nama`, `jenis_periksa`, `tanggal`, `diagnosis`) VALUES (NULL, '$nama', 'Promotif dan Presentif', '$tgl_riwayat', '');");
echo "<script>window.location = '../data-promotif.php';</script>";
}
?>
