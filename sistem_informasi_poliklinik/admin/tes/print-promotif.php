<?php
session_start();
include "proses/koneksi.php";
 ?>
<html>
<head>
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body style="font-size:10px" onload="window.print()">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content container-fluid">
      <div class="box box-warning">
        <div class="box-body">
          <section class="content-header" style="margin-top:20px;margin-bottom:20px;">
            <table>
              <tr>
                <td width="10%">
                  <center><img src="logo.png" alt="" style="width:60%"></center>
                  </td>
                <td>
                  <h3>
                    Detail Pemeriksaan Promotif dan Preventif<br>
                    <small>Informasi Pelayanan Medis</small>
                  </h3>
                </td>
              </tr>
            </table>
          </section>
          <?php
          include "proses/koneksi.php";
          $nomor       = 1;
          $data        = $_REQUEST['data'];
          $id          = $_REQUEST['id'];
          $pasien      = mysqli_query($connect, "SELECT * FROM `pasien` WHERE `id` = '$data' ");
          while ($data = mysqli_fetch_row($pasien)) {
            $rm        = $data[1];
            $nama      = $data[2];
            $nrp       = $data[3];
            $ktp       = $data[4];
            $tempat    = $data[5];
            $tgl       = $data[6];
            $usia      = $data[7];
            $jk        = $data[8];
            $kerja     = $data[9];
            $detail    = $data[10];
            $agama     = $data[11];
            $alamat    = $data[12];
            $tlp       = $data[13];
            $status    = $data[14];
            $bb        = $data[15];
            $tb        = $data[16];
            $goldar    = $data[17];
            $rhesus    = $data[18];
            $alergi    = $data[21];
            $promotif    = mysqli_query($connect, "SELECT * FROM `promotif` WHERE `id` = '$id' ");
            while ($tif  = mysqli_fetch_row($promotif)) {

            $tif_telinga    = mysqli_query($connect, "SELECT * FROM `promotif_telinga` WHERE `id` = '$id' ");
            while ($telinga = mysqli_fetch_row($tif_telinga)) {

            $tif_mata    = mysqli_query($connect, "SELECT * FROM `promotif_mata` WHERE `id` = '$id' ");
            while ($mata  = mysqli_fetch_row($tif_mata)) {

            $tif_mulut    = mysqli_query($connect, "SELECT * FROM `promotif_mulut` WHERE `id` = '$id' ");
            while ($mulut  = mysqli_fetch_row($tif_mulut)) {

            $tif_kulit    = mysqli_query($connect, "SELECT * FROM `promotif_kulit` WHERE `id` = '$id' ");
            while ($kulit  = mysqli_fetch_row($tif_kulit)) {

            $tif_jantung    = mysqli_query($connect, "SELECT * FROM `promotif_jantung` WHERE `id` = '$id' ");
            while ($jantung  = mysqli_fetch_row($tif_jantung)) {

            $tif_hiper    = mysqli_query($connect, "SELECT * FROM `promotif_hiper` WHERE `id_promotif` = '$id' ");
            while ($hiper  = mysqli_fetch_row($tif_hiper)) {
            ?>
            <!-- text input -->
              <input type="hidden" name="nrp" value="<?php echo $nrp; ?>">
            <div class="form-group">
              <label><h4>Identitas</h4></label>
              <hr style="margin-top: 0;margin-bottom: 10px;">
              <table width="100%" style="font-size:10px">
                <tr>
                  <td width="150px"><b>Nama</b></td>
                  <td><?php echo $nama; ?></td>
                  <td><b>No Reg</b></td>
                  <td><?php echo $rm ?></td>
                  <td><b>Jenis Kelamin</b></td>
                  <td><?php echo $jk; ?></td>
                </tr>
                <tr>
                  <td><b>Tempat, Tanggal Lahir</b></td>
                  <td><?php echo "$tempat, $tgl"; ?></td>
                  <td><b>Status</b></td>
                  <td><?php echo $status; ?></td>
                  <td><b>Telepon</b></td>
                  <td><?php echo $tlp; ?></td>
                </tr>
                <tr>
                  <td><b>Alamat</b></td>
                  <td colspan="2"><?php echo $alamat; ?></td>
                </tr>
                <tr>
                  <td><b>Alergi</b></td>
                  <td><?php echo $alergi; ?></td>
                </tr>
              </table>

              <table width="100%" style="font-size:10px">
                <tr>
                  <td colspan="2"><b>Keadaan Umum</b></td>
                </tr>
                <tr>
                  <td width="150px">Kebersihan Umum</td>
                  <td><?php echo $tif[2]; ?></td>
                </tr>
              </table>
              <hr style="margin-top:5px">
            </div>

            <div class="form-group">
              <font style="font-size:18px">Pemeriksaan Hiperkolesterol dan Hiperurisemia</font><br>
            </div>
            <div class="form-group">
              <div class="row container">
                <table width="100%" style="font-size:10px">
                  <tr>
                    <td width="10%"><b>Hiperkolesterol<b></td>
                    <td style="text-align:left">: <?php echo $hiper[1]; ?> mg/dl</td>
                    <td width="10%"><label>Keterangan</label></td>
                    <td style="text-align:left">: <?php echo $hiper[5]; ?></td>
                    <td  width="20%"></td>
                    <td width="10%"><label>Hiperurisemia</label></td>
                    <td style="text-align:left">: <?php echo $hiper[2]; ?> mg/dl</td>
                    <td width="10%"><label>Keterangan</label></td>
                    <td style="text-align:left">: <?php echo $hiper[6]; ?></td>
                  </tr>
                </table>
              </div>
            </div>
              <div class="row container" style="margin-top:20px">
                <div class="col-md-12">
                  <div class="row">
                    <table width="100%" style="font-size:10px">
                      <tr>
                        <td width="25%">
                          <label>Gula Darah</label><br>
                        </td>
                        <td width="10%"><label>Indikasi</label></td>
                        <td>: <?php echo $hiper[4]; ?></td>
                      </tr>
                      <tr>
                        <td>
                          <?php if ($hiper[3] == 1) { ?>
                            <input type="checkbox" style="transform: scale(0.8);" checked id="a" onchange="myFunction2()" name="guldar" value="1"> Gula Darah Sebelum Makan <br>
                          <?php } else { ?>
                            <input type="checkbox" style="transform: scale(0.8);" id="a" onchange="myFunction2()" name="guldar" value="1"> Gula Darah Sebelum Makan <br>
                          <?php } ?>

                          <?php if ($hiper[3] == 2) { ?>
                            <input checked type="checkbox" style="transform: scale(0.8);" id="b" onchange="myFunction3()" name="guldar" value="2"> Setelah 8 jam puasa<br>
                          <?php } else { ?>
                            <input type="checkbox" style="transform: scale(0.8);" id="b" onchange="myFunction3()" name="guldar" value="2"> Setelah 8 jam puasa<br>
                          <?php } ?>

                          <?php if ($hiper[3] == 3) { ?>
                            <input checked type="checkbox" style="transform: scale(0.8);" id="c" onchange="myFunction4()" name="guldar" value="3"> 2 jam setelah makan<br>
                          <?php } else { ?>
                            <input type="checkbox" style="transform: scale(0.8);" id="c" onchange="myFunction4()" name="guldar" value="3"> 2 jam setelah makan<br>
                          <?php } ?>

                          <?php if ($hiper[3] == 4) { ?>
                            <input checked type="checkbox" style="transform: scale(0.8);" id="d" onchange="myFunction5()" name="guldar" value="4"> Menjelang Tidur<br>
                          <?php } else { ?>
                            <input type="checkbox" style="transform: scale(0.8);" id="d" onchange="myFunction5()" name="guldar" value="4"> Menjelang Tidur<br>
                          <?php } ?>
                        </td>
                        <td style="vertical-align: top;"><label>Keterangan</label></td>
                        <td style="vertical-align: top;">: <?php echo $hiper[7]; ?></td>
                      </tr>
                    </table>
                    <hr>
                  </div>
                </div>
                </div>
            <div class="row container">
              <table width="100%" style="font-size:10px">
                <tr>
                  <td width="150px"><b>Tinggi Badan</b></td>
                  <td><?php echo $tb; ?> cm</td>
                  <td><b>Berat Badan</b></td>
                  <td><?php echo $bb; ?> kg</td>
                  <td><b>BMI</b></td>
                  <td><?php echo $tif[3]; ?></td>
                </tr>
                <tr>
                  <td><b>Tekanan Darah</b></td>
                  <td><?php echo $tif[4]; ?> mmHg</td>
                  <td><b>Nadi</b></td>
                  <td><?php echo $tif[5]; ?> Kali/menit</td>
                  <td><b>Golongan Darah</b></td>
                  <td><?php echo "$goldar"; ?></td>
                </tr>
                <tr>
                  <td><b>Respirasi</b></td>
                  <td><?php echo $tif[6]; ?> Kali/menit</td>
                  <td><b>Suhu</b></td>
                  <td><?php echo $tif[7]; ?> <sup>o</sup>C</td>
                  <td><b>Rhesus</b></td>
                  <td><?php echo $rhesus; ?></td>
                </tr>
                <tr>
                  <td><b>Cacat Anggota Badan</b></td>
                  <td>
                    <?php if ($tif[8] == 0) { ?>
                    <font>  Tidak</font>
                    <?php } else { ?>
                    <font> Ya </font>
                    <?php } ?></td>
                  <td> <b>Bagian Tubuh yang Cacat</b></td>
                  <td><?php echo $tif[9]; ?></td>
                  <td></td>
                  <td></td>
                </div>
                </tr>
                <tr>
                  <td><b>Conjuctiva</b></td>
                  <td>
                    <?php if ($tif[10] == 0) { ?>
                      <div>
                        <font>  Tidak</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Ya </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td><b>Sclera</b></td>
                  <td>
                    <?php if ($tif[11] == 0) { ?>
                      <div>
                        <font>  Tidak</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Pucat </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td><b>Cyanosis</b></td>
                  <td>
                    <?php if ($tif[12] == 0) { ?>
                      <div>
                        <font>  Tidak</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Ya </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td><b>Dyspnea</b></td>
                  <td>
                    <?php if ($tif[13] == 0) { ?>
                      <div>
                        <font>  Tidak</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Ya </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            <hr style="margin-top:5px">

            <h4>Telinga</h4>
            <div class="row container" style="margin-top:10px;">
              <table width="100%" style="font-size:10px">
                <tr>
                  <td width="150px"><b>Ketajaman Pendengaran</b></td>
                  <td><b>Kanan</b></td>
                  <td>
                    <?php if ($telinga[1] == 0) { ?>
                      <div>
                        <font>  Tidak Normal</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Normal </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td><b>Kiri</b></td>
                  <td>
                    <?php if ($telinga[2] == 0) { ?>
                      <div>
                        <font>  Tidak Normal</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Normal </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td><b>Liang Telinga</b></td>
                  <td><b>Kanan</b></td>
                  <td>
                    <?php if ($telinga[3] == 0) { ?>
                      <div>
                        <font>  Tidak Normal</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Normal </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td><b>Kiri</b></td>
                  <td>
                    <?php if ($telinga[4] == 0) { ?>
                      <div>
                        <font>  Tidak Normal</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Normal </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td><b>Serumen</b></td>
                  <td><b>Kanan</b></td>
                  <td>
                    <?php if ($telinga[5] == 0) { ?>
                      <div>
                        <font>  Tidak Normal</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Normal </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td><b>Kiri</b></td>
                  <td>
                    <?php if ($telinga[6] == 0) { ?>
                      <div>
                        <font>  Tidak Normal</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Normal </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="8"><b>Keterangan</b></td>
                </tr>
                <tr>
                  <td colspan="8"><?php echo $telinga[7]; ?></td>
                </tr>
              </table>
            </div>
            <hr style="margin-top:5px">

            <h4>Mata</h4>
            <div class="row container" style="margin-top:10px;">
              <table width="100%" style="font-size:10px">
                <tr>
                  <td width="150px;"><b>Ketajaman Penglihatan</b></td>
                  <td><b>Kanan</b></td>
                  <td><?php echo $mata[1]; ?></td>
                  <td><b>Kiri</b></td>
                  <td><?php echo $mata[2]; ?></td>
                  <td></td>
                </tr>
                <tr>
                  <td><b>Ketajaman Penglihatan</b></td>
                  <td><b>Buta Warna</b></td>
                  <td><b>Kanan</b></td>
                  <td>
                    <?php if ($mata[3] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                <?php } ?>
                  </td>
                  <td><b>Kiri</b></td>
                  <td>
                    <?php if ($mata[4] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td><b>Radang / Juling</b></td>
                  <td><b>Kanan</b></td>
                  <td>
                    <?php if ($mata[5] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td><b>Kiri</b></td>
                  <td>
                    <?php if ($mata[6] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="6"><b>Keterangan</b></td>
                </tr>
                <tr>
                  <td colspan="6"><?php echo $mata[8]; ?></td>
                </tr>
              </table>
              <hr style="margin-top:5px">

            <h4>Mulut</h4>
            <div class="row container" style="margin-top:10px;">
              <table width="100%" style="font-size:10px">
                <tr>
                  <td><b>Gangguan Labio Scesis</b></td>
                  <td>
                    <?php if ($mulut[1] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td><b>Lidah Kotor</b></td>
                  <td>
                    <?php if ($mulut[2] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                </div>
                <?php } ?>
                  </td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td><b>Gangguan Bicara/Gagap</b></td>
                  <td>
                    <?php if ($mulut[3] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td><b>Kelenjar Gondok</b></td>
                  <td>
                    <?php if ($mulut[4] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td><b>Gigi Lubang</b></td>
                  <td>
                    <?php if ($mulut[5] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td><b>Kelenjar Lympa</b></td>
                  <td>
                    <?php if ($mulut[6] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="6"><b>Keterangan</b></td>
                </tr>
                <tr>
                  <td colspan="6"><?php echo $mulut[7]; ?></td>
                </tr>
              </table>
            <hr style="margin-top:5px">

            <h4>Pernafasan, Jantung, Perut, Anus dan Kelamin</h4>
            <div class="row container" style="margin-top:10px;">
              <table width="100%" style="font-size:10px">
                <tr>
                  <td><b>Asthma Bronchiale</b></td>
                  <td>
                    <?php if ($jantung[1] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td><b>Brochitis Kronis</b></td>
                  <td>
                    <?php if ($jantung[2] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td><b>Kelainan Jantung</b></td>
                  <td>
                    <?php if ($jantung[3] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td><b>Haemorhoid/Wasir</b></td>
                  <td>
                    <?php if ($jantung[4] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td><b>Hepar</b></td>
                  <td>
                    <?php if ($jantung[5] == 0) { ?>
                      <div>
                        <font>  Tidak Normal</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Normal </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td><b>Hypertensi</b></td>
                  <td>
                    <?php if ($jantung[6] == 0) { ?>
                      <div>
                        <font>  Tidak Normal</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Normal </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td><b>Hernia</b></td>
                  <td>
                    <?php if ($jantung[7] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td><b>Lien</b></td>
                  <td>
                    <?php if ($jantung[8] == 0) { ?>
                      <div>
                        <font>  Tidak Normal</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Normal </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td><b>Hydrococel Tetis</b></td>
                  <td>
                    <?php if ($jantung[9] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td><b>Penyakit Kelamin</b></td>
                  <td>
                    <?php if ($jantung[10] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="6"><b>Keterangan</b></td>
                </tr>
                <tr>
                  <td colspan="6"> <?php echo $jantung[11]; ?></td>
                </tr>
              </table>

            <hr style="margin-top:5px">
            <h4>Kulit</h4>
            <div class="row container" style="margin-top:10px;">
              <table width="100%" style="font-size:10px">
                <tr>
                  <td><b>bercak Putih/Lepra</b></td>
                  <td>
                    <?php if ($kulit[1] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td><b>Tato</b></td>
                  <td>
                    <?php if ($kulit[2] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td><b>Borok/Ulcus</b></td>
                  <td>
                    <?php if ($kulit[3] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td><b>Penyakit Kulit</b></td>
                  <td>
                    <?php if ($kulit[4] == 0) { ?>
                      <div>
                        <font>  Negatif</font>
                      </div>
                    <?php } else { ?>
                      <div style="">
                        <font> Positif </font>
                      </div>
                  <?php } ?>
                  </td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="6"><b>Keterangan</b></td>
                </tr>
                <tr>
                  <td colspan="6"><?php echo $kulit[5]; ?></td>
                </tr>
              </table>
            <hr style="margin-top:5px">
            <div class="row">
              <div class="col-sm-12">
              <b>Catatan : (Anamnesa) </b>
              </div>
              <div class="col-sm-12">
                <?php echo $kulit[6]; ?>
              </div>
            </div>
            <hr style="margin-top:5px">
            <div class="row">
              <div class="col-sm-12">
              <b>Kesimpulan :</b>
              </div>
              <div class="col-sm-12">
                <?php echo $kulit[7]; ?>
              </div>
            </div>
          </form>
        </div>
      <?php }}}}}}}} ?>
        <!-- /.box-body -->
      </div>


    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
</body>
</html>
