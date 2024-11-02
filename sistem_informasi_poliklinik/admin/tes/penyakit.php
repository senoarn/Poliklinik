<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Admin Panel - Majelis Rasulullah</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Multiple Input Form -->
  <link rel="stylesheet" href="bower_components/jquery/src/jquery.js">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<div>
  <?php
    $id = $_REQUEST['id'];
    if ($id == 'penyakit') {
  ?>
  <center>
    <h2>Input Data Penyakit</h2>
    <!-- <p>Pendaftaran Titip Jual Dari Agen Baru</p> -->
    <br>
  </center>
  <form class="" action="proses/pakar.php?id=penyakit" method="post">
  <div class="row">
    <div class="col-md-12">
      <b>Nama Penyakit<b>
    </div>
    <div class="col-md-12">
      <input type="text" class="form-control" name="nama" value=""><br>
    </div>
    <div class="col-md-12">
      <b>Tanggal Diinputkan<b>
    </div>
    <div class="col-md-12">
      <input type="text" class="form-control" disabled value="<?php echo date('Y-m-d h:i:sa') ?>">
      <input type="hidden" class="form-control" name="tgl" value="<?php echo date('Y-m-d h:i:sa') ?>"><br>
    </div>
    <div class="col-md-12">
      <br>
    </div>
    <div class="col-md-12">
      <input type="submit" name="" value="Simpan" class="btn btn-primary" style="width:100%">
    </div>
  </form>
  </div>
<?php } else if($id == 'diagnosa') { ?>
    <center>
      <h2>Input Data Gejala</h2>
      <!-- <p>Pendaftaran Titip Jual Dari Agen Baru</p> -->
      <br>
    </center>
    <form class="" action="proses/pakar.php?id=diagnosa" method="post">
    <div class="row">
      <div class="col-md-12">
        <b>Gejala<b>
      </div>
      <div class="col-md-12">
        <input type="text" class="form-control" name="nama" value=""><br>
      </div>
      <div class="col-md-12">
        <b>Tanggal Diinputkan<b>
      </div>
      <div class="col-md-12">
        <input type="text" class="form-control" disabled value="<?php echo date('Y-m-d h:i:sa') ?>">
        <input type="hidden" class="form-control" name="tgl" value="<?php echo date('Y-m-d h:i:sa') ?>"><br>
      </div>
      <div class="col-md-12">
        <br>
      </div>
      <div class="col-md-12">
        <input type="submit" name="" value="Simpan" class="btn btn-primary" style="width:100%">
      </div>
    </form>
    </div>
  <?php } else if($id == 'pakar') { ?>
    <center>
      <h2>Sistem Pakar</h2>
      <!-- <p>Pendaftaran Titip Jual Dari Agen Baru</p> -->
      <br>
    </center>
    <form class="" action="proses/pakar.php?id=pakar" method="post">
    <div class="row">
      <div class="col-md-12">
        <b>Gejala 1<b>
      </div>
      <div class="col-md-12">
        <select class="form-control" name="a">
          <option selected value="">- Pilih Gejala -</option>
          <?php
          include "proses/koneksi.php";
          $pasien      = mysqli_query($connect, "SELECT * FROM `penyakit_diagnosa` WHERE `ket` = 'diagnosa' ORDER BY `penyakit_diagnosa`.`id` DESC");
          while ($data = mysqli_fetch_row($pasien)) { ?>
          <option value="<?php echo $data[1]; ?>"><?php echo $data[1]; ?></option>
        <?php } ?>
        </select>
        <br>
      </div>
      <div class="col-md-12">
        <b>Gejala 2<b>
      </div>
      <div class="col-md-12">
        <select class="form-control" name="b">
          <option selected value="">- Pilih Gejala -</option>
          <?php
          include "proses/koneksi.php";
          $pasien      = mysqli_query($connect, "SELECT * FROM `penyakit_diagnosa` WHERE `ket` = 'diagnosa' ORDER BY `penyakit_diagnosa`.`id` DESC");
          while ($data = mysqli_fetch_row($pasien)) { ?>
          <option value="<?php echo $data[1]; ?>"><?php echo $data[1]; ?></option>
        <?php } ?>
        </select>
        <br>
      </div>
      <div class="col-md-12">
        <b>Gejala 3<b>
      </div>
      <div class="col-md-12">
        <select class="form-control" name="c">
          <option selected value="">- Pilih Gejala -</option>
          <?php
          include "proses/koneksi.php";
          $pasien      = mysqli_query($connect, "SELECT * FROM `penyakit_diagnosa` WHERE `ket` = 'diagnosa' ORDER BY `penyakit_diagnosa`.`id` DESC");
          while ($data = mysqli_fetch_row($pasien)) { ?>
          <option value="<?php echo $data[1]; ?>"><?php echo $data[1]; ?></option>
        <?php } ?>
        </select>
        <br>
      </div>
      <div class="col-md-12">
        <b>Gejala 4<b>
      </div>
      <div class="col-md-12">
        <select class="form-control" name="d">
          <option selected value="">- Pilih Gejala -</option>
          <?php
          include "proses/koneksi.php";
          $pasien      = mysqli_query($connect, "SELECT * FROM `penyakit_diagnosa` WHERE `ket` = 'diagnosa' ORDER BY `penyakit_diagnosa`.`id` DESC");
          while ($data = mysqli_fetch_row($pasien)) { ?>
          <option value="<?php echo $data[1]; ?>"><?php echo $data[1]; ?></option>
        <?php } ?>
        </select>
        <br>
      </div>
      <div class="col-md-12">
        <b>Gejala 5<b>
      </div>
      <div class="col-md-12">
        <select class="form-control" name="e">
          <option selected value="">- Pilih Gejala -</option>
          <?php
          include "proses/koneksi.php";
          $pasien      = mysqli_query($connect, "SELECT * FROM `penyakit_diagnosa` WHERE `ket` = 'diagnosa' ORDER BY `penyakit_diagnosa`.`id` DESC");
          while ($data = mysqli_fetch_row($pasien)) { ?>
          <option value="<?php echo $data[1]; ?>"><?php echo $data[1]; ?></option>
        <?php } ?>
        </select>
        <br>
      </div>
      <div class="col-md-12">
        <b>Gejala 6<b>
      </div>
      <div class="col-md-12">
        <select class="form-control" name="f">
          <option selected value="">- Pilih Gejala -</option>
          <?php
          include "proses/koneksi.php";
          $pasien      = mysqli_query($connect, "SELECT * FROM `penyakit_diagnosa` WHERE `ket` = 'diagnosa' ORDER BY `penyakit_diagnosa`.`id` DESC");
          while ($data = mysqli_fetch_row($pasien)) { ?>
          <option value="<?php echo $data[1]; ?>"><?php echo $data[1]; ?></option>
        <?php } ?>
        </select>
        <br>
      </div>
      <div class="col-md-12">
        <b>Gejala 7<b>
      </div>
      <div class="col-md-12">
        <select class="form-control" name="g">
          <option selected value="">- Pilih Gejala -</option>
          <?php
          include "proses/koneksi.php";
          $pasien      = mysqli_query($connect, "SELECT * FROM `penyakit_diagnosa` WHERE `ket` = 'diagnosa' ORDER BY `penyakit_diagnosa`.`id` DESC");
          while ($data = mysqli_fetch_row($pasien)) { ?>
          <option value="<?php echo $data[1]; ?>"><?php echo $data[1]; ?></option>
        <?php } ?>
        </select>
        <br>
      </div>
      <div class="col-md-12">
        <b>Gejala 8<b>
      </div>
      <div class="col-md-12">
        <select class="form-control" name="h">
          <option selected value="">- Pilih Gejala -</option>
          <?php
          include "proses/koneksi.php";
          $pasien      = mysqli_query($connect, "SELECT * FROM `penyakit_diagnosa` WHERE `ket` = 'diagnosa' ORDER BY `penyakit_diagnosa`.`id` DESC");
          while ($data = mysqli_fetch_row($pasien)) { ?>
          <option value="<?php echo $data[1]; ?>"><?php echo $data[1]; ?></option>
        <?php } ?>
        </select>
        <br>
      </div>
      <div class="col-md-12">
        <b>Gejala 9<b>
      </div>
      <div class="col-md-12">
        <select class="form-control" name="i">
          <option selected value="">- Pilih Gejala -</option>
          <?php
          include "proses/koneksi.php";
          $pasien      = mysqli_query($connect, "SELECT * FROM `penyakit_diagnosa` WHERE `ket` = 'diagnosa' ORDER BY `penyakit_diagnosa`.`id` DESC");
          while ($data = mysqli_fetch_row($pasien)) { ?>
          <option value="<?php echo $data[1]; ?>"><?php echo $data[1]; ?></option>
        <?php } ?>
        </select>
        <br>
      </div>
      <div class="col-md-12">
        <b>Gejala 10<b>
      </div>
      <div class="col-md-12">
        <select class="form-control" name="j">
          <option selected value="">- Pilih Gejala -</option>
          <?php
          include "proses/koneksi.php";
          $pasien      = mysqli_query($connect, "SELECT * FROM `penyakit_diagnosa` WHERE `ket` = 'diagnosa' ORDER BY `penyakit_diagnosa`.`id` DESC");
          while ($data = mysqli_fetch_row($pasien)) { ?>
          <option value="<?php echo $data[1]; ?>"><?php echo $data[1]; ?></option>
        <?php } ?>
        </select>
        <br>
      </div>
      <div class="col-md-12">
        <b>Penyakit<b>
      </div>
      <div class="col-md-12">
        <select class="form-control" name="penyakit">
          <option selected value="">- Pilih Penyakit -</option>
          <?php
          include "proses/koneksi.php";
          $pasien      = mysqli_query($connect, "SELECT * FROM `penyakit_diagnosa` WHERE `ket` = 'penyakit' ORDER BY `penyakit_diagnosa`.`id` DESC");
          while ($data = mysqli_fetch_row($pasien)) { ?>
          <option value="<?php echo $data[1]; ?>"><?php echo $data[1]; ?></option>
        <?php } ?>
        </select>
        <br>
      </div>
      <div class="col-md-12">
        <b>Rekomendasi<b>
      </div>
      <div class="col-md-12">
        <textarea class="form-control" name="rekomendasi" rows="8" cols="80"></textarea>
        </select>
        <br>
      </div>
      <div class="col-md-12">
        <br>
      </div>
      <div class="col-md-12">
        <input type="submit" name="" value="Simpan" class="btn btn-primary" style="width:100%">
      </div>
    </form>
    </div>
  <?php } else if($id == 'view') { ?>
    <h4><b>Tabel Data Sistem Pakar<b></h4>
     <table class="table" style="width:100%">
       <tr style="background:#d4d4d4">
         <th>No</th>
         <th>Gejala 1</th>
         <th>Gejala 2</th>
         <th>Gejala 3</th>
         <th>Gejala 4</th>
         <th>Gejala 5</th>
         <th>Gejala 6</th>
         <th>Gejala 7</th>
         <th>Gejala 8</th>
         <th>Gejala 9</th>
         <th>Gejala 10</th>
         <th style="background-color:#ff3939;color:#fff">Sakit</th>
         <th>Option</th>
       </tr>
       <?php
        include "proses/koneksi.php";
        $nomor       = 1;
        $nama        = $_REQUEST['nama'];
        $gejala      = mysqli_query($connect, "SELECT * FROM `pakar` ORDER BY `pakar`.`id` DESC ");
        while ($data = mysqli_fetch_row($gejala)) {
          ?>
       <tr>
         <td><?php echo $nomor;$nomor++; ?> </td>
         <td><?php echo $data[1]; ?></td>
         <td><?php echo $data[2]; ?></td>
         <td><?php echo $data[3]; ?></td>
         <td><?php echo $data[4]; ?></td>
         <td><?php echo $data[5]; ?></td>
         <td><?php echo $data[6]; ?></td>
         <td><?php echo $data[7]; ?></td>
         <td><?php echo $data[8]; ?></td>
         <td><?php echo $data[9]; ?></td>
         <td><?php echo $data[10]; ?></td>
         <td style="background:#9aff99;"><?php echo $data[11]; ?></td>
         <td><a href="proses/pakar.php?id=delete&kode=<?php echo $data[0]; ?>">Delete</a></td>
       </tr>
     <?php } ?>
     </table>
  <?php } ?>
</div>
</body>

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <script src="bower_components/ckeditor/ckeditor.js"></script>
  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
