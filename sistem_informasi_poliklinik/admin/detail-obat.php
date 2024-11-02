<?php
include "proses/koneksi.php";
include "header.php";
$obat = $_REQUEST['data']; 
?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Detail Obat
      <small></small>
    </h1>
  </section>
  <form action="proses/obat.php?id=edit&data=<?php echo $obat; ?>" method="post" enctype="multipart/form-data">
    <?php
    $result = mysqli_query($connect, "SELECT * FROM `obat` where id = '$obat' ");
    while($a = mysqli_fetch_row($result)) { ?>
      <section class="content container-fluid">
        <div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title"> <?php echo $a[2]; ?></h3>
          </div>
          <div class="box-body" style="padding:20px;">
            <div class="form-group">
              <label>Kode Obat</label>
              <input type="text" class="form-control" value="<?php echo $a[1]; ?>" style="line-height:15px" disabled>
              <input type="hidden" name="kode" class="form-control" value="<?php echo $a[1]; ?>" required style="line-height:15px" placeholder="Kode Obat">
            </div>

            <div class="form-group">
              <label>Nama Obat</label>
              <input type="text" name="nama" class="form-control" value="<?php echo $a[2]; ?>" required style="line-height:15px" placeholder="Nama Obat">
            </div>

            <div class="form-group">
              <label>Jenis</label>
              <input type="text" name="jenis" class="form-control" value="<?php echo $a[3]; ?>" required style="line-height:15px" placeholder="Jenis Obat">
            </div>

            <div class="form-group">
              <label>Stok</i></label>
              <input type="text" name="stok" class="form-control" value="<?php echo $a[4]; ?>" required style="line-height:15px" placeholder="Butir">
            </div>

            <div class="form-group">
              <label>Tanggal Produksi</i></label>
              <input type="date" name="produksi" class="form-control" value="<?php echo $a[5]; ?>" required style="line-height:15px">
            </div>

            <div class="form-group">
              <label>Tanggal Expired</i></label>
              <input type="date" name="expired" class="form-control" value="<?php echo $a[6]; ?>" required style="line-height:15px">
            </div>

            <div class="form-group" style="margin-top:20px">
              <input type="submit" class="btn btn-primary add-one" value="Simpan">
            </div>
            <div class="form-group" style="margin-top:20px">
            <a href="print_data_obat.php?data=<?php echo $obat; ?>"  class="btn btn-primary add-one" style="width:100%">Print</a>
          </div>
          </div>
        </div>
      </section>
    <?php } ?>
  </form>
</div>

<?php include "footer.php" ?>