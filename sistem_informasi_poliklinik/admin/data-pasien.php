<?php include "header.php" ?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Pasien
      <small>Data Pasien</small>
    </h1>
  </section>

  <section class="content container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Diri Pasien</h3>
            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <form class="" action="data-pasien.php" method="GET">
                  <input type="text" name="nama" class="form-control pull-right" placeholder="Search">
                </form>
              </div>
            </div>
          </div>
          <div class="box-body table-responsive">
            <table class="table table-hover">
              <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>NIM</th>
                <th>Tahun Masuk</th>
                <th>Option</th>
              </tr>
              <?php
              include "proses/koneksi.php";
              $nomor = 1;
              $nama = isset($_GET['nama']) ? mysqli_real_escape_string($connect, $_GET['nama']) : '';

              $query = "SELECT * FROM `pasien` WHERE `nama` like '%$nama%' OR `nim` like '%$nama%' OR `thn_masuk` like '%$nama%' ORDER BY `pasien`.`id` DESC";
              $pasien = mysqli_query($connect, $query);

              if (!$pasien) {
                die("Query failed: " . mysqli_error($connect));
              }

              while ($data = mysqli_fetch_row($pasien)) {
                ?>
                <tr>
                  <td><?php echo $nomor; $nomor++; ?></td>
                  <td><?php echo $data[2]; ?></td>
                  <td><?php echo $data[20]; ?></td>
                  <td><?php echo $data[19]; ?></td>
                  <td>
                    <a href="detail-pasien.php?data=<?php echo $data[0]; ?>"><button type="button" name="button" style="width:100px;" class="btn btn-success">Edit</button></a>
                    <a class="btn btn-danger" href="proses/pasien.php?id=hapus&data=<?php echo $data[0]; ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                  </td>
                </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include "footer.php" ?>
