<?php
error_reporting(0);
include "koneksi.php";
session_start();
$id        = $_REQUEST['id'];
$no        = $_REQUEST['no'];
if ($id == 1) {
  $id_siswa  = date('dmY').rand(10, 1000);
  $_SESSION['id_siswa'] = $id_siswa;
  $nama       = $_SESSION['nama']      = $_POST['nama'];
  $panggilan  = $_SESSION['panggilan'] = $_POST['panggilan'];
  $jk         = $_SESSION['jk']        = $_POST['jk'];
  $saudara    = $_SESSION['saudara']   = $_POST['saudara'];
  $ke         = $_SESSION['ke']        = $_POST['ke'];
  $dari       = $_SESSION['dari ']     = $_POST['dari'];
  $goldar     = $_SESSION['goldar']    = $_POST['goldar'];
  $rhesus     = $_SESSION['rhesus']    = $_POST['rhesus'];
  $hp1        = $_SESSION['hp1']       = $_POST['hp1'];
  $hp2        = $_SESSION['hp2']       = $_POST['hp2'];
  $pil1       = $_SESSION['pil1']      = $_POST['pil1'];
  $pil2       = $_SESSION['pil2']      = $_POST['pil2'];
  $pil3       = $_SESSION['pil3']      = $_POST['pil3'];
  $jalur1     = $_SESSION['jalur1']    = $_POST['jalur1'];
  $jalur2     = $_SESSION['jalur2']    = $_POST['jalur2'];
  $jurusan    = $_SESSION['jurusan']   = $_POST['jurusan'];
  $riwayat1   = $_SESSION['riwayat1']  = $_POST['riwayat1'];
  $riwayat2   = $_SESSION['riwayat2']  = $_POST['riwayat2'];
  $riwayat3   = $_SESSION['riwayat3']  = $_POST['riwayat3'];
  $ekskul1    = $_SESSION['ekskul1']   = $_POST['ekskul1'];
  $ekskul2    = $_SESSION['ekskul2']   = $_POST['ekskul2'];
  $ekskul3    = $_SESSION['ekskul3']   = $_POST['ekskul3'];
  $ekskul4    = $_SESSION['ekskul4']   = $_POST['ekskul4'];
  $ekskul5    = $_SESSION['ekskul5']   = $_POST['ekskul5'];

  $insert1 = mysqli_query($connect, "INSERT INTO `siswa_baru` (`id`, `nama`, `panggilan`, `jk`, `saudara`, `ke`, `dari`, `goldar`, `rhesus`, `hp1`, `hp2`, `pil1`, `pil2`, `pil3`, `jalur1`, `jalur2`, `jurusan`, `riwayat1`, `riwayat2`, `riwayat3`, `ekskul1`, `ekskul2`, `ekskul3`, `ekskul4`, `ekskul5`) VALUES ('$id_siswa', '$nama', '$panggilan', '$jk', '$saudara', '$ke', '$dari', '$goldar', '$rhesus', '$hp1', '$hp2', '$pil1', '$pil2', '$pil3', '$jalur1', '$jalur2', '$jurusan', '$riwayat1', '$riwayat2', '$riwayat3', '$ekskul1', '$ekskul2', '$ekskul3', '$ekskul4', '$ekskul5');");

  $asma       = $_SESSION['asma']       = $_POST['asma'];
  $tbc        = $_SESSION['tbc']        = $_POST['tbc'];
  $hepatitis  = $_SESSION['hepatitis']  = $_POST['hepatitis'];
  $operasi    = $_SESSION['operasi']    = $_POST['operasi'];
  $operasi_tx = $_SESSION['operasi_tx'] = $_POST['operasi_text'];
  $kecelakaan = $_SESSION['kecelakaan'] = $_POST['kecelakaan'];
  $kecel_text = $_SESSION['kecel_text'] = $_POST['kecelakaan_text'];
  $opname     = $_SESSION['opname']     = $_POST['opname'];
  $opname_tx  = $_SESSION['opname_tx']  = $_POST['opname_text'];
  $maag       = $_SESSION['maag']       = $_POST['maag'];
  $epilepsi   = $_SESSION['epilepsi']   = $_POST['epilepsi'];
  $olahraga   = $_SESSION['olahraga']   = $_POST['olahraga'];
  $buah       = $_SESSION['buah']       = $_POST['buah'];
  $rokok      = $_SESSION['rokok']      = $_POST['rokok'];
  $batang     = $_SESSION['batang']     = $_POST['batang'];


  $tidur      = $_SESSION['tidur']      = $_POST['tidur'];
  $waktu1     = $_SESSION['waktu1']     = $_POST['waktu1'];
  $bangun     = $_SESSION['bangun']     = $_POST['bangun'];
  $waktu2     = $_SESSION['waktu2']     = $_POST['waktu2'];
  $facebook   = $_SESSION['facebook']   = $_POST['facebook'];
  $instagram  = $_SESSION['instagram']  = $_POST['instagram'];
  $bpjs       = $_SESSION['bpjs']       = $_POST['bpjs'];
  $faskes     = $_SESSION['faskes']     = $_POST['faskes'];

  $insert2    = mysqli_query($connect, "INSERT INTO `siswa_baru1` (`id`, `asma`, `tbc`, `hepatitis`, `operasi`, `operasi_text`, `kecelakaan`, `kecelakaan_text`, `opname`, `opname_text`, `maag`, `epilepsi`, `olahraga`, `buah`, `rokok`, `batang`, `tidur`, `waktu1`, `bangun`, `waktu2`, `facebook`, `instagram`, `bpjs`, `faskes`) VALUES ('$id_siswa', '$asma', '$tbc', '$hepatitis', '$operasi', '$operasi_tx', '$kecelakaan', '$kecel_text', '$opname', '$opname_tx', '$maag', '$epilepsi', '$olahraga', '$buah', '$rokok', '$batang', '$tidur', '$waktu1', '$bangun', '$waktu2', '$facebook', '$instagram', '$bpjs', '$faskes')");

  $ayah       = $_SESSION['ayah']       = $_POST['ayah'];
  $tgl_ayah   = $_SESSION['tgl_ayah']   = $_POST['tgl_lahir_ayah'];
  $kerja_ayah = $_SESSION['kerja_ayah'] = $_POST['pekerjaan_ayah'];
  $riw_ayah   = $_SESSION['riw_ayah']   = $_POST['riwayat_ayah'];
  $darah_ayah = $_SESSION['darah_ayah'] = $_POST['goldar_ayah'];
  $ibu        = $_SESSION['ibu']         = $_POST['ibu'];
  $tgl_ibu    = $_SESSION['tgl_ibu']     = $_POST['tgl_lahir_ibu'];
  $kerja_ibu  = $_SESSION['kerja_ibu']   = $_POST['pekerjaan_ibu'];
  $riw_ibu    = $_SESSION['riw_ibu']     = $_POST['riwayat_ibu'];
  $darah_ibu  = $_SESSION['darah_ibu']   = $_POST['goldar_ibu'];
  $penghasil  = $_SESSION['penghasil']   = $_POST['penghasilan'];
  $saudara1   = $_SESSION['saudara1']    = $_POST['nama_saudara_1'];
  $tgl_sdr1   = $_SESSION['tgl_sdr1']    = $_POST['tgl_lahir_saudara_1'];
  $gol_sdr1   = $_SESSION['gol_sdr1']    = $_POST['goldar_saudara_1'];
  $saudara2   = $_SESSION['saudara2']    = $_POST['nama_saudara_2'];
  $tgl_sdr2   = $_SESSION['tgl_sdr2']    = $_POST['tgl_lahir_saudara_2'];
  $gol_sdr2   = $_SESSION['gol_sdr2']    = $_POST['goldar_saudara_2'];
  $saudara3   = $_SESSION['saudara3']    = $_POST['nama_saudara_3'];
  $tgl_sdr3   = $_SESSION['tgl_sdr3']    = $_POST['tgl_lahir_saudara_3'];
  $gol_sdr3   = $_SESSION['gol_sdr3']    = $_POST['goldar_saudara_3'];
  $saudara4   = $_SESSION['saudara4']    = $_POST['nama_saudara_4'];
  $tgl_sdr4   = $_SESSION['tgl_sdr4']    = $_POST['tgl_lahir_saudara_4'];
  $gol_sdr4   = $_SESSION['gol_sdr4']    = $_POST['goldar_saudara_4'];
  $saudara5   = $_SESSION['saudara5']    = $_POST['nama_saudara_5'];
  $tgl_sdr5   = $_SESSION['tgl_sdr5']    = $_POST['tgl_lahir_saudara_5'];
  $gol_sdr5   = $_SESSION['gol_sdr5']    = $_POST['goldar_saudara_5'];

  $insert3    = mysqli_query($connect, "INSERT INTO `siswa_baru2` (`id`, `ayah`, `tgl_ayah`, `kerja_ayah`, `riw_ayah`, `darah_ayah`, `ibu`, `tgl_ibu`, `kerja_ibu`, `riw_ibu`, `darah_ibu`, `penghasil`, `saudara1`, `tgl_saudara1`, `gol_saudara1`, `saudara2`, `tgl_saudara2`, `gol_saudara2`, `saudara3`, `tgl_saudara3`, `gol_saudara3`, `saudara4`, `tgl_saudara4`, `gol_saudara4`, `saudara5`, `tgl_saudara5`, `gol_saudara5`) VALUES ('$id_siswa', '$ayah', '$tgl_ayah', '$kerja_ayah', '$riw_ayah', '$darah_ayah', '$ibu', '$tgl_ibu', '$kerja_ibu', '$riw_ibu', '$darah_ibu', '$penghasil', '$saudara1', '$tgl_sdr1', '$gol_sdr1', '$saudara2', '$tgl_sdr2', '$gol_sdr2', '$saudara3', '$tgl_sdr3', '$gol_sdr3', '$saudara4', '$tgl_sdr4', '$gol_sdr4', '$saudara5', '$tgl_sdr5', '$gol_sdr5');");


  // echo "$nama - $panggilan - $jk - $saudara - $ke - $dari - $goldar - $rhesus <br>";
  // echo "$hp1 - $hp2 - $pil1 - $pil2 - $pil3 - $jalur1 - $jalur2 - $jurusan - $riwayat1 - $riwayat2 - $riwayat3 - $ekskul1 - $ekskul2 - $ekskul3 - $ekskul4 - $ekskul5 <br>";
  // echo "$asma - $tbc - $hepatitis - $operasi - $operasi_tx - $kecelakaan - $kecel_text - $opname - $opname_tx - $maag - $epilepsi - $olahraga - $buah - $rokok - $batang<br>";
  // echo "$tidur - $waktu1 - $bangun - $waktu2 - $facebook - $instagram - $bpjs - $faskes - $ayah - $tgl_ayah - $kerja_ayah - $riw_ayah - $darah_ayah <br>";
  // echo "$ibu - $tgl_ibu - $riw_ibu - $darah_ibu - $penghasil - $saudara1 - $tgl_sdr1 - $gol_sdr1 - $saudara2 - $tgl_sdr2 - $gol_sdr2 - $saudara3 - $tgl_sdr3 - $gol_sdr3 - $saudara4 - $tgl_sdr4 - $gol_sdr4 - $saudara5 - $tgl_sdr5 - $gol_sdr5<br>";
  echo "<script> window.location = '../add-mahasiswa.php?id=2';</script>";
} else if($id == 2) {
  $siswa        = $_SESSION['id_siswa'];
  $bb           = $_SESSION['bb']          = $_POST['bb'];
  $tb           = $_SESSION['tb']          = $_POST['tb'];
  $bmi          = $_SESSION['bmi']         = ($bb/($tb*$tb));
  $tkd          = $_SESSION['tkd']         = $_POST['tkd'];
  $nadi_awal    = $_SESSION['nadi_awal']   = $_POST['nadi_awal'];
  $bw           = $_SESSION['bw']          = $_POST['bw'];
  $st1          = $_SESSION['st1']         = $_POST['st1'];
  $st2          = $_SESSION['st2']         = $_POST['st2'];
  $sp02         = $_SESSION['sp02']        = $_POST['sp02'];
  $visus        = $_SESSION['visus']       = $_POST['visus'];
  $umum         = $_SESSION['umum']        = $_POST['umum'];
  $mata         = $_SESSION['mata']        = $_POST['mata'];
  $ket_mata     = $_SESSION['ket_mata']    = $_POST['ket_mata'];
  $hidung       = $_SESSION['hidung']      = $_POST['hidung'];
  $ket_hidung   = $_SESSION['ket_hidung']  = $_POST['ket_hidung'];
  $mulut_1      = $_SESSION['mulut_1']     = $_POST['mulut_1'];
  $mulut_2      = $_SESSION['mulut_2']     = $_POST['mulut_2'];
  $ket_paring   = $_SESSION['ket_paring']  = $_POST['ket_paring'];
  $ket_tonsi    = $_SESSION['ket_tonsi']   = $_POST['ket_tonsi'];
  $telinga      = $_SESSION['telinga']     = $_POST['telinga'];
  $k_telinga    = $_SESSION['k_telinga']   = $_POST['ket_telinga'];
  $tiroid       = $_SESSION['tiroid']      = $_POST['tiroid'];
  $k_tiroid     = $_SESSION['k_tiroid']    = $_POST['ket_tiroid'];
  $paru         = $_SESSION['paru']        = $_POST['paru'];
  $ket_paru     = $_SESSION['ket_paru']    = $_POST['ket_paru'];
  $wh           = $_SESSION['wh']          = $_POST['wh'];
  $murmur       = $_SESSION['murmur']      = $_POST['murmur'];
  $ket_mur      = $_SESSION['ket_mur']     = $_POST['ket_mur'];
  $galop        = $_SESSION['galop']       = $_POST['galop'];
  $hepar        = $_SESSION['hepar']       = $_POST['hepar'];
  $ket_hepar    = $_SESSION['ket_hepar']   = $_POST['ket_hepar'];
  $lien         = $_SESSION['lien']        = $_POST['lien'];
  $ket_lien     = $_SESSION['ket_lien']    = $_POST['ket_lien'];
  $geni         = $_SESSION['geni']        = $_POST['geni'];
  $ket_geni     = $_SESSION['ket_geni']    = $_POST['ket_geni'];
  $haemorhoid   = $_SESSION['haemorhoid']  = $_POST['haemorhoid'];
  $fistul       = $_SESSION['fistul']      = $_POST['fistul'];
  $abses        = $_SESSION['abses']       = $_POST['abses'];
  $eks_tangan   = $_SESSION['eks_tangan']  = $_POST['eks_tangan'];
  $ket_tangan   = $_SESSION['ket_tangan']  = $_POST['ket_tangan'];
  $kk_refleks   = $_SESSION['kk_refleks']  = $_POST['kaki_refleks'];
  $kk_ederma    = $_SESSION['kk_ederma']   = $_POST['kaki_ederma'];
  $ket_kaki     = $_SESSION['ket_kaki']    = $_POST['ket_kaki'];

  $insert4      = mysqli_query($connect, "INSERT INTO `siswa_baru3` (`id`, `bb`, `tb`, `bmi`, `tkd`, `nadi_awal`, `bw`, `st1`, `st2`, `sp02`, `visus`, `umum`, `mata`, `ket_mata`, `hidung`, `ket_hidung`, `mulut_1`, `mulut_2`, `ket_paring`, `ket_tonsi`, `telinga`, `k_telinga`, `tiroid`, `k_tiroid`, `paru`, `ket_paru`, `wh`, `murmur`, `ket_mur`, `galop`, `hepar`, `ket_hepar`, `lien`, `ket_lien`, `geni`, `ket_geni`, `haemorhoid`, `fistul`, `abses`, `eks_tangan`, `ket_tangan`, `kk_refleks`, `kk_ederma`, `ket_kaki`) VALUES ('$siswa', '$bb', '$tb', '$bmi', '$tkd', '$nadi_awal', '$bw', '$st1', '$st2', '$sp02', '$visus', '$umum', '$mata', '$ket_mata', '$hidung', '$ket_hidung', '$mulut_1', '$mulut_2', '$ket_paring', '$ket_tonsi', '$telinga', '$k_telinga', '$tiroid', '$k_tiroid', '$paru', '$ket_paru', '$wh', '$murmur', '$ket_mur', '$galop', '$hepar', '$ket_hepar', '$lien', '$ket_lien', '$geni', '$ket_geni', '$haemorhoid', '$fistul', '$abses', '$eks_tangan', '$ket_tangan', '$kk_refleks', '$kk_ederma', '$ket_kaki')");

  // echo "$bb - $tb - $bmi - $tkd - $nadi_awal - $bw - $st1 - $st2 - $sp02 - $visus - $umum <br>";
  // echo "$mata | $ket_mata | $hidung | $ket_hidung | $mulut_1 | $mulut_2 - $ket_paring | $ket_tonsi | $telinga | $k_telinga | $tiroid | $k_tiroid | $paru | $ket_paru <br>";
  // echo "$wh | $murmur | $ket_mur | $galop | $hepar | $ket_hepar | $lien | $ket_lien | $geni | $ket_geni | $haemorhoid | $fistul | $abses | $eks_tangan | $ket_tangan | $kk_refleks | $kk_ederma | $ket_kaki<br>";
  echo "<script> window.location = '../add-mahasiswa.php?id=3';</script>";
} else if($id == 3) {
  $siswa =   $_SESSION['id_siswa'];
  $a1    =   $_SESSION['a1']   =  $_POST['a1'];
  $a2    =   $_SESSION['a2']   =  $_POST['a2'];
  $a3    =   $_SESSION['a3']   =  $_POST['a3'];
  $a4    =   $_SESSION['a4']   =  $_POST['a4'];
  $a5    =   $_SESSION['a5']   =  $_POST['a5'];
  $b1    =   $_SESSION['b1']   =  $_POST['b1'];
  $b2    =   $_SESSION['b2']   =  $_POST['b2'];
  $b3    =   $_SESSION['b3']   =  $_POST['b3'];
  $b4    =   $_SESSION['b4']   =  $_POST['b4'];
  $c1    =   $_SESSION['c1']   =  $_POST['c1'];
  $c2    =   $_SESSION['c2']   =  $_POST['c2'];
  $c3    =   $_SESSION['c3']   =  $_POST['c3'];
  $c4    =   $_SESSION['c4']   =  $_POST['c4'];
  $c5    =   $_SESSION['c5']   =  $_POST['c5'];
  $insert5 = mysqli_query($connect, "INSERT INTO `siswa_baru4` (`id`, `a1`, `a2`, `a3`, `a4`, `a5`, `b1`, `b2`, `b3`, `b4`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES ('$siswa', '$a1', '$a2', '$a3', '$a4', '$a5', '$b1', '$b2', '$b3', '$b4', '$c1', '$c2', '$c3', '$c4', '$c5')");

  // echo "$a1 - $a2 - $a3 - $a4 - $a5 - $b1 - $b2 - $b3 - $c1 - $c2 - $c3 - $c4 - $c5";
  echo "<script> window.location = '../add-mahasiswa.php?id=4';</script>";
} else if($id == 4) {
  $siswa   = $_SESSION['id_siswa'];
  $agama   =   $_SESSION['agama']   = $_POST['agama'];
  $sholat  =   $_SESSION['sholat']  = $_POST['sholat'];
  $quran   =   $_SESSION['quran']   = $_POST['quran'];
  $sholat1 =   $_SESSION['sholat1'] = $_POST['sholat1'];
  $quran1  =   $_SESSION['quran1']  = $_POST['quran1'];
  $sholat2 =   $_SESSION['sholat2'] = $_POST['sholat2'];
  $quran2  =   $_SESSION['quran2']  = $_POST['quran2'];
  $sholat3 =   $_SESSION['sholat3']  = $_POST['sholat3'];
  $quran3  =   $_SESSION['quran3']  = $_POST['quran3'];
  $insert6 = mysqli_query($connect, "INSERT INTO `siswa_baru6` (`id`, `agama`, `sholat`, `quran`, `sholat1`, `quran1`, `sholat2`, `quran2`, `sholat3`, `quran3`, `m`, `n`, `p`, `q`, `l`, `b`, `o`, `gr`) VALUES ('$siswa', '$agama', '$sholat', '$quran', '$sholat1', '$quran1', '$sholat2', '$quran2', '$sholat3', '$quran3', '', '', '', '', '', '', '', '');");
  // echo "$agama - $sholat - $quran <br> $sholat1 - $quran1 <br>$sholat2 - $quran2 <br>$sholat3 - $quran3 <br> ";
  echo "<script> window.location = '../add-mahasiswa.php?id=5';</script>";
} else if ($id == 5) {
  $siswa = $_SESSION['id_siswa'];

  // L
  $l1   =  $_POST['l1'];
  $l2   =  $_POST['l2'];
  $l3   =  $_POST['l3'];
  $l4   =  $_POST['l4'];
  $l5   =  $_POST['l5'];
  $l6   =  $_POST['l6'];
  $l7   =  $_POST['l7'];
  $l8   =  $_POST['l8'];
  $l9   =  $_POST['l9'];
  $l10   =  $_POST['l10'];

  // B
  $b1   =  $_POST['b1'];
  $b2   =  $_POST['b2'];
  $b3   =  $_POST['b3'];
  $b4   =  $_POST['b4'];
  $b5   =  $_POST['b5'];
  $b6   =  $_POST['b6'];
  $b7   =  $_POST['b7'];
  $b8   =  $_POST['b8'];
  $b9   =  $_POST['b9'];
  $b10   =  $_POST['b10'];

  // O
  $o1   =  $_POST['o1'];
  $o2   =  $_POST['o2'];
  $o3   =  $_POST['o3'];
  $o4   =  $_POST['o4'];
  $o5   =  $_POST['o5'];
  $o6   =  $_POST['o6'];
  $o7   =  $_POST['o7'];
  $o8   =  $_POST['o8'];
  $o9   =  $_POST['o9'];
  $o10   =  $_POST['o10'];

  // GR
  $gr1  =  $_POST['gr1'];
  $gr2  =  $_POST['gr2'];
  $gr3  =  $_POST['gr3'];
  $gr4  =  $_POST['gr4'];
  $gr5  =  $_POST['gr5'];
  $gr6  =  $_POST['gr6'];
  $gr7  =  $_POST['gr7'];
  $gr8  =  $_POST['gr8'];
  $gr9  =  $_POST['gr9'];
  $gr10  =  $_POST['gr10'];

  $m   =   $_SESSION['m']   = $_POST['m'];
  $n   =   $_SESSION['n']   = $_POST['n'];
  $p   =   $_SESSION['p']   = $_POST['p'];
  $q   =   $_SESSION['q']   = $_POST['q'];

  $li   = [$l1, $l2, $l3, $l4, $l5, $l6, $l7, $l8, $l9, $l10 ];
  $bi   = [$b1, $b2, $b3, $b4, $b5, $b6, $b7, $b8, $b9, $b10 ];
  $oi   = [$o1, $o2, $o3, $o4, $o5, $o6, $o7, $o8, $o9, $o10 ];
  $gri  = [$gr1, $gr2, $gr3, $gr4, $gr5, $gr6, $gr7, $gr8, $gr9, $gr10 ];

  $l    = json_encode($li);
  $b    = json_encode($bi);
  $o    = json_encode($oi);
  $gr   = json_encode($gri);

  $update = mysqli_query($connect, "UPDATE `siswa_baru6` SET `m` = '$m', `n` = '$n', `p` = '$p', `q` = '$q', `l` = '$l', `b` = '$b', `o` = '$o', `gr` = '$gr' WHERE `siswa_baru6`.`id` = '$siswa';");
  // echo "$m - $n - $p - $q";

  echo "<script> window.location = '../data-mahasiswa-baru.php';</script>";
} else if ($id == "delete") {
  $hapus1 = mysqli_query($connect, "DELETE FROM `siswa_baru` WHERE `siswa_baru`.`id` ='$no'");
  $hapus2 = mysqli_query($connect, "DELETE FROM `siswa_baru1` WHERE `siswa_baru1`.`id` ='$no'");
  $hapus3 = mysqli_query($connect, "DELETE FROM `siswa_baru2` WHERE `siswa_baru2`.`id` ='$no'");
  $hapus4 = mysqli_query($connect, "DELETE FROM `siswa_baru3` WHERE `siswa_baru3`.`id` ='$no'");
  $hapus5 = mysqli_query($connect, "DELETE FROM `siswa_baru4` WHERE `siswa_baru4`.`id` ='$no'");
  $hapus6 = mysqli_query($connect, "DELETE FROM `siswa_baru6` WHERE `siswa_baru6`.`id` ='$no'");
  echo "<script> window.location = '../data-mahasiswa-baru.php';</script>";
}

























 ?>
