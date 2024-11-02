<?php include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php
  include "proses/koneksi.php";
  $nomor       = 1;
  $data_pasien = $_REQUEST['data'];
  $pasien      = mysqli_query($connect, "SELECT * FROM `pasien` WHERE `id` = '$data_pasien' ");
  while ($data = mysqli_fetch_row($pasien)) {
        $nrp   = $data[3];
    ?>
  <section class="content-header">
    <h1>
      Data Kuratif
      <small><?php echo $data[2]; ?></small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><?php //echo $data[2]; ?></h3>

            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <form class="" action="data-kuratif-all.php?data=<?php echo $data_pasien; ?>" method="POST">
                <input type="text" name="nama" class="form-control pull-right" placeholder="Search">
                <div class="input-group-btn">
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table class="table table-hover">
              <tr>
                <th width="5%">No</th>
                <th width="10%">Tanggal</th>
                <th>Keluhan Utama</th>
                <!-- <th>Keterangan Umum</th> -->
                <th width="40%">Option</th>
              </tr>
              <?php
              $nama        = $_POST['nama'];
              if ($nama == '') {
                $kuratif     = mysqli_query($connect, "SELECT * FROM `kuratif` WHERE `pasien` = '$data_pasien'");
              } else {
                $kuratif     = mysqli_query($connect, "SELECT * FROM `kuratif` WHERE `kel_utama` like '%$nama%' AND `pasien` = '$data_pasien' or `tgl_periksa` like '%$nama%' AND `pasien` = '$data_pasien'");
              }
              while ($data1 = mysqli_fetch_row($kuratif)) {

               ?>
                <tr>
                  <td><?php echo $nomor; $nomor++; ?></td>
                  <td><?php echo $data1[3]; ?></td>
                  <td><?php echo $data1[2]; ?></td>
                  <!-- <td><?php echo $data1[2]; ?></td> -->
                  <td>
                  <a href="detail-kuratif.php?data=<?php echo $data[0]; ?>&id=<?php echo $data1[0]; ?>"><button type="button" name="button" style="width:100px;" class="btn btn-success">Detail</button></a>
                  <a href="data-rehabilitasi.php?data=<?php echo $data[0]; ?>&id=<?php echo $data1[0]; ?>"><button type="button" name="button" style="width:100px;" class="btn btn-primary">Rehabilitasi</button></a>
                  <a  onclick="return confirm('Are you sure you want to delete?')" href="proses/kuratif.php?data=<?php echo $data[0]; ?>&id=hapus&kuratif=<?php echo $data1[0]; ?>"><button type="button" name="button" style="width:100px;" class="btn btn-danger">Delete</button></a>
                  </td>
              </tr>
            <?php }} ?>
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
