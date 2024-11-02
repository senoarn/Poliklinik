<?php
$id     = $_REQUEST['id'];
$date   = date('d/m/Y');
if ($id == "obat") {
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=riwayat_obat_$date.xls");
?>
  <div class="box-body table-responsive">
    <table class="table table-hover">
      <tr>
        <th>No</th>
        <th width="30%">Nama</th>
        <th>Keterangan</th>
        <th>Tanggal</th>
      </tr>
          <?php
          include "proses/koneksi.php";
          $nomor       = 1;
          $data   = mysqli_query($connect, "SELECT * FROM `riwayat_obat.php` ORDER BY `riwayat_obat.php`.`no` DESC ");
          while ($obat = mysqli_fetch_array($data)) {
            ?>
        <tr>
          <td><?php echo $nomor;$nomor++; ?></td>
          <td><?php echo $obat['nama']; ?></td>
          <td><?php echo $obat['keterangan']; ?> </td>
          <td><?php echo $obat['tanggal']; ?></td>
      </tr>
    <?php } ?>
    </table>
  </div>
<?php
} else if($id == "periksa") {
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=riwayat_periksa_$date.xls");
?>
  <div class="box-body table-responsive">
    <table class="table table-hover">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Jenis Periksa</th>
        <th>Tanggal</th>
      </tr>
          <?php
          include "proses/koneksi.php";
          $nomor       = 1;
          $nama        = $_REQUEST['nama'];
          if ($nama != '') {
            $pasien      = mysqli_query($connect, "SELECT * FROM `riwayat` WHERE `nama` like '%$nama%' OR `jenis_periksa` like '%$nama%' ORDER BY `riwayat`.`id` DESC ");
          } else {
            $pasien      = mysqli_query($connect, "SELECT * FROM `riwayat` ORDER BY `riwayat`.`id` DESC ");
          }
          while ($data = mysqli_fetch_row($pasien)) {
            $namapas   = $data[1];
            $pas       = mysqli_query($connect, "SELECT * FROM `pasien` WHERE `nama` = '$namapas'");
            while ($data1 = mysqli_fetch_row($pas)) {
              $id   = $data1[0];
            ?>
        <tr>
          <td><?php echo $nomor; $nomor++; ?></td>
          <td><?php echo $data[1]; ?></td>
          <td> <?php echo $data1[9]." ".$data1[10]; ?></td>
          <td><?php echo $data[2]; ?></td>
          <td><?php echo $data[3]; ?></td>
      </tr>
    <?php }} ?>
    </table>
  </div>
<?php } ?>
