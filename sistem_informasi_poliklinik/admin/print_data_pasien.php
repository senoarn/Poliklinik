<?php
include "proses/koneksi.php";
$pasien = $_REQUEST['data'];
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Admin Panel - Poliklinik</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/jquery/src/jquery.js">

  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<div class="box-body table-responsive">
</head>
<body onload="window.print()">
      <h1 style="margin-left:20px;">Detail Pasien</h1>
    <form action="proses/pasien.php?id=edit&data=<?php echo $pasien; ?>" method="post" enctype="multipart/form-data">
    <?php
    $result = mysqli_query($connect, "SELECT * FROM `pasien` where id = '$pasien' ");
    while($a = mysqli_fetch_row($result)) { ?>
    <section class="content container-fluid">
      <div class="box box-warning">
        <div class="box-body" style="padding:20px;">
            <div class="form-group">
              <label>NOMOR RM</label>
              <input type="text" name="no"  class="form-control"  required value="<?php echo $a[1]; ?>">
            </div>
            <div class="form-group">
              <label>NOMOR SMARTCARD</label>
              <input type="text" name="smartcard"  class="form-control" value="<?php echo $a[20]; ?>"  required>
            </div>

            <div class="form-group">
              <label>TAHUN MASUK</label>
              <input type="text" name="thn_masuk"  class="form-control"  required value="<?php echo $a[19]; ?>">
            </div>

            <div class="form-group">
              <label>NAMA LENGKAP</label>
              <input type="text" name="nama"  class="form-control" value="<?php echo $a[2]; ?>" required>
            </div>

            <div class="form-group">
              <label>NOMOR NRP / NIP</label>
              <input type="text" name="nrp" value="<?php echo $a[3]; ?>" class="form-control" required>
            </div>

            <div class="form-group">
              <label>Nomor KTP / IDENTITAS</label>
              <input type="text" name="ktp" value="<?php echo $a[4]; ?>" class="form-control" required>
            </div>

            <div class="form-group">
              <label>TEMPAT, TANGGAL LAHIR</label>
              <table width="100%">
                <tr>
                  <td><input type="text" value="<?php echo $a[5]; ?>" name="tempat"  class="form-control"  required></td>
                  <td><input type="date" value="<?php echo $a[6]; ?>" name="tanggal" class="form-control" style="line-height: 15px;border-left:none;"></td>
                </tr>
              </table>
            </div>

            <div class="form-group">
              <label>USIA</label>
              <input type="text" name="usia" value="<?php echo $a[7]; ?>" class="form-control" required>
            </div>

            <div class="form-group">
              <label>JENIS KELAMIN</label><br>
              <select class="form-control" name="jk" required>
                <option selected><?php echo $a[8]; ?></option>
                <option value="Laki-Laki ">Laki - Laki</option>
                <option value="Perempuan ">Perempuan</option>
              </select>
            </div>

            <div class="form-group">
              <label>Pekerjaan</label><br>
              <div class="row">
                <div class="col-md-6">
                <select class="form-control" name="pekerjaan">
                  <option selected><?php echo $a[9]?></option>
                  <option value="Direksi">Direksi</option>
                  <option value="Dosen">Dosen</option>
                  <option value="Karyawan">Karyawan</option>
                  <option value="Mahasiswa">Mahasiswa</option>
                </select>
                </div>
                <div class="col-md-6">
                  <select class="form-control" name="detail_pekerjaan">
                    <option selected><?php echo $a[10]; ?></option>
                    <option value="SB">SB</option>
                    <option value="DC">DC</option>
                    <option value="ME">ME</option>
                    <option value="PE">PE</option>
                    <option value="K3">K3</option>
                    <option value="DM">DM</option>
                    <option value="TL">TL</option>
                    <option value="TP">TP</option>
                    <option value="TO">TO</option>
                    <option value="MBM">MBM</option>
                    <option value="PL">PL</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>AGAMA</label>
              <input type="text" name="agama" value="<?php echo $a[11]; ?>"  class="form-control" required>
            </div>

            <div class="form-group">
              <label>ALAMAT LENGKAP</label>
              <input type="text" name="alamat" value="<?php echo $a[12]; ?>"  class="form-control"  required>
            </div>

            <div class="form-group">
              <label>NOMOR TELPON / HP</label>
              <input type="text" name="hp" value="<?php echo $a[13]; ?>" class="form-control" required>
            </div>

            <div class="form-group">
              <label>STATUS</label><br>
              <select class="form-control" name="status">
                <option selected><?php echo $a[14]; ?></option>
                <option value="Belum Menikah">Belum Menikah</option>
                <option value="Menikah">Menikah</option>
              </select>
            </div>

            <div class="form-group">
              <label>BERAT BADAN</label>
              <input type="text" name="bb"value="<?php echo $a[15]; ?>"  class="form-control"  required>
            </div>

            <div class="form-group">
              <label>TINGGI BADAN</label>
              <input type="text" name="tb" value="<?php echo $a[16]; ?>"  class="form-control" required>
            </div>

            <div class="form-group">
              <label>GOLONGAN DARAH</label>
              <select class="form-control" name="goldar">
                <option selected><?php echo $a[17]; ?></option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
              </select>
            </div>
            <div class="form-group">
              <label>Rhesus</label>
              <select class="form-control" name="resus">
                <option selected><?php echo $a[18]; ?></option>
                <option value="+">+</option>
                <option value="-">-</option>
              </select>
            </div>
        </div>
      <?php } ?>
    </form>
      </div>
    </section>
    </div>
</body>
</html>
