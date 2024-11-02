<?php
include "proses/koneksi.php";
include "header.php";
$id = $_REQUEST['id'];
$no = $_REQUEST['no'];
?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Formulir Pemeriksaan Kuratif
      <small>Informasi Pelayanan Medis</small>
    </h1>
  </section>
  <section class="content container-fluid">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title"> Pengobatan</h3>
      </div>
      <div class="box-body">
        <div class="rows">
          <div class="col-md-5" style="border:solid thin #d4d4d4;padding:10px;">
            <form class="" action="cari-obat.php" method="post">
            <table width="100%">
              <tr>
                <td>
                  <select class="form-control" name="kat">
                    <option selected>-- Pilih --</option>
                    <option value="kode">Kode</option>
                    <option value="nama">Nama Obat</option>
                    <option value="jenis">Jenis</option>
                  </select>
                </td>
                <td>
                  <input type="text" class="form-control" name="cari" value="" placeholder="Cari Obat">
                </form>
                </td>
              </tr>
            </table>
            <table class="table table-hover">
              <tr>
                <th>kode</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th style="width:25%">Option</th>
              </tr>
                  <?php
                  include "proses/koneksi.php";
                  $cari        = $_POST['cari'];
                  $kat         = $_POST['kat'];
                  $nomor       = 1;
                  if ($cari != "") {
                  $pasien      = mysqli_query($connect, "SELECT * FROM `obat` WHERE `$kat` like '%$cari%'");
                  } else {
                  $pasien      = mysqli_query($connect, "SELECT * FROM `obat` ORDER BY `obat`.`id` DESC ");
                  }
                  while ($data2 = mysqli_fetch_row($pasien)) {
                    ?>
                <tr>
                  <?php echo $nomor; $nomor++; ?>
                  <td><?php echo $data2[1]; ?></td>
                  <td><?php echo $data2[2]; ?></td>
                  <td><?php echo $data2[3]; ?></td>
                  <td>
                  <a href="proses/obat.php?id=simpan&data=<?php echo $data2[0]; ?>"><button type="button" name="button" style="width:100px;" class="btn btn-primary">Add</button></a>
                  </td>
              </tr>
            <?php } ?>
            </table>
          </div>
          <div class="col-md-7">
            <table class="table table-hover" style="">
              <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th width="15%">Jumlah</th>
                <th>Aturan Minum </th>
                <th>Opsi</th>
              </tr>
              <?php
              include "proses/koneksi.php";
              $nomor          = 1;
              $obat           = mysqli_query($connect, "SELECT * FROM `cart`");
              while ($data    = mysqli_fetch_row($obat)) {
                $id           = $data[0];
                $kode         = $data[1];
                $obat1        = mysqli_query($connect, "SELECT * FROM `obat` WHERE `id` = '$kode' ");
                while ($data1 = mysqli_fetch_row($obat1)) {
                  $nama       = $data1[2];
                  $jenis      = $data1[3];
                ?>
              <tr>
                <form action="proses/kuratif.php?id=saveobat" method="post">

                <td>
                  <?php echo $kode; ?>
                  <input type="hidden" name="kode[]" value="<?php echo $kode; ?>">
                </td>
                <td>
                <?php echo $nama; ?>
                <input type="hidden" name="nama[]" value="<?php echo $nama; ?>"></td>
                <td><?php echo $jenis; ?></td>
                <td><input type="text" name="total[]" class="form-control" required></td>
                <td>
                  <input type="text" name="aturan[]" class="form-control" value="" required>
                </td>
                <td style="text-align:center"><a href="proses/kuratif.php?id=delobat&kode=<?php echo $id; ?>"><i class="fa fa-close" title="delete" style="color:red;"></i></a></td>
              </tr>
            <?php }} ?>
            </table>
          </div>
        </div>
        <div class="col-md-12" style="margin-top:30px;">
          <input type="submit" name="" value="Simpan" class="btn btn-primary" style="width:100%">
        </div>
      </form>
      </div>
    </div>
  </section>
  </div>

<?php include "footer.php" ?>
