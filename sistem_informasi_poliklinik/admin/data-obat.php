<?php include "header.php" ?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Obat
      <small>Data Obat</small>
    </h1>
  </section>
  <section class="content container-fluid">

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Obat</h3>

            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <form class="" action="data-obat.php" method="GET">
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
                <th>Nama</th>
                <th>Jenis</th>
                <th>Stok</th>
                <th>Tgl Produksi</th>
                <th>Tgl Expired</th>
              </tr>
                  <?php
                  include "proses/koneksi.php";
                  $nomor       = 1;
                  $nama        = $_REQUEST['nama'];
                  if ($nama == '') {
                  $pasien      = mysqli_query($connect, "SELECT * FROM `obat` ORDER BY `obat`.`stok` ASC ");
                  } else {
                  $pasien      = mysqli_query($connect, "SELECT * FROM `obat` WHERE `nama` like '%$nama%' OR `kode` like '%$nama%'  ORDER BY `obat`.`stok` ASC ");
                  }
                  while ($data = mysqli_fetch_row($pasien)) {
                    if ($data[4] < 16) {
                      echo "<tr style='background:#FFCC00'>";
                    } else {
                      echo "<tr>";
                    }

                  ?>
                  <form class="" action="proses/obat.php?id=edit" method="post">
                  <?php echo $nomor; $nomor++; ?>
                  <td> <?php echo $data[1]; ?></td>
                  <td>
                    <input type="text" class="form-control" name="nama" value="<?php echo $data[2]; ?>">
                    <input type="hidden" name="kode" value="<?php echo $data[0]; ?>">
                  </td>
                  <td><input type="text" class="form-control" name="jenis" value="<?php echo $data[3]; ?>"></td>
                  <td><input type="text" class="form-control" name="stok" value="<?php echo $data[4]; ?>"></td>
                  <td><input type="date" style="line-height: 20px;" class="form-control" name="stok" value="<?php echo $data[5]; ?>"></td>
                  <td><input type="date" style="line-height: 20px;" class="form-control" name="stok" value="<?php echo $data[6]; ?>"></td>
                  <td>
                    <a href="detail-obat.php?data=<?php echo $data[0]; ?>"><button type="button" name="button" style="width:100px;" class="btn btn-success">Edit</button></a>
                    <a class="btn btn-danger" href="proses/obat.php?id=hapus&data=<?php echo $data[0]; ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                  </td>
              </tr>
              </form>
            <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>

  </section>
  </div>

<?php include "footer.php" ?>
