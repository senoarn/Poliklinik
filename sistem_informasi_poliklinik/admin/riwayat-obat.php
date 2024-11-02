<?php include "header.php" ?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Riwayat Obat
      <small>Riwayat Obat</small>
    </h1>
  </section>

  <section class="content container-fluid">

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Riwayat Obat</h3>
            | <a target="_blank" href="export_excel.php?id=obat">Export Excel</a>
            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <form class="" action="riwayat.php" method="GET">
                <input type="text" name="nama" class="form-control pull-right" placeholder="Search">
                <div class="input-group-btn">
                </div>
              </form>
              </div>
            </div>
          </div>
          <div class="box-body table-responsive">
            <table class="table table-hover">
              <tr>
                <th>No</th>
                <th width="10%">Nama</th>
                <th>Keterangan</th>
                <th>Tgl Produksi</th>
                <th>Expired</th>
                <th>Tanggal</th>
                <th>Option</th>
              </tr>
                  <?php
                  include "proses/koneksi.php";
                  $nomor       = 1;
                  $data   = mysqli_query($connect, "SELECT * FROM `riwayat_obat.php` ORDER BY `riwayat_obat.php`.`no` DESC ");
                  while ($obat = mysqli_fetch_array($data)) {
                    $namaobat  = $obat['nama'];
                    $data1     = mysqli_query($connect, "SELECT * FROM `obat` WHERE `nama` = '$namaobat' ");
                    while ($obat1 = mysqli_fetch_array($data1)) {
                    ?>
                <tr>
                  <td><?php echo $obat1['kode']; ?></td>
                  <td><?php echo $obat['nama']; ?></td>
                  <td><?php echo $obat['keterangan']; ?> </td>
                  <td></td>
                  <td></td>
                  <td><?php echo $obat['tanggal']; ?></td>
                  <td><a href="riwayat-obat.php?cek=hapus&no=<?php echo $obat['no']; ?>" class="btn btn-danger">Delete</a></td>
              </tr>
            <?php }} ?>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php
      $cek = $_REQUEST['cek'];
      $no  = $_REQUEST['no'];

      if ($cek == "hapus") {
      $hapus = mysqli_query($connect, "DELETE FROM `riwayat_obat.php` WHERE `riwayat_obat.php`.`no` = '$no'");
      echo "<script> window.location = 'riwayat-obat.php';</script>";
      }
    ?>
  </section>
  </div>

<?php include "footer.php" ?>
