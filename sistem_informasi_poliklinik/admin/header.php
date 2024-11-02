<?php
session_start();
include "proses/koneksi.php";
if( !isset($_SESSION['kode'])) {
echo "<script>alert('Login Required'); window.location = '../index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Admin Panel - Poliklinik AMIKOM</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/jquery/src/jquery.js">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-purple.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <a href="#" class="logo">
      <span class="logo-mini"><b>POLI</b></span>
      <span class="logo-lg"><b>Poliklinik</b> AMIKOM</span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu" style="padding:5px">
        <div class="row">
          <div class="col-6">
            <div class="" style="background:red;text-align:center;width:25px;position: absolute;z-index: 9;top: 5px;right: 0px;border-radius: 200px;font-size: 11px;font-weight: 800;color: #fff;padding: 2px;height: 25px;">
              <?php
                $number = mysqli_query($connect, "SELECT COUNT(stok) FROM `obat` WHERE `stok` < 15 ");
                while ($angka = mysqli_fetch_row($number)) {
                    echo $angka[0];
                }
              ?>
          </div>
          <div class="col-6">
              <img src="bell.png" data-toggle="modal" data-target="#notif" alt="" style="width:25px;float:right;margin-top:10px;margin-right:25px">
          </div>
        </div>
      </div>
      </div>
    </nav>
  </header>
  <div class="modal fade" id="notif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Notifikasi</h4>
        </div>
        <div class="modal-body">
          <table width="100%">
            <?php
              $number = mysqli_query($connect, "SELECT * FROM `obat` WHERE `stok` < 15 ");
              while ($obat = mysqli_fetch_row($number)) {
            ?>
            <tr>
              <td width="10%">
                <img style="vertical-align: baseline;width:20px;" src="pills.png" alt="">
              </td>
              <td>
                <p style="color:#242424;font-size:14px;">Stok obat <b style="color:#242424;font-weight:800;"><?php echo $obat[2]; ?></b> sisa <?php echo $obat[4]; ?></p>
              </td>
            </tr>
          <?php } ?>
          </table>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </form>
  </div>
<?php include "sidebar.php"; ?>
