<?php include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php
  include "proses/koneksi.php";
  $nomor       = 1;
  $data1       = $_REQUEST['data'];
  $pas         = $_REQUEST['data'];
  $pasien      = mysqli_query($connect, "SELECT * FROM `pasien` WHERE `id` = '$data1'");
  while ($data = mysqli_fetch_row($pasien)) {
        $nrp   = $data[3];
    ?>
  <section class="content-header">
    <h1>
      Promotif dan Presentif
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
                <form class="" action="data-promotif-all.php?data=<?php echo $data1; ?>" method="POST">
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
                <th>Tanggal</th>
                <th>Id</th>
                <!-- <th>Keterangan Umum</th> -->
                <th width="30%">Option</th>
              </tr>
              <?php
              $nama        = $_POST['nama'];
              if ($nama == '') {
                $promotif     = mysqli_query($connect, "SELECT * FROM `promotif` WHERE `nrp` = '$nrp' ORDER BY `tanggal` DESC");
              } else {
                $promotif      = mysqli_query($connect, "SELECT * FROM `promotif` WHERE `tanggal` like '%$nama%' AND `nrp` = '$nrp'");
              }
              while ($data1 = mysqli_fetch_row($promotif)) {

               ?>
                <tr>
                  <td><?php echo $nomor; $nomor++; ?></td>
                  <td><?php echo $data1[14]; ?></td>
                  <td><?php echo $data1[0]; ?></td>
                  <!-- <td><?php echo $data1[2]; ?></td> -->
                  <td>
                  <a href="detail-promotif.php?data=<?php echo $data[0]; ?>&id=<?php echo $data1[0]; ?>"><button type="button" name="button" style="width:100px;" class="btn btn-success">Detail</button></a>
                  <a onclick="return confirm('Are you sure you want to delete?')" href="proses/promotif.php?pasien=<?php echo $pas; ?>&data=<?php echo $data1[0]; ?>&idx=hapus"><button type="button" name="button" style="width:100px;" class="btn btn-danger">Delete</button></a>
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
