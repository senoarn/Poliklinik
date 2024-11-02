<?php
include "proses/koneksi.php";
$obat = $_REQUEST['data'];
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Admin Panel - Poliklinik</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/jquery/src/jquery.js">

  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<div class="box-body table-responsive">
</head>
<body onload="window.print()">
      <h1 style="margin-left:20px;">Detail Obat</h1>
    <form action="proses/obat.php?id=edit&data=<?php echo $obat; ?>" method="post" enctype="multipart/form-data">
    <?php
    $result = mysqli_query($connect, "SELECT * FROM `obat` where id = '$obat' ");
    while($a = mysqli_fetch_row($result)) { ?>
    <section class="content container-fluid">
        <div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title"> <?php echo $a[2]; ?></h3>
          </div>
          <div class="box-body" style="padding:20px;">
            <div class="form-group">
              <label>Kode Obat</label>
              <input type="text" class="form-control" value="<?php echo $a[1]; ?>" style="line-height:15px" disabled>
              <input type="hidden" name="kode" class="form-control" value="<?php echo $a[1]; ?>" required style="line-height:15px" placeholder="Kode Obat">
            </div>

            <div class="form-group">
              <label>Nama Obat</label>
              <input type="text" name="nama" class="form-control" value="<?php echo $a[2]; ?>" required style="line-height:15px" placeholder="Nama Obat">
            </div>

            <div class="form-group">
              <label>Jenis</label>
              <input type="text" name="jenis" class="form-control" value="<?php echo $a[3]; ?>" required style="line-height:15px" placeholder="Jenis Obat">
            </div>

            <div class="form-group">
              <label>Stok</i></label>
              <input type="text" name="stok" class="form-control" value="<?php echo $a[4]; ?>" required style="line-height:15px" placeholder="Butir">
            </div>

            <div class="form-group">
              <label>Tanggal Produksi</i></label>
              <input type="date" name="produksi" class="form-control" value="<?php echo $a[5]; ?>" required style="line-height:15px">
            </div>

            <div class="form-group">
              <label>Tanggal Expired</i></label>
              <input type="date" name="expired" class="form-control" value="<?php echo $a[6]; ?>" required style="line-height:15px">
            </div>
        </div>
      </section>
      <?php } ?>
  </form>
</div>