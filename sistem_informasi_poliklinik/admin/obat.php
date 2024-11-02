<?php
include "proses/koneksi.php";
include "header.php";
$id = $_REQUEST['id'];
$no = $_REQUEST['no'];
?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Formulir Input Data Obat
      <small>Informasi Pelayanan Medis</small>
    </h1>
  </section>

  <section class="content container-fluid">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Data Obat</h3>
      </div>
      <div class="box-body" style="padding:20px;">
          <form action="proses/obat.php?id=tambah" method="post" enctype="multipart/form-data">
            <?php
            $a           = mysqli_query($connect, "SELECT * FROM `obat` ORDER BY `id` DESC ");
            while ($data = mysqli_fetch_array($a)) {
            $no          = $data['id']+1;
            }
              ?>
            <div class="form-group">
              <label>Kode Obat</label>
              <input type="text" class="form-control" value="<?php echo $no; ?>" style="line-height:15px" disabled>
              <input type="hidden" name="kode" class="form-control" value="<?php echo $no; ?>" required style="line-height:15px" placeholder="Kode Obat">
            </div>

            <div class="form-group">
              <label>Nama Obat</label>
              <input type="text" name="nama" class="form-control" required style="line-height:15px" placeholder="Nama Obat">
            </div>

            <div class="form-group">
              <label>Jenis</label>
              <input type="text" name="jenis" class="form-control" required style="line-height:15px" placeholder="Jenis Obat">
            </div>

            <div class="form-group">
              <label>Stok</i></label>
              <input type="text" name="stok" class="form-control" required style="line-height:15px" placeholder="Butir">
            </div>

            <div class="form-group">
              <label>Tanggal Produksi</i></label>
              <input type="date" name="produksi" class="form-control" required style="line-height:15px">
            </div>

            <div class="form-group">
              <label>Tanggal Expired</i></label>
              <input type="date" name="expired" class="form-control" required style="line-height:15px">
            </div>

          <div class="form-group" style="margin-top:20px">
            <input type="submit" class="btn btn-primary add-one" value="Simpan">
          </div>
        </form>
      </div>
    <?php
    ?>
    </div>
  </section>
  </div>

<?php include "footer.php" ?>
