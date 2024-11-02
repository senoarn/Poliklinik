<?php
include "proses/koneksi.php";
include "header.php";
$id = $_REQUEST['id'];
$rm = $_REQUEST['rm'];
?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Formulir Pendaftaran Pasien Baru
      <small></small>
    </h1>
  </section>
  <section class="content container-fluid">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title"> Data Pasien</h3>
      </div>
      <div class="box-body" style="padding:20px;">
          <form action="proses/pasien.php?id=tambah" method="post" enctype="multipart/form-data">
            <?php
            $a           = mysqli_query($connect, "SELECT * FROM `pasien` ORDER BY `id` DESC ");
            while ($data = mysqli_fetch_array($a)) {
            $rm          = $data['id']+1;
            }
              ?>
          <div class="form-group">
            <label>NOMOR</label>
            <input type="text" class="form-control" value="<?php echo $rm; ?>" disabled>
            <input type="hidden" name="rm"  class="form-control" value="<?php echo $rm; ?>" disabled>
          </div>

          <div class="form-group">
            <label>NIM</label>
            <input type="text" name="nim"  class="form-control"  required>
          </div>

          <div class="form-group">
            <label>TAHUN MASUK</label>
            <input type="text" name="thn_masuk"  class="form-control"  required>
          </div>

          <div class="form-group">
            <label>NAMA LENGKAP</label>
            <input type="text" name="nama"  class="form-control" required>
          </div>

          <div class="form-group">
            <label>NOMOR NRP / NIP</label>
            <input type="text" name="nrp"  class="form-control" required>
          </div>

          <div class="form-group">
            <label>Nomor KTP / IDENTITAS</label>
            <input type="text" name="ktp"  class="form-control" required>
          </div>

          <div class="form-group">
            <label>TEMPAT, TANGGAL LAHIR</label>
            <table width="100%">
              <tr>
                <td><input type="text" name="tempat"  class="form-control"  required></td>
                <td><input type="date" name="tgl" class="form-control" style="line-height: 15px;border-left:rmne;"></td>
              </tr>
            </table>
          </div>

          <div class="form-group">
            <label>USIA</label>
            <input type="text" name="usia"  class="form-control" required>
          </div>

          <div class="form-group">
            <label>JENIS KELAMIN</label>
            <select class="form-control" name="jk" required>
              <option value="Laki-Laki ">Laki - Laki</option>
              <option value="Perempuan ">Perempuan</option>
            </select>
          </div>

          <div class="form-group">
            <label>PEKERJAAN</label><br>
            <table width="100%">
              <tr>
                <td><input type="radio" name="kerja" value="Direksi"></td>
                <td>Direksi</td>
                <td><input type="radio" name="kerja" value="Dosen"></td>
                <td>Dosen</td>
                <td><input type="radio" name="kerja" value="Karyawan"></td>
                <td>Karyawan</td>
                <td><input type="radio" name="kerja" value="Mahasiswa"></td>
                <td>Mahasiswa</td>
                <td><input type="radio" name="kerja" value="Umum"></td>
                <td>Umum</td>
              </tr>
            </table>
          </div>

          <div class="form-group">
            <label>AGAMA</label>
            <select class="form-control" name="agama">
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Hindu">Hindu</option>
              <option value="Budha">Budha</option>
            </select>
          </div>

          <div class="form-group">
            <label>ALAMAT LENGKAP</label>
            <input type="text" name="alamat"  class="form-control"  required>
          </div>

          <div class="form-group">
            <label>NOMOR TELPON / HP</label>
            <input type="text" name="tlp"  class="form-control" required>
          </div>

          <div class="form-group">
            <label>STATUS</label><br>
            <table width="300px">
              <tr>
                <td><input type="radio" name="status" value="Belum Menikah"></td>
                <td>Belum Menikah</td>
                <td><input type="radio" name="status" value="Menikah"></td>
                <td>Menikah</td>
              </tr>
            </table>
          </div>

          <div class="form-group">
            <label>BERAT BADAN</label>
            <input type="text" name="bb"  class="form-control"  required>
          </div>

          <div class="form-group">
            <label>TINGGI BADAN</label>
            <input type="text" name="tb"  class="form-control" required>
          </div>

          <div class="form-group">
            <label>GOLONGAN DARAH</label>
            <table width="300px">
              <td>
                <input type="radio" name="goldar" value="O">
              </td>
              <td>O</td>
              <td>
                <input type="radio" name="goldar" value="A">
              </td>
              <td>A</td>
              <td>
                <input type="radio" name="goldar" value="B">
              </td>
              <td>B</td>
              <td>
                <input type="radio" name="goldar" value="AB">
              </td>
              <td>AB</td>
                <td>
                  <select class="form-control" name="rhesus">
                    <option value="+">+</option>
                    <option value="-">-</option>
                  </select>
                </td>
              </tr>
            </table>
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
