<?php include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pasien
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
                <div class="input-group-btn">
                  <form class="" action="data-mahasiswa-baru.php" method="post" style="padding-right:10px;">
                    <input type="text" name="nama" value="" class="form-control" style="width:250px" placeholder="Cari Mahasiswa">
                  </form>
                </div>
                <div class="input-group-btn">
                  <a class="btn btn-primary" href="add-mahasiswa.php">Daftar Mahasiswa Baru</a>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table class="table table-hover">
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Telpon</th>
                <th style="width:45%">Option</th>
              </tr>
                  <?php
                  $data   = $_POST['nama'];
                  include "proses/koneksi.php";
                  $nomor       = 1;
                  if ($data != '') {
                    $pasien      = mysqli_query($connect, "SELECT * FROM `siswa_baru` WHERE `nama` LIKE '%$data%' OR `hp1` LIKE '%$data%'");
                  } else {
                    $pasien      = mysqli_query($connect, "SELECT * FROM `siswa_baru`");
                  }
                  while ($data = mysqli_fetch_row($pasien)) {
                    ?>
                <tr>
                  <td><?php echo $nomor; $nomor++; ?></td>
                  <td><?php echo $data[1]; ?></td>
                  <td><?php echo $data[3]; ?></td>
                  <td><?php echo $data[9]; ?></td>
                  <td>
                    <a href="detail-mahasiswa-baru.php?&no=<?php echo $data[0]; ?>" class="btn btn-warning"> Detail</a>
                    <a onclick="return confirm('Are you sure you want to delete?')" href="proses/mahasiswa_baru.php?id=delete&no=<?php echo $data[0]; ?>" class="btn btn-danger">Delete</a>
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
