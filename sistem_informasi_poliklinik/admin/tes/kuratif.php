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
      Formulir Pemeriksaan Kuratif
      <small>Informasi Pelayanan Medis</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title"> ANAMNESA : <i> Anamnesis</i></h3>
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
              <input type="text" name="item" value="<?php echo $product->name; ?>"  class="form-control" placeholder="F4" >
            </div>

            <div class="form-group">
              <label>Harga</label>
              <input type="text" name="harga" value="<?php echo $product->price; ?>"  class="form-control" placeholder="105.000" >
            </div>

            <div class="form-group">
              <label>Stok</label>
              <input type="text" name="stok" value="<?php echo $product->quantity; ?>"  class="form-control" placeholder="5" >
            </div>

            <div class="form-group" style="margin-top:20px">
              <input type="submit" class="btn btn-primary add-one" value="Simpan">
            </div>
          </form>
        </div>
      <?php }} else { ?>
      <div class="box-body" style="padding:20px;">
        <?php
        $pasien2   = $_REQUEST['data'];
        include "proses/koneksi.php";
        $nomor       = 1;
        $data        = $_REQUEST['data'];
        $pasien      = mysqli_query($connect, "SELECT * FROM `pasien` WHERE `id` = '$data' ");
        while ($data = mysqli_fetch_row($pasien)) {
          $rm        = $data[1];
          $nama      = $data[2];
          $nrp       = $data[3];
          $ktp       = $data[4];
          $tempat    = $data[5];
          $tgl       = $data[6];
          $usia      = $data[7];
          $jk        = $data[8];
          $kerja     = $data[9];
          $detail    = $data[10];
          $agama     = $data[11];
          $alamat    = $data[12];
          $tlp       = $data[13];
          $status    = $data[14];
          $bb        = $data[15];
          $tb        = $data[16];
          $goldar    = $data[17];
          $rhesus    = $data[18];
          $alergi    = $data[21];

          ?>
          <!-- text input -->
          <div class="form-group">
            <label><h4>Identitas Pasien</h4></label>
            <hr style="margin-top: 0;margin-bottom: 10px;">
            <div class="row">
              <div style="margin-top:5px;" class="col-md-2">
                <b>Nama</b>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <?php echo $nama; ?>
              </div>
              <div style="margin-top:5px;" class="col-md-1">
                <b>No Reg</b>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <?php echo $rm ?>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <b>Jenis Kelamin</b>
              </div>
              <div style="margin-top:5px;" class="col-md-3">
                <?php echo $jk; ?>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <b>Tempat, Tanggal Lahir</b>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <?php echo "$tempat, $tgl"; ?>
              </div>
              <div style="margin-top:5px;" class="col-md-1">
                <b>Tinggi</b>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <?php echo $tb; ?> cm
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <b>Berat Badan</b>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <?php echo $bb; ?> kg
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <b>Alamat</b>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <?php echo $alamat; ?>
              </div>
              <div style="margin-top:5px;" class="col-md-1">
                <b>Telpon</b>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <?php echo $tlp; ?>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <b>Nomor Telpon</b>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <?php echo $tlp; ?>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <b>Golongan Darah</b>
              </div>
              <div style="margin-top:5px;" class="col-md-1">
                <?php echo "$goldar"."$rhesus";?>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <b>Alergi</b>
              </div>
              <div style="margin-top:5px;" class="col-md-2">
                <?php echo "$alergi";?>
              </div>
            </div>
            <hr>
          </div>
          <form action="proses/kuratif.php?id=tambah&pasien=<?php echo $pasien2; ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="hidden" name="nrp" value="<?php echo $nrp; ?>">
            <input type="hidden" name="nama" value="<?php echo $nama; ?>">
            <input type="hidden" name="kerja" value="<?php echo $kerja.' '.$detail; ?>">
            <label>Keluhan Utama <i>( Major Symptom )</i></label><br>
            <textarea name="kel_utama" class="form-control" rows="5" cols="80"></textarea>
          </div>

          <div class="form-group">
            <label>Tanggal Keluhan Tersebut Diketahui <i>(Date of first time complaints)</i></label>
            <input type="date" name="kel_tgl"  class="form-control" placeholder="Chalid Ade Rahman"  style="line-height:15px">
          </div>

          <div class="form-group">
            <label>Riwayat Penyakit <i>( History of illness )</i></label><br>
            <textarea name="history_penyakit" class="form-control" rows="5" cols="80"></textarea>
          </div>

          <div class="form-group">
            <label>Kelainan - Kelainan yang Ditemukan <i> / Abnormal Finding</i></label><br>
          </div>

          <div class="form-group">
            <label>Pemeriksaan Fisik <i>( Physical Treatment )</i></label><br>
            <textarea name="periksa_fisik" class="form-control" rows="5" cols="80"></textarea>
          </div>
          <div class="form-group">
            <label>Diagnosis</i></label><br>
            <textarea name="diagnosis" class="form-control"  rows="5" cols="80"></textarea>
          </div>

          <div class="form-group">
            <label>Tes Laboratorium <i>( Laboratory Test )</i></label><br>
            <label for="lab" class="form-control"> Upload File
            <input class="form-control" id="lab" type="file" name="lab" style="display:none;">
          </label>
          </div>

          <div class="form-group">
            <label>Tes Radiologi <i>( Radiology Test )</i> </label><br>
            <label for="radio" class="form-control"> Upload File
            <input class="form-control" id="radio" type="file" name="radio" style="display:none;">
          </label>
          </div>

          <div class="form-group" style="margin-top:20px">
            <input type="submit" class="btn btn-primary add-one" value="Pengobatan" style="width:100%">
          </div>
        </form>
      </div>
      <!-- /.box-body -->
    </div>


  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php }} ?>
<?php include "footer.php" ?>
