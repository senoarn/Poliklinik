<?php include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php
  include "proses/koneksi.php";
  $nomor       = 1;
  $data_pasien = $_REQUEST['data'];
  $kuratif     = $_REQUEST['id'];
  $pasien      = mysqli_query($connect, "SELECT * FROM `pasien` WHERE `id` = '$data_pasien' ");
  while ($data = mysqli_fetch_row($pasien)) {
        $nrp   = $data[3];
    ?>
  <section class="content-header">
    <h1>
      Data Rehabilitasi
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
            <a href="rehabilitatif.php?nama=<?php echo $data[2];?>&data=<?php echo $data_pasien; ?>&id=<?php echo $kuratif; ?>">
              <button type="button" name="button" class="btn btn-primary">Tambah Rehabiliatif</button>
            </a>
            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <form class="" action="data-rehabilitasi.php?data=<?php echo $data_pasien; ?>&id=<?php echo $kuratif; ?>" method="POST">
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
                <th>No</th>
                <th>Tanggal</th>
                <th>Saran Rehabilitatif</th>
                <!-- <th>Keterangan Umum</th> -->
                <th width="30%">Option</th>
              </tr>
              <?php
              $pasien     = $_REQUEST['data'];
              $id          = $_REQUEST['id'];
              $nama        = $_POST['nama'];
              if ($nama == '') {
                $kuratif     = mysqli_query($connect, "SELECT * FROM `rehabilitatif` where `kuratif` = '$id' ");
              } else {
                $kuratif     = mysqli_query($connect, "SELECT * FROM `rehabilitatif` where `tangal` like '%$nama%' AND `kuratif` = '$id'");
              }
              while ($data1 = mysqli_fetch_row($kuratif)) {

               ?>
                <tr>
                  <td><?php echo $nomor; $nomor++; ?></td>
                  <td><?php echo $data1[1]; ?></td>
                  <td><?php echo $data1[2]; ?></td>
                  <!-- <td><?php echo $data1[2]; ?></td> -->
                  <td>
                    <a href="detail-rehabilitatif.php?pasien=<?php echo $pasien; ?>&id=<?php echo $data1[0]; ?>&kuratif=<?php echo $id; ?>"><button type="button" name="button" style="width:100px;" class="btn btn-success">Detail</button></a>
                  <a onclick="return confirm('Are you sure you want to delete?')" href="proses/rehabilitatif.php?data=<?php echo $data[0]; ?>&id=hapus&rehab=<?php echo $data1[0]; ?>&kuratif=<?php echo $id; ?>"><button type="button" name="button" style="width:100px;" class="btn btn-danger">Delete</button></a>
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
