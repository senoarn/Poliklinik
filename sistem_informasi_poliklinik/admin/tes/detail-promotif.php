<?php
include "proses/koneksi.php";
include "header.php";
$id = $_REQUEST['id'];
$no = $_REQUEST['no'];
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Detail Pemeriksaan Promotif dan Preventif
      <small>Informasi Pelayanan Medis</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <div class="box box-warning">
      <?php if($id == "edit") {
        $result = mysqli_query($connect, "SELECT * FROM product WHERE id = '$no'");
        while($product = mysqli_fetch_object($result)) {

          ?>
      <div class="box-header with-border">
        <h3 class="box-title"> ANAMNESA : <i> Anamnesis</i></h3>
      </div>
      <!-- /.box-header -->
        <div class="box-body">
            <!-- text input -->
            <form action="proses/item.php?id=edit" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="form-control">Upload Foto Produk
              <input type="file" style="display:none" "Nomor PO" name="file1">
              <input type="hidden" name="no" value="<?php echo $product->id; ?>">
              </label>
            </div>

            <div class="form-group">
              <label>Nama Produk</label>
              <input type="text" name="item" value="<?php echo $product->name; ?>"  class="form-control" "F4" required>
            </div>

            <div class="form-group">
              <label>Harga</label>
              <input type="text" name="harga" value="<?php echo $product->price; ?>"  class="form-control" "105.000" required>
            </div>

            <div class="form-group">
              <label>Stok</label>
              <input type="text" name="stok" value="<?php echo $product->quantity; ?>"  class="form-control" "5" required>
            </div>

            <div class="form-group" style="margin-top:20px">
              <input type="submit" class="btn btn-primary add-one" value="Simpan">
            </div>
          </form>
        </div>
      <?php }} else { ?>
      <div class="box-body" style="padding:20px;">
        <?php
        include "proses/koneksi.php";
        $nomor       = 1;
        $data        = $_REQUEST['data'];
        $data1       = $_REQUEST['data'];
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
            echo "tes";
          ?>
          <!-- text input -->
            <input type="hidden" name="nrp" value="<?php echo $nrp; ?>">
          <div class="form-group">
            <label><h4>Identitas</h4></label>
            <hr style="margin-top: 0;margin-bottom: 10px;">
            <div class="row">
              <div style="margin-top:5px;" class="col-md-2">
                <b>Nama</b>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <?php echo $nama; ?>
              </div>
              <div style="margin-top:5px;" class="col-md-1">
                <b>No Reg</b>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <?php echo $rm ?>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <b>Jenis Kelamin</b>
              </div>
              <div style="margin-top:5px;" class="col-md-3">
                <?php echo $jk; ?>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <b>Tempat, Tanggal Lahir</b>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <?php echo "$tempat, $tgl"; ?>
              </div>
              <div style="margin-top:5px;" class="col-md-1">
                <b>Status</b>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <?php echo $status; ?>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <b>Telepon</b>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <?php echo $tlp; ?>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <b>Alamat</b>
              </div>
              <div style="margin-top:5px;" class="col-md-5">
                <?php echo $alamat; ?>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <b>Alergi</b>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <?php echo $alergi; ?>
              </div>
              <div style="margin-top:5px;" class="col-md-12">
                <b>Keadaan Umum</b>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                Kebersihan Umum
              </div>
              <div style="margin-top:5px;" class="col-md-10">
                <textarea class="form-control" name="kb_umum" value=""><?php echo $tif[2]; ?> </textarea>
              </div>
            </div>
            <hr>
          </div>
          <div class="form-group">
            <font style="font-size:18px">Pemeriksaan Hiperkolesterol dan Hiperurisemia</font><br>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <label>Hiperkolesterol</label><br>
                    <input name="Hiperkolesterol" value="<?php echo $hiper[1]; ?>" onchange="hiperkolesterol()" id="Hiperkolesterol" class="form-control" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label>Keterangan</label><br>
                    <p id="text_Hiperkolesterol"><?php echo $hiper[5]; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <label>Hiperurisemia</label><br>
                    <input name="hiperurisemia" value="<?php echo $hiper[2]; ?>" onchange="myFunction()" id="Hiperurisemia" class="form-control" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label>Keterangan</label><br>
                    <p id="text_Hiperurisemia"><?php echo $hiper[6]; ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="margin-top:20px">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-3">
                    <label>Gula Darah</label><br>
                    <?php if ($hiper[3] == 1) { ?>
                      <input type="radio" checked id="a" onchange="myFunction2()" name="guldar" value="1"> Gula Darah Sebelum Makan <br>
                    <?php } else { ?>
                      <input type="radio" id="a" onchange="myFunction2()" name="guldar" value="1"> Gula Darah Sebelum Makan <br>
                    <?php } ?>

                    <?php if ($hiper[3] == 2) { ?>
                      <input checked type="radio" id="b" onchange="myFunction3()" name="guldar" value="2"> Setelah 8 jam puasa<br>
                    <?php } else { ?>
                      <input type="radio" id="b" onchange="myFunction3()" name="guldar" value="2"> Setelah 8 jam puasa<br>
                    <?php } ?>

                    <?php if ($hiper[3] == 3) { ?>
                      <input checked type="radio" id="c" onchange="myFunction4()" name="guldar" value="3"> 2 jam setelah makan<br>
                    <?php } else { ?>
                      <input type="radio" id="c" onchange="myFunction4()" name="guldar" value="3"> 2 jam setelah makan<br>
                    <?php } ?>

                    <?php if ($hiper[3] == 4) { ?>
                      <input checked type="radio" id="d" onchange="myFunction5()" name="guldar" value="4"> Menjelang Tidur<br>
                    <?php } else { ?>
                      <input type="radio" id="d" onchange="myFunction5()" name="guldar" value="4"> Menjelang Tidur<br>
                    <?php } ?>
                  </div>
                  <div class="col-md-3">
                    <label>Indikasi</label><br>
                    <input type="text" value="<?php echo $hiper[4]; ?>" id='indikasi' onchange="myFunction2()" name="indikasi" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label>Keterangan</label><br>
                    <p id="demo_guldar"><?php echo $hiper[7]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-2">
              <b>Tinggi Badan</b>
            </div>
            <div class="col-md-1">
              <?php echo $tb; ?> cm
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-2">
              <b>Berat Badan</b>
            </div>
            <div class="col-md-1">
              <?php echo $bb; ?> kg
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-2">
              <b>BMI</b>
            </div>
            <div class="col-md-1">
              <input type="text" class="form-control" name="bmi" value="<?php echo $tif[3]; ?>">
            </div>
            <div class="col-md-1">
            </div>
          </div>

          <div class="row" style="margin-top:20px;">
            <div class="col-md-2">
              <b>Tekanan Darah</b>
            </div>
            <div class="col-md-2">
              <input type="text" class="form-control" style="width:70px;display: inline;" name="tkd" value="<?php echo $tif[4]; ?>"> mmHg
            </div>

            <div class="col-md-2">
              <b>Nadi</b>
            </div>
            <div class="col-md-2">
              <input type="text" class="form-control" style="width:70px;display: inline;"  name="nadi" value="<?php echo $tif[5]; ?>"> Kali/menit
            </div>

            <div class="col-md-2">
              <b>Golongan Darah</b>
            </div>
            <div class="col-md-1">
              <?php echo "$goldar"; ?>
            </div>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-2">
              <b>Respirasi</b>
            </div>
            <div class="col-md-2">
              <input type="text" class="form-control" style="width:70px;display: inline;" name="respirasi" value="<?php echo $tif[6]; ?>"> Kali/menit
            </div>

            <div class="col-md-2">
              <b>Suhu</b>
            </div>
            <div class="col-md-2">
              <input type="text" class="form-control" style="width:70px;display: inline;"  name="suhu" value="<?php echo $tif[7]; ?>"> <sup>o</sup>C
            </div>

            <div class="col-md-2">
              <b>Rhesus</b>
            </div>
            <div class="col-md-1">
              <?php echo $rhesus; ?>
            </div>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-2">
              <b>Cacat Anggota Badan</b>
            </div>
            <?php if ($tif[8] == 0) { ?>
              <div class="col-md-1" style="">
                <input type="radio" name="cab" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Ya </font>
              </div>
              <div class="col-md-1">
                <input type="radio" name="cab" value="0" checked><font style="position: absolute;top: 2px;left: 45px;">  Tidak</font>
              </div>
            <?php } else { ?>
              <div class="col-md-1" style="">
                <input type="radio" name="cab" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Ya </font>
              </div>
              <div class="col-md-1">
                <input type="radio" name="cab" value="0"><font style="position: absolute;top: 2px;left: 45px;">  Tidak</font>
              </div>
            <?php } ?>


            <div class="col-md-2">
              <b>Bagian Tubuh yang Cacat</b>
            </div>
            <div class="col-md-5">
              <input type="text" class="form-control" style="width:100%;display: inline;"  name="btc" value="<?php echo $tif[9]; ?>">
            </div>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-2">
              <b>Conjuctiva</b>
            </div>
            <?php if ($tif[10] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="con" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Pucat </font>
            </div>
            <div class="col-md-1">
              <input type="radio" name="con" value="0" checked><font style="position: absolute;top: 2px;left: 45px;">  Tidak</font>
            </div>
          <?php } else {?>
            <div class="col-md-1" style="">
              <input type="radio" name="con" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Pucat </font>
            </div>
            <div class="col-md-1">
              <input type="radio" name="con" value="0"><font style="position: absolute;top: 2px;left: 45px;">  Tidak</font>
            </div>
          <?php } ?>


            <div class="col-md-2">
              <b>Sclera</b>
            </div>
            <?php if ($tif[11] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="sec" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Pucat </font>
            </div>
            <div class="col-md-4">
              <input type="radio" name="sec" value="0" checked><font style="position: absolute;top: 2px;left: 45px;">  Tidak</font>
            </div>
          <?php } else {?>
            <div class="col-md-1" style="">
              <input type="radio" name="sec" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Pucat </font>
            </div>
            <div class="col-md-4">
              <input type="radio" name="sec" value="0"><font style="position: absolute;top: 2px;left: 45px;">  Tidak</font>
            </div>
          <?php } ?>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-2">
              <b>Cyanosis</b>
            </div>
            <?php if ($tif[12] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="cya" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Ya </font>
            </div>
            <div class="col-md-1">
              <input type="radio" name="cya" value="0" checked><font style="position: absolute;top: 2px;left: 45px;">  Tidak</font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="cya" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Ya </font>
            </div>
            <div class="col-md-1">
              <input type="radio" name="cya" value="0"><font style="position: absolute;top: 2px;left: 45px;">  Tidak</font>
            </div>
          <?php } ?>

            <div class="col-md-2">
              <b>Dyspnea</b>
            </div>
            <?php if ($tif[13] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="dyspnea" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Ya </font>
            </div>
            <div class="col-md-4">
              <input type="radio" name="dyspnea" value="0" checked><font style="position: absolute;top: 2px;left: 45px;">  Tidak</font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="dyspnea" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Ya </font>
            </div>
            <div class="col-md-4">
              <input type="radio" name="dyspnea" value="0"><font style="position: absolute;top: 2px;left: 45px;">  Tidak</font>
            </div>
          <?php } ?>
          </div>
          <hr>

          <h4>Telinga</h4>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <b>Ketajaman Pendengaran</b>
            </div>
            <div class="col-md-1">
              <b>Kanan</b>
            </div>
            <?php if ($telinga[1] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="kpn" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Normal </font>
            </div>
            <div class="col-md-2">
              <input type="radio" name="kpn" value="0" checked><font style="position: absolute;top: 2px;left: 45px;">  Tidak Normal</font>
            </div>
          <?php } else { ?>
          <div class="col-md-1" style="">
            <input type="radio" name="kpn" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Normal </font>
          </div>
          <div class="col-md-2">
            <input type="radio" name="kpn" value="0"><font style="position: absolute;top: 2px;left: 45px;">  Tidak Normal</font>
          </div>
          <?php } ?>
            <div class="col-md-1">
              <b>Kiri</b>
            </div>
            <?php if ($telinga[2] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="kpr" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Normal </font>
            </div>
            <div class="col-md-3">
              <input type="radio" name="kpr" value="0" checked><font style="position: absolute;top: 2px;left: 45px;">  Tidak Normal</font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="kpr" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Normal </font>
            </div>
            <div class="col-md-3">
              <input type="radio" name="kpr" value="0"><font style="position: absolute;top: 2px;left: 45px;">  Tidak Normal</font>
            </div>
          <?php } ?>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <b>Liang Telinga</b>
            </div>
            <div class="col-md-1">
              <b>Kanan</b>
            </div>
            <?php if ($telinga[3] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="ltn" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Normal </font>
            </div>
            <div class="col-md-2">
              <input type="radio" name="ltn" value="0" checked><font style="position: absolute;top: 2px;left: 45px;">  Tidak Normal</font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="ltn" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Normal </font>
            </div>
            <div class="col-md-2">
              <input type="radio" name="ltn" value="0"><font style="position: absolute;top: 2px;left: 45px;">  Tidak Normal</font>
            </div>
          <?php } ?>
            <div class="col-md-1">
              <b>Kiri</b>
            </div>
            <?php if ($telinga[4] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="ltr" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Normal </font>
            </div>
            <div class="col-md-3">
              <input type="radio" name="ltr" value="0" checked><font style="position: absolute;top: 2px;left: 45px;">  Tidak Normal</font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="ltr" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Normal </font>
            </div>
            <div class="col-md-3">
              <input type="radio" name="ltr" value="0"><font style="position: absolute;top: 2px;left: 45px;">  Tidak Normal</font>
            </div>
          <?php } ?>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <b>Serumen</b>
            </div>
            <div class="col-md-1">
              <b>Kanan</b>
            </div>
            <?php if ($telinga[5] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="srmn" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Normal </font>
            </div>
            <div class="col-md-2">
              <input type="radio" name="srmn" value="0" checked><font style="position: absolute;top: 2px;left: 45px;">  Tidak Normal</font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="srmn" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Normal </font>
            </div>
            <div class="col-md-2">
              <input type="radio" name="srmn" value="0"><font style="position: absolute;top: 2px;left: 45px;">  Tidak Normal</font>
            </div>
          <?php } ?>

            <div class="col-md-1">
              <b>Kiri</b>
            </div>
            <?php if ($telinga[6] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="srmr" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Normal </font>
            </div>
            <div class="col-md-3">
              <input type="radio" name="srmr" value="0" checked><font style="position: absolute;top: 2px;left: 45px;">  Tidak Normal</font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="srmr" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Normal </font>
            </div>
            <div class="col-md-3">
              <input type="radio" name="srmr" value="0"><font style="position: absolute;top: 2px;left: 45px;">  Tidak Normal</font>
            </div>
          <?php } ?>
            <div class="col-md-3" style="margin-top:20px;">
              <b>Keterangan</b>
            </div>
            <div class="col-md-9" style="margin-top:20px;">
              <textarea name="ket_telinga" class="form-control"> <?php echo $telinga[7]; ?> </textarea>
            </div>
          </div>
          <hr>

          <h4>Mata</h4>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <b>Ketajaman Penglihatan</b>
            </div>
            <div class="col-md-1">
              <b>Kanan</b>
            </div>
            <div class="col-md-3" style="">
              <input type="text" name="ktpn" value="<?php echo $mata[1]; ?>" class="form-control">
            </div>

            <div class="col-md-1">
              <b>Kiri</b>
            </div>
            <div class="col-md-3" style="">
              <input type="text" name="ktpr" value="<?php echo $mata[2]; ?>" class="form-control">
            </div>
            <div class="col-md-1">
            </div>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <b>Buta Warna</b>
            </div>
            <div class="col-md-1">
              <b>Kanan</b>
            </div>
              <?php if ($mata[3] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="btwn" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2">
              <input type="radio" name="btwn" value="0" checked><font style="position: absolute;top: 2px;left: 45px;">  Negatif</font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="btwn" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2">
              <input type="radio" name="btwn" value="0"><font style="position: absolute;top: 2px;left: 45px;">  Negatif</font>
            </div>
          <?php } ?>
            <div class="col-md-1">
              <b>Kiri</b>
            </div>
            <?php if ($mata[4] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="btwr" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3">
              <input type="radio" name="btwr" value="0" checked><font style="position: absolute;top: 2px;left: 45px;">  Negatif</font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="btwr" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3">
              <input type="radio" name="btwr" value="0"><font style="position: absolute;top: 2px;left: 45px;">  Negatif</font>
            </div>
          <?php } ?>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <b>Radang / Juling</b>
            </div>
            <div class="col-md-1">
              <b>Kanan</b>
            </div>
            <?php if ($mata[5] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="jln" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2">
              <input type="radio" name="jln" value="0" checked><font style="position: absolute;top: 2px;left: 45px;">  Negatif</font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="jln" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2">
              <input type="radio" name="jln" value="0"><font style="position: absolute;top: 2px;left: 45px;">  Negatif</font>
            </div>
          <?php } ?>
            <div class="col-md-1">
              <b>Kiri</b>
            </div>
            <?php if ($mata[6] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="jlr" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3">
              <input type="radio" name="jlr" value="0" checked><font style="position: absolute;top: 2px;left: 45px;">  Negatif</font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="jlr" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3">
              <input type="radio" name="jlr" value="0"><font style="position: absolute;top: 2px;left: 45px;">  Negatif</font>
            </div>
          <?php } ?>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
                <b>Menggunakan Kacamata</b>
            </div>
            <?php if ($mata[7] == 0) { ?>
            <div class="col-md-3" style="">
              <input type="radio" name="kacamata" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-6">
              <input type="radio" name="kacamata" value="0" checked><font style="position: absolute;top: 2px;left: 45px;">  Negatif</font>
            </div>
          <?php  } else { ?>
            <div class="col-md-3" style="">
              <input type="radio" name="kacamata" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-6">
              <input type="radio" name="kacamata" value="0"><font style="position: absolute;top: 2px;left: 45px;">  Negatif</font>
            </div>
          <?php } ?>
            <div class="col-md-3" style="margin-top:20px;">
              <b>Keterangan</b>
            </div>
            <div class="col-md-9" style="margin-top:20px;">
              <textarea name="ket_mata" class="form-control"> <?php echo $mata[8]; ?> </textarea>
            </div>
          </div>
          <hr>

          <h4>Mulut</h4>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <b>Gangguan Labio Scesis</b>
            </div>
            <?php if ($mulut[1] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="lbs" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="lbs" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="lbs" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="lbs" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } ?>
            <div class="col-md-2">
              <b>Lidah Kotor</b>
            </div>
            <?php if ($mulut[2] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="ldk" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="ldk" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          </div>
        <?php } else { ?>
          <div class="col-md-1" style="">
            <input type="radio" name="ldk" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
          </div>
          <div class="col-md-3" style="">
            <input type="radio" name="ldk" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
          </div>
        </div>
        <?php } ?>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <b>Gangguan Bicara/Gagap</b>
            </div>
            <?php if ($mulut[3] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="ggp" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="ggp" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } else {?>
            <div class="col-md-1" style="">
              <input type="radio" name="ggp" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="ggp" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } ?>
            <div class="col-md-2">
              <b>Kelenjar Gondok</b>
            </div>
            <?php if ($mulut[4] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="gondok" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="gondok" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="gondok" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="gondok" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } ?>
          </div>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <b>Gigi Lubang</b>
            </div>
            <?php if ($mulut[5] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="gglubang" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="gglubang" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="gglubang" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="gglubang" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } ?>
            <div class="col-md-2">
              <b>Kelenjar Lympa</b>
            </div>
            <?php if ($mulut[6] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="lympa" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="lympa" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="lympa" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="lympa" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } ?>

            <div class="col-md-3" style="margin-top:20px;">
              <b>Keterangan</b>
            </div>
            <div class="col-md-9" style="margin-top:20px;">
              <textarea name="ket_mulut" class="form-control"> <?php echo $mulut[7]; ?></textarea>
            </div>
          </div>
          <hr>

          <h4>Pernafasan, Jantung, Perut, Anus dan Kelamin</h4>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <b>Asthma Bronchiale</b>
            </div>
            <?php if ($jantung[1] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="asma" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="asma" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } else {?>
            <div class="col-md-1" style="">
              <input type="radio" name="asma" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="asma" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } ?>
            <div class="col-md-2">
              <b>Brochitis Kronis</b>
            </div>
            <?php if ($jantung[2] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="bronkitis" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="bronkitis" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="bronkitis" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="bronkitis" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } ?>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <b>Kelainan Jantung</b>
            </div>
            <?php if ($jantung[3] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="jantung" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="jantung" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="jantung" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="jantung" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } ?>
            <div class="col-md-2">
              <b>Haemorhoid/Wasir</b>
            </div>
            <?php if ($jantung[4] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="wasir" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="wasir" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="wasir" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="wasir" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } ?>
          </div>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <b>Hepar</b>
            </div>
            <?php if ($jantung[5] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="hepar" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Normal </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="hepar" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Tidak Normal </font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="hepar" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Normal </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="hepar" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Tidak Normal </font>
            </div>
          <?php } ?>
            <div class="col-md-2">
              <b>Hypertensi</b>
            </div>
            <?php if ($jantung[6] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="hypertensi" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Normal </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="hypertensi" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Tidak Normal </font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="hypertensi" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Normal </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="hypertensi" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Tidak Normal </font>
            </div>
          <?php } ?>
          </div>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <b>Hernia</b>
            </div>
            <?php if ($jantung[7] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="hernia" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="hernia" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="hernia" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="hernia" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } ?>

            <div class="col-md-2">
              <b>Lien</b>
            </div>
            <?php if ($jantung[8] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="lien" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Normal </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="lien" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Tidak Normal </font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="lien" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Normal </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="lien" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Tidak Normal </font>
            </div>
          <?php } ?>
          </div>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <b>Hydrococel Tetis</b>
            </div>
            <?php if ($jantung[9] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="tetis" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="tetis" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="tetis" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="tetis" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } ?>
            <div class="col-md-2">
              <b>Penyakit Kelamin</b>
            </div>
            <?php if ($jantung[10] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="pklmn" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="pklmn" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="pklmn" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="pklmn" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } ?>
            <div class="col-md-3" style="margin-top:20px;">
              <b>Keterangan</b>
            </div>
            <div class="col-md-9" style="margin-top:20px;">
              <textarea name="ket_jantung" class="form-control"> <?php echo $jantung[11]; ?> </textarea>
            </div>
          </div>
          <hr>
          <h4>Kulit</h4>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <b>bercak Putih/Lepra</b>
            </div>
            <?php if ($kulit[1] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="bercak" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="bercak" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } else {?>
            <div class="col-md-1" style="">
              <input type="radio" name="bercak" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="bercak" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } ?>
            <div class="col-md-2">
              <b>Tato</b>
            </div>
            <?php if ($kulit[2] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="tato" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="tato" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="tato" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="tato" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } ?>
          </div>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <b>Borok/Ulcus</b>
            </div>
            <?php if ($kulit[3] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="borok" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="borok" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } else {?>
            <div class="col-md-1" style="">
              <input type="radio" name="borok" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-2" style="">
              <input type="radio" name="borok" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } ?>
            <div class="col-md-2">
              <b>Penyakit Kulit</b>
            </div>
            <?php if ($kulit[4] == 0) { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="pklt" value="1"><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="pklt" value="0" checked><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } else { ?>
            <div class="col-md-1" style="">
              <input type="radio" name="pklt" value="1" checked><font style="position: absolute;top: 2px;left: 45px;"> Positif </font>
            </div>
            <div class="col-md-3" style="">
              <input type="radio" name="pklt" value="0"><font style="position: absolute;top: 2px;left: 45px;"> Negatif </font>
            </div>
          <?php } ?>
            <div class="col-md-3" style="margin-top:20px;">
              <b>Keterangan</b>
            </div>
            <div class="col-md-9" style="margin-top:20px;">
              <textarea name="ket_kulit" class="form-control"> <?php echo $kulit[5]; ?> </textarea>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">
            <b>Catatan : (Anamnesa) </b>
            </div>
            <div class="col-md-12">
              <textarea name="catatan" class="form-control" rows="4" cols="80"><?php echo $kulit[6]; ?></textarea>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">
            <b>Kesimpulan :</b>
            </div>
            <div class="col-md-12">
              <textarea name="kesimpulan" class="form-control" rows="4" cols="80"><?php echo $kulit[7]; ?></textarea>
            </div>
          </div>

          <div class="row">

          </div>
          <div class="form-group" style="margin-top:20px">
            <a href="print-promotif.php?data=<?php echo $data1; ?>&id=<?php echo $id; ?>"><button class="btn btn-primary add-one" style="width:100%">Print</button></a>
          </div>
        </form>
      </div>
    <?php }}}}}}}}} ?>
      <!-- /.box-body -->
    </div>


  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include "footer.php" ?>
