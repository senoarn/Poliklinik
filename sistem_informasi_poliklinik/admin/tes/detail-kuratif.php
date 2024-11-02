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
              <input type="text" name="item" value="<?php echo $product->name; ?>"  class="form-control" placeholder="F4" required>
            </div>

            <div class="form-group">
              <label>Harga</label>
              <input type="text" name="harga" value="<?php echo $product->price; ?>"  class="form-control" placeholder="105.000" required>
            </div>

            <div class="form-group">
              <label>Stok</label>
              <input type="text" name="stok" value="<?php echo $product->quantity; ?>"  class="form-control" placeholder="5" required>
            </div>

            <div class="form-group" style="margin-top:20px">
              <input type="submit" class="btn btn-primary add-one" value="Simpan">
            </div>
          </form>
        </div>
      <?php }} else { ?>
      <div class="box-body" style="padding:20px;">
        <?php
        $pasien      = $_REQUEST['data'];
        $id          = $_REQUEST['id'];
        $data        = $_REQUEST['data'];
        $data99      = $_REQUEST['data'];
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
         ?>
          <!-- text input -->
          <?php
          $kuratif     = mysqli_query($connect, "SELECT * FROM `kuratif` WHERE `order_id` = '$id'");
          while ($data1 = mysqli_fetch_row($kuratif)) {

           ?>
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
               <div style="margin-top:5px;" class="col-md-2">
                 <?php echo "$goldar"."$rhesus"; ?>
               </div>
             </div>
             <hr>
           </div>
          <div class="form-group">
            <label>Keluhan Utama <i>( Major Symptom )</i></label><br>
            <textarea name="kel_utama" class="form-control" rows="5" cols="80"><?php echo $data1[2]; ?></textarea>
          </div>

          <div class="form-group">
            <label>Tanggal Keluhan Tersebut Diketahui <i>(Date of first time complaints)</i></label>
            <input type="date" name="kel_tgl"  class="form-control" value="<?php echo $data1[3]; ?>" required style="line-height:15px">
          </div>

          <div class="form-group">
            <label>Riwayat Penyakit <i>( History of illness )</i></label><br>
            <textarea name="history_penyakit" class="form-control" rows="5" cols="80"><?php echo $data1[4]; ?></textarea>
          </div>

          <div class="form-group">
            <label>Kelainan - Kelainan yang Ditemukan <i> / Abnormal Finding</i></label><br>
          </div>

          <div class="form-group">
            <label>Pemeriksaan Fisik <i>( Physical Treatment )</i></label><br>
            <textarea name="periksa_fisik" class="form-control" rows="5" cols="80"><?php echo $data1[5]; ?></textarea>
          </div>
          <div class="form-group">
            <label>Diagnosis</i></label><br>
            <textarea name="diagnosis" class="form-control" required rows="5" cols="80"><?php echo $data1[8]; ?></textarea>
          </div>
          <div class="form-group">
            <label>Pemeriksaan Hiperkolesterol dan Hiperurisemia</label><br>
          </div>
          <!-- <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <label>A. Hiperkolesterol</label><br>
                    <input name="Hiperkolesterol" onchange="hiperkolesterol()" id="Hiperkolesterol" class="form-control" value="<?php echo $data1[9]; ?>">
                  </div>
                  <div class="col-md-6">
                    <label>Keterangan</label><br>
                    <p id="text_Hiperkolesterol">
                      <?php if ($data1[9] < 161) {
                        echo "Normal";
                      } else {
                        echo "Tidak Normal";
                      }} ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <label>B. Hiperurisemia</label><br>
                    <input name="hiperurisemia" onchange="myFunction()" id="Hiperurisemia" class="form-control" value="<?php echo $data1[10]; ?>">
                  </div>
                  <div class="col-md-6">
                    <label>Keterangan</label><br>
                    <p id="text_Hiperurisemia">
                      <?php if($jk = "Laki-Laki ") {
                        if ($data1[10] < 7.1) {
                        echo "Normal";
                      } else {
                        echo "Tidak Normal";
                      }} else {
                        if ($data1[10] < 6.1) {
                        echo "Normal";
                      } else {
                        echo "Tidak Normal";
                      }} ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <div class="form-group">
            <label>Tes Radiologi <i>( Radiology Test )</i></label><br>
            <a href="proses/kuratif/<?php echo $data1[7]; ?>"><label class="form-control"> Download File </label> </a>
          </div>
          <div class="form-group">
            <label>Tes Laboratorium <i>( Laboratory Test )</i></label><br>
            <a href="proses/kuratif/<?php echo $data1[6]; ?>"><label class="form-control"> Download File</label> </a>
          </div><br>
          <div class="form-group">
            <table class="table table-hover" width="100%">
              <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Jumlah</th>
                <th>Aturan Minum</th>
              </tr>
              <?php
              $no             = 1;
              $obat           = mysqli_query($connect, "SELECT * FROM `data_obat` WHERE `order_id` = '$id' ");
              while ($data1   = mysqli_fetch_row($obat)) {
                $id_nm        = $data1[2];
                $jumlah       = $data1[3];
                $minum        = $data1[4];
                $obat1        = mysqli_query($connect, "SELECT * FROM `obat` WHERE `id` = '$id_nm'");
                while ($data2 = mysqli_fetch_row($obat1)) {
                  $nama_obat  = $data2[2];
               ?>
              <tr>
                <td><?php echo $no;$no++; ?></td>
                <td><?php echo $nama_obat; ?></td>
                <td><?php echo $jumlah; ?></td>
                <td><?php echo $minum; ?></td>
              </tr>
            <?php }} ?>
            </table>
          </div>
          <!-- <div class="form-group" style="margin-top:20px">
            <a href="data-kuratif-all.php?data=<?php //echo $pasien; ?>"> <button class="btn btn-primary add-one" style="width:100%"> Kembali </button>
            </div> -->
            <div class="form-group" style="margin-top:20px">
              <a href="print-kuratif.php?data=<?php echo $data99 ?>&id=<?php echo $id ?>"><button class="btn btn-primary add-one" style="width:100%">Print</button></a>
            </div>
      </div>

      <!-- /.box-body -->
    </div>

  <?php }} ?>

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
  function hiperkolesterol() {
    var x = document.getElementById("Hiperkolesterol").value;
    if (x < 151) {
        kolesterol = "Normal";
      } else {
        kolesterol = "Tidak Normal";
      }
    document.getElementById("text_Hiperkolesterol").innerHTML = kolesterol;
  }

  function myFunction() {
  var x = document.getElementById("Hiperurisemia").value;
  var y = "<?php echo $jk; ?>";
  if (y == "Laki-Laki ") {
    if (parseFloat(x) < 7.1) {
        Hiperurisemia = "Normal";
    } else {
        Hiperurisemia = "Tidak Normal";
    }
    } else {
      if (parseFloat(x) < 6.1) {
          Hiperurisemia = "Normal";
      } else {
          Hiperurisemia = "Tidak Normal";
      }
    }
  document.getElementById("text_Hiperurisemia").innerHTML = Hiperurisemia;
  }

  </script>
<?php include "footer.php" ?>
