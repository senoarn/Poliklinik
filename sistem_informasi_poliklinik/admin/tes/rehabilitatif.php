<?php
include "proses/koneksi.php";
include "header.php";
$id   = $_REQUEST['id'];
$no   = $_REQUEST['no'];
$nama = $_REQUEST['nama'];
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Rehabilitatif
      <small></small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Formulir Pemeriksaan Rehabilitatif <br><small>Informasi Pelayanan Medis</small></h3>
      </div>
      <!-- /.box-header -->
      <?php if($id == "edit") {
        $result = mysqli_query($connect, "SELECT * FROM product WHERE id = '$no'");
        while($product = mysqli_fetch_object($result)) { ?>
        <div class="box-body">
            <!-- text input -->
            <form action="proses/item.php?id=edit" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="form-control">Upload Foto Produk
              <input type="file" style="display:none" placeholder="Nomor PO" name="file1">
              <input type="hidden" name="no" value="<?php echo $product->id; ?>">
              </label>
            </div>

            <div class="form-group">
              <label>Nama Produk</label>
              <input type="text" name="item" value="<?php echo $product->name; ?>"  class="form-control" placeholder="F4">
            </div>

            <div class="form-group">
              <label>Harga</label>
              <input type="text" name="harga" value="<?php echo $product->price; ?>"  class="form-control" placeholder="105.000">
            </div>

            <div class="form-group">
              <label>Stok</label>
              <input type="text" name="stok" value="<?php echo $product->quantity; ?>"  class="form-control" placeholder="5">
            </div>

            <div class="form-group" style="margin-top:20px">
              <input type="submit" class="btn btn-primary add-one" value="Simpan">
            </div>
          </form>
        </div>
      <?php }} else { ?>
      <div class="box-body" style="padding:20px;">
        <p>Dari hasil anamnesa, pemeriksaan fisik, tes penunjang laboratorium dan Radiologi yang dilakukan pada, </p>
          <!-- text input -->
          <?php
          $pasien       = $_REQUEST['data'];
          $id           = $_REQUEST['id'];
          $kuratif      = mysqli_query($connect, "SELECT * FROM `kuratif` WHERE `order_id` = '$id'");
          while ($data1 = mysqli_fetch_row($kuratif)) {

           ?>
          <form action="proses/rehabilitatif.php?id=tambah&nama=<?php echo $nama; ?>&data=<?php echo $data1[0]; ?>&pasien=<?php echo $pasien; ?>" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-3">
              Hari, Tanggal
            </div>
            <div class="col-md-9">
            <?php echo $data1[3]; ?>
            <input type="hidden" name="tgl_rehab" value="<?php echo date('d/m/Y'); ?>">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <b>Dengan Keterangan</b>
            </div>
            <div class="col-md-3" style="margin-top:10px;">
              Diagnosa Awal
            </div>
            <div class="col-md-9" style="margin-top:10px;">
              <input type="text" class="form-control" name="" value="<?php echo $data1[2]; ?>" disabled>
            </div>
            <div class="col-md-3">
              Diagnosa Akhir
            </div>
            <div class="col-md-9" style="margin-top:10px;">
            <textarea class="form-control" name="diagnosa_akhir" rows="3" cols="80"></textarea>
            </div>
            <div class="col-md-3" style="margin-top:10px;">
              Saran Program Rehabilitatif
            </div>
            <div class="col-md-9" style="margin-top:10px;">
              <input type="text" class="form-control" name="saran" value="">
            </div>
            <div class="col-md-3" style="margin-top:10px;">
              Kemajuan Program Rehabilitatif
            </div>
            <div class="col-md-9" style="margin-top:10px;">
              <input type="text" class="form-control" name="kemajuan" value="">
            </div>
          </div>

          <div class="row" style="margin-top:30px">
            <div class="col-md-12">
              <p>Dokter Pemeriksa, </p>
              <p style="margin-top:80px">dr. Am Maisarah Disrinama, M. Kes</p>
            </div>
          </div>

          <div class="form-group" style="margin-top:20px">
            <input type="submit" class="btn btn-primary add-one" value="Simpan">
          </div>
        </form>
      </div>
    <?php }} ?>
      <!-- /.box-body -->
    </div>


  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include "footer.php" ?>
