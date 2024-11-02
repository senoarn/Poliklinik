<?php
session_start();
include "proses/koneksi.php";
 ?>
<html>
<head>
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body style="font-size:12px" onload="window.print()">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <section class="content container-fluid">
      <div class="box box-warning">
        <div class="box-header with-border">
          <table>
            <tr>
              <td width="10%">
                <center><img src="logo.png" alt="" style="width:80%"></center>
                </td>
              <td  style="font-size:12px;">
                <h3 class="box-title">Formulir Pemeriksaan Rehabilitatif <br><small>Informasi Pelayanan Medis</small></h3>
              </td>
            </tr>
          </table>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <p style="margin-top:20px;">Dari hasil anamnesa, pemeriksaan fisik, tes penunjang laboratorium dan Radiologi yang dilakukan pada, </p>
            <!-- text input -->
            <?php
            $pasien       = $_REQUEST['pasien'];
            $id           = $_REQUEST['kuratif'];
            $id_rehab     = $_REQUEST['id'];
            $kuratif      = mysqli_query($connect, "SELECT * FROM `kuratif` WHERE `order_id` = '$id'");
            while ($data1 = mysqli_fetch_row($kuratif)) {
              $rehabilitatif      = mysqli_query($connect, "SELECT * FROM `rehabilitatif` WHERE `id` = '$id_rehab'");
              while ($data2       = mysqli_fetch_row($rehabilitatif)) {
             ?>
            <table width="100%;">
              <tr>
                <td width="20%" style="font-size:12px;">Hari, Tanggal</td>
                <td  style="font-size:12px;">
                  : <?php echo date('d/m/Y'); ?>
                </td>
              </tr>
            </table>

            <table style="margin-top:20px;" width="100%">
              <tr>
                <td colspan="2"><b>Dengan Keterangan</b></td>
              </tr>
            </table>
            <br>
            <table width="100%">
              <tr>
                <td width="20%" style="font-size:12px;">Diagnosa Awal</td>
                <td  style="font-size:12px;">
                  : <?php echo $data1[2]; ?>
                </td>
              </tr>
              <tr>
                <td  style="font-size:12px;">Diagnosa Akhir</td>
                <td  style="font-size:12px;">: <?php echo $data2[2]; ?></td>
              </tr>
              <tr>
                <td  style="font-size:12px;">Saran Program Rehabilitatif</td>
                <td  style="font-size:12px;">: <?php echo $data2[3]; ?></td>
              </tr>
              <tr>
                <td  style="font-size:12px;">Kemajuan Program Rehabilitatif</td>
                <td  style="font-size:12px;">: <?php echo $data2[4]; ?></td>
              </tr>
            </table>

                <p style="margin-top:80px">Dokter Pemeriksa, </p>
                <p style="margin-top:80px">dr. Am Maisarah Disrinama, M. Kes</p>

      <?php }} ?>
        <!-- /.box-body -->
      </div>
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
</body>
</html>
