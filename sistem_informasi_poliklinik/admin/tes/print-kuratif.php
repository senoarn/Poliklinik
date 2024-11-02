<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="font-size:11px;" onload="window.print()">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <table>
          <tr>
            <td width="10%">
              <center><img src="logo.png" alt="" style="width:80%"></center>
              </td>
            <td>
              <h1>
                Formulir Pemeriksaan Kuratif<br>
                <small>Informasi Pelayanan Medis</small>
              </h1>
            </td>
          </tr>
        </table>
      </section>
            <h3 class="box-title"> ANAMNESA : <i> Anamnesis</i></h3>
            <hr>
          <!-- /.box-header -->
            <?php
            include "proses/koneksi.php";
            $pasien      = $_REQUEST['data'];
            $id          = $_REQUEST['id'];
            $data        = $_REQUEST['data'];
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
             ?>
              <!-- text input -->
              <?php
              $kuratif     = mysqli_query($connect, "SELECT * FROM `kuratif` WHERE `order_id` = '$id'");
              while ($data1 = mysqli_fetch_row($kuratif)) {

               ?>
                 <label><h4>Identitas Pasien</h4></label>
                 <hr style="margin-top: 0;margin-bottom: 10px;">
                 <table style="width:100%">
                   <tr>
                     <td><b>Nama</b></td>
                     <td><?php echo $nama; ?></td>
                     <td><b>No Reg</b></td>
                     <td><?php echo $rm ?></td>
                   </tr>
                   <tr>
                     <td><b>Jenis Kelamin</b></td>
                     <td> <?php echo $jk; ?></td>
                     <td><b>Berat Badan</b></td>
                     <td> <?php echo $bb; ?> kg</td>
                   </tr>
                   <tr>
                     <td> <b>Tempat, Tgl Lahir</b></td>
                     <td><?php echo "$tempat, $tgl"; ?></td>
                     <td> <b>Tinggi</b></td>
                     <td><?php echo $tb; ?> cm</td>

                   </tr>
                   <tr>
                     <td> <b>Alamat</b></td>
                     <td> <?php echo $alamat; ?></td>
                     <td> <b>Telpon</b></td>
                     <td><?php echo $tlp; ?></td>
                   </tr>
                   <tr>
                     <td><b>Golongan Darah</b></td>
                     <td><?php echo "$goldar"."$rhesus"; ?></td>
                   </tr>
                   <tr>
                     <td><b>Alergi</b></td>
                     <td><?php echo "$alergi"; ?></td>
                   </tr>
                 </table>

              <table>
                <tr>
                  <td></td>
                </tr>
              </table>
               <hr style="margin-top: 0;margin-bottom: 10px;">
              <div class="form-group">
                <h4>Keluhan Utama <i>( Major Symptom )</i></h4>
                <textarea name="kel_utama" class="form-control" rows="5" style="width:100%;border:0px;"><?php echo $data1[2]; ?></textarea>
              </div>
             <br>
              <div class="form-group">
                <h4>Tanggal Keluhan Tersebut Diketahui <i>(Date of first time complaints)</i></h4>
                <input type="date" name="kel_tgl"  class="form-control" value="<?php echo $data1[3]; ?>" required style="line-height:15px;border:0px;font-size:12px;">
              </div>
              <br>
              <div class="form-group">
                <h4>Riwayat Penyakit <i>( History of illness )</i></h4>
                <textarea name="history_penyakit" class="form-control" rows="5" cols="80" style="width:100%;border:0px;"><?php echo $data1[4]; ?></textarea>
              </div>

              <div class="form-group">
                <h4>Kelainan - Kelainan yang Ditemukan <i> / Abnormal Finding</i></h4>
              </div>

              <div class="form-group">
                <h4>Pemeriksaan Fisik <i>( Physical Treatment )</i></h4>
                <textarea name="periksa_fisik" class="form-control" rows="5" cols="80" style="width:100%;border:0px;"><?php echo $data1[5]; ?></textarea>
              </div>
              <div class="form-group">
                <h4>Diagnosis</i></h4>
                <textarea name="diagnosis" class="form-control" required rows="5" cols="80" style="width:100%;border:0px;"><?php echo $data1[8]; ?></textarea>
              </div>

              <div class="form-group">
                <table class="table" width="100%" style="text-align:left">
                  <tr>
                    <th>No</th>
                    <th>Nama Obat</th>
                    <th>Jumlah</th>
                    <th>Aturan Minum</th>
                  </tr>
                  <?php
                  $no             = 1;
                  $obat           = mysqli_query($connect, "SELECT * FROM `data_obat` WHERE `order_id` = '$id' ");
                  while ($data1   = mysqli_fetch_row($obat)) {
                    $id_nm        = $data1[2];
                    $jumlah       = $data1[3];
                    $minum        = $data1[4];
                    $obat1        = mysqli_query($connect, "SELECT * FROM `obat` WHERE `id` = '$id_nm'");
                    while ($data2 = mysqli_fetch_row($obat1)) {
                      $nama_obat  = $data2[2];
                   ?>
                  <tr>
                    <td><?php echo $no;$no++; ?></td>
                    <td><?php echo $nama_obat; ?></td>
                    <td><?php echo $jumlah; ?></td>
                    <td><?php echo $minum; ?></td>
                  </tr>
                <?php } ?>
                </table>
              </div>
              <!-- <div class="form-group" style="margin-top:20px">
                <a href="data-kuratif-all.php?data=<?php //echo $pasien; ?>"> <button class="btn btn-primary add-one" style="width:100%"> Kembali </button>
                </div> -->
          </div>

          <!-- /.box-body -->
        </div>

      <?php }}} ?>

      </section>
      <!-- /.content -->
      </div>
  </body>
</html>
