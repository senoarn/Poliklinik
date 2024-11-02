<?php include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Kuratif dan Rehabilitatif
      <small>Data Pasien</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Diri Pasien</h3>

            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <form class="" action="data-kuratif.php" method="GET">
                <input type="text" name="nama" class="form-control pull-right" placeholder="Search">
                <div class="input-group-btn">
                </div>
              </form>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table class="table table-hover">
              <tr>
                <th>No</th>
                <th>No Rm</th>
                <th>Nama Lengkap</th>
                <th>Smartcard</th>
                <th style="width:30%">Option</th>
              </tr>
                  <?php
                  include "proses/koneksi.php";
                  $nomor       = 1;
                  $nama        = $_REQUEST['nama'];
                  if ($nama == '') {
                    $pasien      = mysqli_query($connect, "SELECT * FROM `pasien` ORDER BY `pasien`.`id` DESC ");
                  } else {
                    $pasien      = mysqli_query($connect, "SELECT * FROM `pasien` WHERE `smartcard` like '%$nama%' or `nama` like '%$nama%'");
                  }
                  while ($data = mysqli_fetch_row($pasien)) {
                    ?>
                <tr>
                  <td><?php echo $nomor; $nomor++; ?></td>
                  <td><?php echo $data[1]; ?></td>
                  <td><?php echo $data[2]; ?></td>
                  <td><?php echo $data[20]; ?></td>
                  <td>
                  <a href="data-kuratif-all.php?data=<?php echo $data[0]; ?>"><button type="button" name="button" style="width:100px;" class="btn btn-success">Detail</button></a>
                  </td>
              </tr>
            <?php } ?>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include "footer.php" ?>
