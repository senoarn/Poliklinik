<?php
include "proses/koneksi.php";
include "header.php";
$id = $_REQUEST['id'];
$no = $_REQUEST['no'];
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
      <div class="box-body" style="padding:20px;">
        <p>Dari hasil anamnesa, pemeriksaan fisik, tes penunjang laboratorium dan Radiologi yang dilakukan pada, </p>
          <!-- text input -->
          <?php
          $pasien       = $_REQUEST['pasien'];
          $id           = $_REQUEST['kuratif'];
          $id_rehab     = $_REQUEST['id'];
          $kuratif      = mysqli_query($connect, "SELECT * FROM `kuratif` WHERE `order_id` = '$id'");
          while ($data1 = mysqli_fetch_row($kuratif)) {
            $rehabilitatif      = mysqli_query($connect, "SELECT * FROM `rehabilitatif` WHERE `id` = '$id_rehab'");
            while ($data2       = mysqli_fetch_row($rehabilitatif)) {
           ?>
          <div class="row">
            <div class="col-md-3">
              Hari, Tanggal
            </div>
            <div class="col-md-9">
              <input type="text" name="" class="form-control" disabled value="<?php echo date('d/m/Y'); ?>" style="background:none;border:none;">
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
              <input type="text" class="form-control" style="background:none;border:none;" name="" value="<?php echo $data1[2]; ?>" disabled>
            </div>
            <div class="col-md-3">
              Diagnosa Akhir
            </div>
            <div class="col-md-9" style="margin-top:10px;">
            <textarea class="form-control" name="diagnosa_akhir" rows="3" cols="80" style="background:none;border:none;" disabled><?php echo $data2[2]; ?></textarea>
            </div>
            <div class="col-md-3" style="margin-top:10px;">
              Saran Program Rehabilitatif
            </div>
            <div class="col-md-9" style="margin-top:10px;">
              <input type="text" class="form-control" name="saran" style="background:none;border:none;" value="<?php echo $data2[3]; ?>" disabled>
            </div>
            <div class="col-md-3" style="margin-top:10px;">
              Kemajuan Program Rehabilitatif
            </div>
            <div class="col-md-9" style="margin-top:10px;">
              <input type="text" class="form-control" name="kemajuan" style="background:none;border:none;" value="<?php echo $data2[4]; ?>" disabled>
            </div>
          </div>

          <div class="row" style="margin-top:30px">
            <div class="col-md-12">
              <p>Dokter Pemeriksa, </p>
              <p style="margin-top:80px">dr. Am Maisarah Disrinama, M. Kes</p>
            </div>
          </div>

          <div class="form-group" style="margin-top:20px">
            <a href="data-rehabilitasi.php?data=<?php echo $pasien; ?>&id=<?php echo $id; ?>"><button class="btn btn-primary add-one"> Kembali </button></a>
              <a href="print-rehabilitatif.php?kuratif=<?php echo $id; ?>&id=<?php echo $id_rehab; ?>" class="btn btn-success">Print</a>
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
