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
      Mahasiswa Baru PPNS
      <!-- <small> Silahkan mengisi data dengan JUJUR dan KONDISI SEBENARNYA. Memalsukan data akan DIDISKUALIFIKASI</small> -->
    </h1>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Formulir Tes Kesehatan Calon Mahasiswa Baru PPNS</h3>
        <br><small> Silahkan mengisi data dengan JUJUR dan KONDISI SEBENARNYA. Memalsukan data akan DIDISKUALIFIKASI</small>
      </div>
      <!-- /.box-header -->
      <?php if($id == "edit") {
        $result = mysqli_query($connect, "SELECT * FROM product WHERE id = '$no'");
        while($product = mysqli_fetch_object($result)) { ?>
        <div class="box-body">
            <!-- text input -->
            <form action="proses/pasien.php?id=edit" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="form-control">Upload Foto Produk
              <input type="file" style="display:none" name="file1">
              <input type="hidden" name="no" value="<?php echo $product->id; ?>">
              </label>
            </div>

            <div class="form-group">
              <label>Nama Produk</label>
              <input type="text" name="item" value="<?php echo $product->name; ?>" class="form-control">
            </div>

            <div class="form-group">
              <label>Harga</label>
              <input type="text" name="harga" value="<?php echo $product->price; ?>" class="form-control">
            </div>

            <div class="form-group">
              <label>Stok</label>
              <input type="text" name="stok" value="<?php echo $product->quantity; ?>" class="form-control">
            </div>

            <div class="form-group" style="margin-top:20px">
              <input type="submit" class="btn btn-primary add-one" value="Simpan">
            </div>
          </form>
        </div>
      <?php }} else { ?>
      <div class="box-body" style="padding:20px;">
          <!-- text input -->
          <?php
          $id = $_REQUEST['id'];
          $no = $_REQUEST['no'];
          $result1 = mysqli_query($connect, "SELECT * FROM siswa_baru WHERE id = '$no'");
          while($siswa = mysqli_fetch_row($result1)) {
          ?>

          <div class="form-group">
            <h5><b><u>1. Data Pribadi dan Keluarga</u></b></h5>
          </div>
          <table width="100%" class="table">
            <tr>
              <td width="30%">Nama Lengkap</td>
              <td width="5%">:</td>
              <td><input type="text" name="nama" value="<?php echo $siswa[1]; ?>" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
            </tr>
            <tr>
              <td width="30%">Panggilan</td>
              <td width="5%">:</td>
              <td><input type="text" name="panggilan" value="<?php echo $siswa[2]; ?>" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
            </tr>
            <tr>
              <td width="30%">Jenis Kelamin</td>
              <td width="5%">:</td>
              <td>
                <table>
                  <tr>
                    <td>
                      <?php if ($row[3] == 'Laki-Laki') { ?>
                        <input checked type="radio" name="jk" value="Laki-Laki">
                      <?php } else { ?>
                        <input checked type="radio" name="jk" value="Laki-Laki">
                      <?php } ?>
                    </td>
                    <td> Laki-Laki</td>
                    <td width="10%"></td>
                    <td>
                      <?php if ($row[3] == 'Perempuan') { ?>
                      <input type="radio" checked name="jk" value="Perempuan">
                    <?php } else {?>
                      <input type="radio" name="jk" value="Perempuan">
                    <?php } ?>
                    </td>
                    <td> Perempuan</td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td width="30%">Bersaudara</td>
              <td width="5%">:</td>
              <td>
                <table>
                  <tr>
                    <td width="20%">
                      <input type="text" value="<?php echo $siswa[4]; ?>" name="saudara" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                    <td width="5%"></td>
                    <td width="15%" style="text-align:right"> Anak Ke</td>
                    <td width="2%"></td>
                    <td> <input type="text" value="<?php echo $siswa[5]; ?>" name="ke" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    <td width="5%"></td>
                    <td> dari</td>
                    <td width="2%"></td>
                    <td> <input type="text" name="dari" value="<?php echo $siswa[6]; ?>" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td width="30%">Golongan Darah</td>
              <td width="5%">:</td>
              <td>
                <table>
                  <tr>
                    <td>
                      <?php if ($siswa[7] == "A") { ?>
                      <input type="radio" checked name="goldar" value="A">
                      <?php } else { ?>
                        <input type="radio" name="goldar" value="A">
                      <?php } ?>
                    </td>
                    <td> A</td>
                    <td width="10%"></td>
                    <td>
                      <?php if ($siswa[7] == "B") { ?>
                        <input type="radio" name="goldar" value="B" checked></td>
                      <?php } else { ?>
                        <input type="radio" name="goldar" value="B"></td>
                      <?php } ?>
                    <td> B</td>
                    <td width="10%"></td>
                    <td>
                      <?php if ($siswa[7] == "AB") { ?>
                      <input type="radio" name="goldar" value="AB" checked></td>
                      <?php } else { ?>
                        <input type="radio" name="goldar" value="AB"></td>
                      <?php } ?>
                    <td> AB</td>
                    <td width="10%"></td>
                    <td>
                      <?php if ($siswa[7] == "O") { ?>
                        <input type="radio" name="goldar" value="O" checked></td>
                      <?php } else { ?>
                        <input type="radio" name="goldar" value="O"></td>
                      <?php } ?>
                    <td> O</td>
                    <td width="20%"></td>
                    <td>Rhesus</td>
                    <td width="10%"></td>
                    <td>
                      <?php if ($siswa[8] == "+") { ?>
                      <input type="radio" checked name="rhesus" value="+"></td>
                      <?php } else { ?>
                        <input type="radio" name="rhesus" value="+"></td>
                      <?php } ?>
                    <td> +</td>
                    <td width="5%"></td>
                    <td width="5%">/</td>
                    <td>
                      <?php if ($siswa[8] == "-") { ?>
                      <input type="radio" name="rhesus" value="-" checked></td>
                      <?php } else { ?>
                        <input type="radio" name="rhesus" value="-"></td>
                      <?php } ?>
                    <td> -</td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td width="30%">No Hp(WA)/ Hp Ortu</td>
              <td width="5%">:</td>
              <td>
                <table width="100%">
                  <tr>
                    <td>
                      <input type="text" value="<?php echo $siswa[9]; ?>" name="hp1" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                    <td width="10%" style="text-align:center">/</td>
                    <td>
                      <input type="text" value="<?php echo $siswa[10]; ?>" name="hp2" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td width="30%">Pilihan Prodi di PPNS</td>
              <td width="5%">:</td>
              <td>
                <table width="100%">
                  <tr>
                    <td>1. </td>
                    <td>
                      <input type="text" value="<?php echo $siswa[11]; ?>" name="pil1" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                    <td width="10%" style="text-align:center"></td>
                    <td>2. </td>
                    <td>
                      <input type="text" value="<?php echo $siswa[12]; ?>" name="pil2" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                    <td width="10%" style="text-align:center"></td>
                    <td>3. </td>
                    <td>
                      <input type="text" value="<?php echo $siswa[13]; ?>" name="pil3" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td width="30%">Mendaftar Jalur Lain</td>
              <td width="5%">:</td>
              <td>
                <table width="100%">
                  <tr>
                    <td width="10%">
                      <?php if ($siswa[14] == '') { ?>
                        <input type="checkbox" name="jalur1" value="SBMPTN">
                      <?php } else { ?>
                        <input type="checkbox" name="jalur1" checked value="SBMPTN">
                      <?php } ?>
                    </td>
                    <td width="10%"> SBMPTN</td>
                    <td width="10%" style="text-align:center;">/</td>
                    <td width="10%">
                      <?php if ($siswa[15] == '') { ?>
                        <input type="checkbox" name="jalur2" value="SNMPTN"></td>
                      <?php } else {?>
                        <input type="checkbox" name="jalur2" checked value="SNMPTN"></td>
                      <?php } ?>
                    <td width="60%"> SNMPTN</td>
                  </tr>
                    <tr>
                      <td>Jurusan</td>
                      <td colspan="4" width="100%">
                        <input type="text" value="<?php echo $siswa[16]; ?>" name="jurusan" class="form-control" style="border-right:none; border-left:none;border-top:none">
                      </td>
                    </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td width="30%">Riwayat Pendidikan</td>
              <td width="5%">:</td>
              <td>
                <table width="100%">
                  <tr>
                    <td>SD</td>
                    <td>
                      <input type="text" value="<?php echo $siswa[17]; ?>" name="riwayat1" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                  </tr>
                    <tr>
                      <td>SMP</td>
                      <td>
                        <input type="text" value="<?php echo $siswa[18]; ?>" name="riwayat2" class="form-control" style="border-right:none; border-left:none;border-top:none">
                      </td>
                    </tr>
                    <tr>
                      <td>SMA</td>
                      <td>
                        <input type="text" value="<?php echo $siswa[19]; ?>" name="riwayat3" class="form-control" style="border-right:none; border-left:none;border-top:none">
                      </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td width="30%">Kegiatan Ekskul Saat SMP, SMU, Rumah</td>
              <td width="5%">:</td>
              <td>
                <table width="100%">
                  <tr>
                    <td>1. </td>
                    <td>
                      <input type="text" value="<?php echo $siswa[20]; ?>" name="ekskul1" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                  </tr>
                    <tr>
                      <td>2. </td>
                      <td>
                        <input type="text" value="<?php echo $siswa[21]; ?>" name="ekskul2" class="form-control" style="border-right:none; border-left:none;border-top:none">
                      </td>
                    </tr>
                    <tr>
                      <td>3. </td>
                      <td>
                        <input type="text" value="<?php echo $siswa[22]; ?>" name="ekskul3" class="form-control" style="border-right:none; border-left:none;border-top:none">
                      </td>
                  </tr>
                  <tr>
                    <td>4. </td>
                    <td>
                      <input type="text" value="<?php echo $siswa[23]; ?>" name="ekskul4" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                </tr>
                <tr>
                  <td>5. </td>
                  <td>
                    <input type="text" value="<?php echo $siswa[24]; ?>" name="ekskul5" class="form-control" style="border-right:none; border-left:none;border-top:none">
                  </td>
              </tr>
                </table>
              </td>
            </tr>
            <?php
            $result2 = mysqli_query($connect, "SELECT * FROM siswa_baru1 WHERE id = '$no'");
            while($siswa2 = mysqli_fetch_row($result2)) {
             ?>
            <tr>
              <td width="30%">Riwayat Penyakit</td>
              <td width="5%">:</td>
              <td>
                <table width="100%">
                  <tr>
                    <td>Asma </td>
                    <td width="10%" style="text-align:center;"></td>
                    <td width="5%">
                      <?php if ($siswa2[1] == "Ya") { ?>
                      <input checked type="radio" name="asma" value="Ya">
                      <?php } else { ?>
                      <input type="radio" name="asma" value="Ya">
                      <?php } ?>
                    </td>
                    <td width="5%"> Iya</td>
                    <td width="5%" style="text-align:center">/</td>
                    <td width="5%">
                      <?php if ($siswa2[1] == "Tidak") { ?>
                      <input type="radio" checked name="asma" value="Tidak">
                      <?php } else { ?>
                        <input type="radio" name="asma" value="Tidak">
                      <?php } ?>
                    </td>
                    <td> Tidak</td>
                    <td colspan="2"></td>
                  </tr>
                  <tr>
                    <td>TBC </td>
                    <td width="10%" style="text-align:center;"></td>
                    <td width="5%">
                      <?php if ($siswa2[2] == "Ya") { ?>
                        <input type="radio" name="tbc" value="Ya" checked>
                      <?php } else { ?>
                        <input type="radio" name="tbc" value="Ya">
                      <?php } ?>
                    </td>
                    <td width="5%"> Iya</td>
                    <td width="5%" style="text-align:center">/</td>
                    <td width="5%">
                      <?php if ($siswa2[2] == "Tidak") { ?>
                      <input type="radio" checked name="tbc" value="Tidak"></td>
                      <?php } else { ?>
                        <input type="radio" name="tbc" value="Tidak"></td>
                      <?php } ?>
                    <td> Tidak</td>
                    <td colspan="2"></td>
                  </tr>
                  <tr>
                    <td>Hepatitis </td>
                    <td width="10%" style="text-align:center;"></td>
                    <td width="5%">
                      <?php if ($siswa2[3] == "Ya") { ?>
                        <input type="radio" checked name="hepatitis" value="Ya">
                      <?php } else { ?>
                        <input type="radio" name="hepatitis" value="Ya">
                      <?php } ?>
                    </td>
                    <td width="5%"> Iya</td>
                    <td width="5%" style="text-align:center">/</td>
                    <td width="5%">
                      <?php if ($siswa2[3] == "Tidak") { ?>
                        <input type="radio" checked name="hepatitis" value="Tidak">
                      <?php } else { ?>
                        <input type="radio" name="hepatitis" value="Tidak">
                      <?php } ?>
                    </td>
                    <td> Tidak</td>
                    <td colspan="2"></td>
                  </tr>
                  <tr>
                    <td>Operasi </td>
                    <td width="10%" style="text-align:center;"></td>
                    <td width="5%">
                      <?php if ($siswa2[4] == "Pernah") { ?>
                        <input type="radio" name="operasi" value="Pernah" checked>
                      <?php } else { ?>
                        <input type="radio" name="operasi" value="Pernah">
                      <?php } ?>
                    </td>
                    <td width="5%"> Pernah</td>
                    <td width="5%" style="text-align:center">/</td>
                    <td width="5%">
                      <?php if ($siswa2[4] == "Tidak") { ?>
                        <input type="radio" checked name="operasi" value="Tidak">
                      <?php } else { ?>
                        <input type="radio" name="operasi" value="Tidak">
                      <?php } ?>
                    </td>
                    <td> Tidak</td>
                    <td>, Sebutkan</td>
                    <td>
                      <input type="text" value="<?php echo $siswa2[5]; ?>" name="operasi_text" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                  </tr>
                  <tr>
                    <td>Kecelakaan </td>
                    <td width="10%" style="text-align:center;"></td>
                    <td width="5%">
                      <?php if ($siswa2[6] == "Pernah") { ?>
                        <input type="radio" checked name="kecelakaan" value="Pernah">
                      <?php } else { ?>
                      <input type="radio" name="kecelakaan" value="Pernah">
                      <?php } ?>
                      </td>
                    <td width="5%"> Pernah</td>
                    <td width="5%" style="text-align:center">/</td>
                    <td width="5%">
                      <?php if ($siswa2[6] == "Tidak") { ?>
                      <input type="radio" name="kecelakaan" value="Tidak" checked>
                      <?php } else { ?>
                        <input type="radio" name="kecelakaan" value="Tidak">
                      <?php } ?>
                    </td>
                    <td> Tidak</td>
                    <td>, Sebutkan</td>
                    <td>
                      <input type="text" value="<?php echo $siswa2[7]; ?>" name="kecelakaan_text" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                  </tr>
                  <tr>
                    <td>Opname RS </td>
                    <td width="10%" style="text-align:center;"></td>
                    <td width="5%">
                      <?php if ($siswa2[8] == "Pernah") { ?>
                        <input type="radio" checked name="opname" value="Pernah">
                      <?php } else { ?>
                        <input type="radio" name="opname" value="Pernah">
                      <?php } ?>
                    </td>
                    <td width="5%"> Pernah</td>
                    <td width="5%" style="text-align:center">/</td>
                    <td width="5%">
                      <?php if ($siswa2[8] == "Tidak") { ?>
                        <input type="radio" name="opname" value="Tidak" checked>
                      <?php } else { ?>
                        <input type="radio" name="opname" value="Tidak">
                      <?php } ?>
                    </td>
                    <td> Tidak</td>
                    <td>, Sebutkan</td>
                    <td>
                      <input value="<?php echo $siswa2[9]; ?>" type="text" name="opname_text" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                  </tr>
                  <tr>
                    <td>Maag </td>
                    <td width="10%" style="text-align:center;"></td>
                    <td width="5%">
                      <?php if ($siswa2[10] == "Ya") { ?>
                        <input type="radio" name="maag" value="Ya" checked>
                      <?php } else { ?>
                        <input type="radio" name="maag" value="Ya">
                      <?php } ?>
                    </td>
                    <td width="5%"> Iya</td>
                    <td width="5%" style="text-align:center">/</td>
                    <td width="5%">
                      <?php if ($siswa2[10] == "Tidak") { ?>
                        <input type="radio" checked name="maag" value="Tidak">
                      <?php } else { ?>
                        <input type="radio" name="maag" value="Tidak">
                      <?php } ?>
                    </td>
                    <td colspan="2">Tidak</td>
                  </tr>
                  <tr>
                    <td>Epilepsi / Ayan </td>
                    <td width="10%" style="text-align:center;"></td>
                    <td width="5%">
                      <?php if ($siswa2[11] == "1") { ?>
                        <input type="radio" name="epilepsi" value="1" checked>
                      <?php } else { ?>
                        <input type="radio" name="epilepsi" value="1">
                      <?php } ?>
                    </td>
                    <td width="5%"> Iya</td>
                    <td width="5%" style="text-align:center">/</td>
                    <td width="5%">
                      <?php if ($siswa2[11] == "0") { ?>
                        <input type="radio" checked name="epilepsi" value="0">
                      <?php } else { ?>
                        <input type="radio" name="epilepsi" value="0">
                      <?php } ?>
                    </td>
                    <td colspan="2">Tidak</td>
                  </tr>
                </table>
              </tr>
              <tr>
                <td width="30%">Olahraga</td>
                <td width="5%">:</td>
                <td>
                  <table width="100%">
                    <tr>
                      <td width="5%">
                        <?php if ($siswa2[12] == "<1x/pekan") { ?>
                          <input type="radio" checked name="olahraga" value="<1x/pekan">
                        <?php } else { ?>
                          <input type="radio" name="olahraga" value="<1x/pekan">
                        <?php } ?>
                      </td>
                      <td width="10%"> <1x/Pekan</td>
                      <td width="5%"></td>
                      <td width="5%">
                        <?php if ($siswa2[12] == "1-2x/pekan") { ?>
                          <input type="radio" name="olahraga" value="1-2x/pekan" checked>
                        <?php } else { ?>
                          <input type="radio" name="olahraga" value="1-2x/pekan">
                        <?php } ?>
                      </td>
                      <td width="10%"> 1-2x/pekan</td>
                      <td width="5%"></td>
                      <td width="5%">
                        <?php if ($siswa2[12] == ">2x/pekan") { ?>
                          <input type="radio" name="olahraga" value=">2x/pekan" checked>
                        <?php } else { ?>
                          <input type="radio" name="olahraga" value=">2x/pekan">
                        <?php } ?>
                      </td>
                      <td width="10%"> >2pekan</td>
                      <td colspan="2"></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td width="30%">Kosumsi Buah / Sayur</td>
                <td width="5%">:</td>
                <td>
                  <table width="100%">
                    <tr>
                      <td width="3%">
                        <?php if ($siswa2[13] == "setiap hari") { ?>
                          <input type="radio" checked name="buah" value="setiap hari">
                        <?php } else { ?>
                          <input type="radio" name="buah" value="setiap hari">
                        <?php } ?>
                      </td>
                      <td width="9%"> setiap hari</td>
                      <td width="2%">
                        <?php if ($siswa2[13] == "2hr/sekali") { ?>
                        <input type="radio" name="buah" value="2hr/sekali" checked>
                        <?php } else { ?>
                          <input type="radio" name="buah" value="2hr/sekali">
                        <?php } ?>
                      </td>
                      <td width="10%"> 2hr/sekali</td>
                      <td width="5%">
                        <?php if ($siswa2[13] == ">3-6hr/sekali") { ?>
                          <input type="radio" name="buah" value=">3-6hr/sekali" checked>
                        <?php } else { ?>
                          <input type="radio" name="buah" value=">3-6hr/sekali">
                        <?php } ?>
                      </td>
                      <td width="10%"> 3-6hr/sekali</td>
                      <td width="5%"></td>
                      <td width="5%">
                        <?php if ($siswa2[13] == "1x/pekan") { ?>
                          <input type="radio" name="buah" value="1x/pekan" checked>
                        <?php } else { ?>
                          <input type="radio" name="buah" value="1x/pekan">
                        <?php } ?>
                      </td>
                      <td width="10%">1x/pekan</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td width="30%">Merokok</td>
                <td width="5%">:</td>
                <td>
                  <table width="100%">
                    <tr>
                      <td width="4%">
                        <?php if ($siswa2[14] == "1") { ?>
                          <input type="radio" name="rokok" value="1" checked>
                        <?php } else { ?>
                          <input type="radio" name="rokok" value="1">
                        <?php } ?>
                      </td>
                      <td width="4%"> Iya</td>
                      <td width="5%"></td>
                      <td width="2%">
                        <?php if ($siswa2[14] == "0") { ?>
                          <input type="radio" checked name="rokok" value="0">
                        <?php } else { ?>
                          <input type="radio" name="rokok" value="0">
                        <?php } ?>
                      </td>
                      <td width="5%"> Tidak</td>
                      <td width="5%"></td>
                      <td width="10%"> Batang/perhari</td>
                      <td width="25%">
                        <input type="text" value="<?php echo $siswa2[15]; ?>" name="batang" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td width="30%">Rata - Rata Jam</td>
                <td width="5%">:</td>
                <td>
                  <table width="100%">
                    <tr>
                      <td width="4%"> Tidur </td>
                      <td width="4%">
                        <input type="text" value="<?php echo $siswa2[16]; ?>" name="tidur" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="4%">
                        <?php if ($siswa2[17] == "WIB") { ?>
                          <input type="radio" checked name="waktu1" value="WIB">
                        <?php } else { ?>
                          <input type="radio" name="waktu1" value="WIB">
                        <?php } ?>
                      </td>
                      <td width="4%"> WIB</td>
                      <td width="5%">/</td>
                      <td width="2%">
                        <?php if ($siswa2[17] == "WITA") { ?>
                          <input type="radio" name="waktu1" value="WITA" checked>
                        <?php } else { ?>
                          <input type="radio" name="waktu1" value="WITA">
                        <?php } ?>
                      </td>
                      <td width="5%"> WITA</td>
                      <td width="5%">/</td>
                      <td width="2%">
                        <?php if ($siswa2[17] == "WIT") { ?>
                          <input type="radio" name="waktu1" value="WIT" checked>
                        <?php } else { ?>
                          <input type="radio" name="waktu1" value="WIT">
                        <?php } ?>
                      </td>
                      <td width="5%"> WIT</td>
                    </tr>
                    <tr>
                      <td width="4%"> Bangun </td>
                      <td width="4%">
                        <input type="text" value=<?php echo $row[18]; ?> name="bangun" class="form-control" style="border-right:none; border-left:none;border-top:none">
                      </td>
                      <td width="5%"></td>
                      <td width="4%">
                        <?php if ($siswa2[19] == "WIB") { ?>
                          <input type="radio" checked name="waktu2" value="WIB">
                        <?php } else { ?>
                          <input type="radio" name="waktu2" value="WIB">
                        <?php } ?>
                      </td>
                      <td width="4%"> WIB</td>
                      <td width="5%">/</td>
                      <td width="2%">
                        <?php if ($siswa2[19] == "WITA") { ?>
                          <input type="radio" name="waktu2" value="WITA" checked>
                        <?php } else { ?>
                          <input type="radio" name="waktu2" value="WITA">
                        <?php } ?>
                      </td>
                      <td width="5%"> WITA</td>
                      <td width="5%">/</td>
                      <td width="2%">
                        <?php if ($siswa2[19] == "WIT") { ?>
                          <input type="radio" name="waktu2" value="WIT" checked>
                        <?php } else { ?>
                          <input type="radio" name="waktu2" value="WIT">
                        <?php } ?>
                      </td>
                      <td width="5%"> WIT</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td width="30%">Media Sosial</td>
                <td width="5%">:</td>
                <td width="65%">
                  <table>
                    <tr>
                      <td>Facebook</td>
                      <td width="40%"><input value="<?php echo $siswa2[20]; ?>" type="text" name="facebook" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="10%"></td>
                      <td>Instagram</td>
                      <td width="40%"><input value="<?php echo $siswa2[21]; ?>" type="text" name="instagram" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td width="30%">Kepersetaan BPJS</td>
                <td width="5%">:</td>
                <td width="65%">
                  <table>
                    <tr>
                      <td width="4%">
                        <?php if ($siswa2[22] == "Iya") { ?>
                          <input type="radio" name="bpjs" checked value="Iya">
                        <?php } else { ?>
                          <input type="radio" name="bpjs" value="Iya">
                        <?php } ?>
                      </td>
                      <td width="4%"> Iya</td>
                      <td width="5%">/</td>
                      <td width="2%">
                        <?php if ($siswa2[22] == "Tidak") { ?>
                          <input type="radio" name="bpjs" value="Tidak" checked>
                        <?php } else { ?>
                          <input type="radio" name="bpjs" value="Tidak">
                        <?php } ?>
                      </td>
                      <td width="5%"> Tidak</td>
                      <td width="5%"></td>
                      <td width="10%">Faskes 1</td>
                      <td><input type="text" value="<?php echo $siswa2[23]; ?>" name="faskes" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <?php
              $result3 = mysqli_query($connect, "SELECT * FROM siswa_baru2 WHERE id = '$no'");
              while($siswa3 = mysqli_fetch_row($result3)) {
               ?>
              <tr>
                <td width="30%">Nama Ayah (Gelar)</td>
                <td width="5%">:</td>
                <td width="65%">
                  <table>
                    <tr>
                      <td width="30%"><input value="<?php echo $siswa3[1]; ?>" type="text" name="ayah" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="15%">Tanggal Lahir :</td>
                      <td width="20"><input value="<?php echo $siswa3[2]; ?>" type="date" name="tgl_lahir_ayah" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td width="30%">Pekerjaan Ayah</td>
                <td width="5%">:</td>
                <td width="65%">
                  <input type="text" value="<?php echo $siswa3[3]; ?>" name="pekerjaan_ayah" class="form-control" style="border-right:none; border-left:none;border-top:none">
                </td>
              </tr>
              <tr>
                <td width="30%">Riwayat Penyakit Ayah</td>
                <td width="5%">:</td>
                <td width="65%">
                  <table>
                    <tr>
                      <td width="30%"><input value="<?php echo $siswa3[4]; ?>" type="text" name="riwayat_ayah" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="15%">Goldar :</td>
                      <td width="20"><input type="text"  value="<?php echo $siswa3[5]; ?>" name="goldar_ayah" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td width="30%">Nama Ibu (Gelar)</td>
                <td width="5%">:</td>
                <td width="65%">
                  <table>
                    <tr>
                      <td width="30%"><input value="<?php echo $siswa3[6]; ?>" type="text" name="ibu" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="15%">Tanggal Lahir :</td>
                      <td width="20"><input type="date"  value="<?php echo $siswa3[7]; ?>" name="tgl_lahir_ibu" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td width="30%">Pekerjaan Ibu</td>
                <td width="5%">:</td>
                <td width="65%">
                  <input type="text" name="pekerjaan_ibu" value="<?php echo $siswa3[8]; ?>" class="form-control" style="border-right:none; border-left:none;border-top:none">
                </td>
              </tr>
              <tr>
                <td width="30%">Riwayat Penyakit Ibu</td>
                <td width="5%">:</td>
                <td width="65%">
                  <table>
                    <tr>
                      <td width="30%"><input value="<?php echo $siswa3[9]; ?>" type="text" name="riwayat_ibu" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="15%">Goldar :</td>
                      <td width="20"><input type="text" value="<?php echo $siswa3[10]; ?>" name="goldar_ibu" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td width="30%">Penghasilan Keluarga per Bulan</td>
                <td width="5%">:</td>
                <td width="65%">
                  <table>
                    <tr>
                      <td>
                        <?php if ($siswa3[11] == "< Rp. 1.500.000,-") { ?>
                          <input type="radio" name="penghasilan" checked value="< Rp. 1.500.000,-">
                        <?php } else { ?>
                          <input type="radio" name="penghasilan" value="< Rp. 1.500.000,-">
                        <?php } ?>
                      </td>
                      <td width="10%"></td>
                      <td>< Rp. 1.500.000,-</td>
                    </tr>
                    <tr>
                      <td>
                        <?php if ($siswa3[11] == "Rp. 1.500.001 - 3.000.000,-") { ?>
                          <input type="radio" name="penghasilan" value="Rp. 1.500.001 - 3.000.000,-" checked>
                        <?php } else { ?>
                          <input type="radio" name="penghasilan" value="Rp. 1.500.001 - 3.000.000,-">
                        <?php } ?>
                      </td>
                      <td width="10%"></td>
                      <td>Rp. 1.500.001 - 3.000.000,-</td>
                    </tr>
                    <tr>
                      <td>
                        <?php if ($siswa3[11] == "Rp. 3.000.001 - 5.000.000,-") { ?>
                        <input type="radio" name="penghasilan" value="Rp. 3.000.001 - 5.000.000,-" checked>
                        <?php } else { ?>
                          <input type="radio" name="penghasilan" value="Rp. 3.000.001 - 5.000.000,-">
                        <?php } ?>
                      </td>
                      <td width="10%"></td>
                      <td>Rp. 3.000.001 - 5.000.000,-</td>
                    </tr>
                    <tr>
                      <td>
                        <?php if ($siswa3[11] == "Rp 5.000.000 - 10.000.000,-") { ?>
                          <input type="radio" name="penghasilan" value="Rp 5.000.000 - 10.000.000,-" checked>
                        <?php } else { ?>
                          <input type="radio" name="penghasilan" value="Rp 5.000.000 - 10.000.000,-">
                        <?php } ?>
                      </td>
                      <td width="10%"></td>
                      <td>Rp 5.000.000 - 10.000.000,-</td>
                    </tr>
                    <tr>
                      <td>
                        <?php if ($siswa3[11] == "> Rp. 10.000.000,-") { ?>
                        <input type="radio" name="penghasilan" value="> Rp. 10.000.000,-" checked>
                        <?php } else { ?>
                          <input type="radio" name="penghasilan" value="> Rp. 10.000.000,-">
                        <?php } ?>
                      </td>
                      <td width="10%"></td>
                      <td>> Rp. 10.000.000,-</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td width="30%">Data Saudara</td>
                <td width="5%">:</td>
                <td width="65%">
                  <table>
                    <tr>
                      <td width="10%">Nama :</td>
                      <td width="20%"><input value="<?php echo $siswa3[12]; ?>" type="text" name="nama_saudara_1" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="10%">Tgl Lahir</td>
                      <td width="10%"><input value="<?php echo $siswa3[13]; ?>" type="date" name="tgl_lahir_saudara_1" class="form-control" style="border-right:none; border-left:none;border-top:none"> </td>
                      <td width="5%"></td>
                      <td width="10%">Goldar :</td>
                      <td width="10"><input value="<?php echo $siswa3[14]; ?>" type="text" name="goldar_saudara_1" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                    <tr>
                      <td width="10%">Nama :</td>
                      <td width="20%"><input value="<?php echo $siswa3[15]; ?>" type="text" name="nama_saudara_2" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="10%">Tgl Lahir</td>
                      <td width="10%"><input value="<?php echo $siswa3[16]; ?>" type="date" name="tgl_lahir_saudara_2" class="form-control" style="border-right:none; border-left:none;border-top:none"> </td>
                      <td width="5%"></td>
                      <td width="10%">Goldar :</td>
                      <td width="10"><input value="<?php echo $siswa3[17]; ?>" type="text" name="goldar_saudara_2" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                    <tr>
                      <td width="10%">Nama :</td>
                      <td width="20%"><input value="<?php echo $siswa3[18]; ?>" type="text" name="nama_saudara_3" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="10%">Tgl Lahir</td>
                      <td width="10%"><input value="<?php echo $siswa3[19]; ?>" type="date" name="tgl_lahir_saudara_3" class="form-control" style="border-right:none; border-left:none;border-top:none"> </td>
                      <td width="5%"></td>
                      <td width="10%">Goldar :</td>
                      <td width="10"><input value="<?php echo $siswa3[20]; ?>" type="text" name="goldar_saudara_3" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                    <tr>
                      <td width="10%">Nama :</td>
                      <td width="20%"><input value="<?php echo $siswa3[21]; ?>" type="text" name="nama_saudara_4" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="10%">Tgl Lahir</td>
                      <td width="10%"><input value="<?php echo $siswa3[22]; ?>" type="date" name="tgl_lahir_saudara_4" class="form-control" style="border-right:none; border-left:none;border-top:none"> </td>
                      <td width="5%"></td>
                      <td width="10%">Goldar :</td>
                      <td width="10"><input value="<?php echo $siswa3[23]; ?>" type="text" name="goldar_saudara_4" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                    <tr>
                      <td width="10%">Nama :</td>
                      <td width="20%"><input value="<?php echo $siswa3[24]; ?>" type="text" name="nama_saudara_5" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="10%">Tgl Lahir</td>
                      <td width="10%"><input value="<?php echo $siswa3[25]; ?>" type="date" name="tgl_lahir_saudara_5" class="form-control" style="border-right:none; border-left:none;border-top:none"> </td>
                      <td width="5%"></td>
                      <td width="10%">Goldar :</td>
                      <td width="10"><input value="<?php echo $siswa3[26]; ?>" type="text" name="goldar_saudara_5" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                  </table>
                </td>
              </tr>
          </table>

          <div class="form-group">
            <h5><b><u>2. DATA TES KESEHATAN DIISI PEMERIKSA (KLINIK PPNS)</u></b></h5>
          </div>
          <?php
          $result4 = mysqli_query($connect, "SELECT * FROM siswa_baru3 WHERE id = '$no'");
          while($siswa4 = mysqli_fetch_row($result4)) {
           ?>
          <div class="form-group">
            <table class="" border="1" style="text-align:center">
              <tr>
                <td>
                  Berat Badan<br>
                  <input type="text" value="<?php echo $siswa4[1]; ?>" onchange="bmi()" id="bb" name="bb" class="form-control" style="text-align:center;border-right:none; border-left:none;border-top:none">
                </td>
                <td>
                  Tinggi Badan<br>
                  <input type="text"  value="<?php echo $siswa4[2]; ?>" onchange="bmi()" id="tb" name="tb" class="form-control" style="text-align:center;border-right:none; border-left:none;border-top:none">
                </td>
                <td>
                  BMI<br>
                  <p id="bmi"><?php echo $siswa4[3]; ?></p>
                </td>
                <td>
                  Tekanan Darah<br>
                  <input type="text" value="<?php echo $siswa4[4]; ?>" name="tkd" class="form-control" style="text-align:center;border-right:none; border-left:none;border-top:none">
                </td>
                <td>
                  Nadi Awal<br>
                <input type="text" value="<?php echo $siswa4[5]; ?>" name="nadi_awal" class="form-control" style="text-align:center;border-right:none; border-left:none;border-top:none">
              </td>
              </tr>
              <tr>
                <td>
                  Buta Warna<br>
                  <table align="center">
                    <tr>
                      <td width="15%"></td>
                      <td>
                        <?php if ($siswa4[6] == "+") { ?>
                        <input type="radio" name="bw" value="+" checked>
                        <?php } else { ?>
                          <input type="radio" name="bw" value="+">
                        <?php } ?>
                      </td>
                      <td>+</td>
                      <td width="20%"></td>
                      <td>
                        <?php if ($siswa4[6] == "-") { ?>
                        <input type="radio" name="bw" value="-" checked>
                        <?php } else { ?>
                          <input type="radio" name="bw" value="-">
                        <?php } ?>
                      </td>
                      <td>-</td>
                    </tr>
                  </table>
                </td>
                <td>
                  Havard, Step Test<br>
                  <table>
                    <tr>
                      <td><input value="<?php echo $siswa4[7]; ?>" type="text" name="st1" class="form-control" style="text-align:right;border-right:none; border-left:none;border-top:none"></td>
                      <td width="10px">,</td>
                      <td><input value="<?php echo $siswa4[8]; ?>" type="text" name="st2" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                  </table>
                </td>
                <td>
                  Sp02<br>
                  <input type="text" value="<?php echo $siswa4[9]; ?>" name="sp02" class="form-control" style="text-align:center;border-right:none; border-left:none;border-top:none">
                </td>
                <td colspan="2">
                  Visus<br>
                  <table align="center">
                    <tr>
                      <td width="15%"></td>
                      <td>
                        <?php if ($siswa4[10] == "OD") { ?>
                          <input type="radio" name="visus" value="OD" checked>
                        <?php } else { ?>
                          <input type="radio" name="visus" value="OD">
                        <?php } ?>
                      </td>
                      <td>OD</td>
                      <td width="20%"></td>
                      <td>
                        <?php if ($siswa4[10] == "OS") { ?>
                          <input type="radio" name="visus" value="OS" checked>
                        <?php } else { ?>
                          <input type="radio" name="visus" value="OS">
                        <?php } ?>
                      </td>
                      <td>OS</td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
            <table border="1" width="100%">
              <tr style="text-align:center">
                <td width="35%">Pemeriksaan</td>
                <td colspan="4">Kelainan</td>
                <td width="35%">Keterangan</td>
              </tr>
            </table>
            <table border="0" style="border:solid thin #242424;" cellpadding="10px;" width="100%">
              <tr>
                <td width="39%" style="padding-left:8px;">Kesadaran / Keadaan Umum</td>
                <td>
                  <?php if ($siswa4[11] == "Normal") { ?>
                  <input type="radio" name="umum" checked value="Normal" checked>
                  <?php } else { ?>
                    <input type="radio" name="umum" value="Normal">
                  <?php } ?>
                </td>
                <td>Normal</td>
                <td>
                  <?php if ($siswa4[11] == "Tidak Normal") { ?>
                    <input type="radio" checked name="umum" value="Tidak Normal">
                  <?php } else { ?>
                    <input type="radio" name="umum" value="Tidak Normal">
                  <?php } ?>
                </td>
                <td>Tidak Normal</td>
                <td width="35%">
                  <!-- <input value="<?php echo $siswa4[12]; ?>" style="border-right:none; border-left:none;border-top:none" name="ket_umum" class="form-control"> -->
          </td>
              </tr>
              <tr>
                <td colspan="5" style="padding-left:8px;"><b>Kepala</b></td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Mata</td>
                <td>
                  <?php if($siswa4[12] == "-")  {?>
                  <input type="radio" name="mata" checked value="-">
                  <?php } else { ?>
                    <input type="radio" name="mata" value="-">
                  <?php } ?>
                </td>
                <td>-</td>
                <td>
                  <?php if($siswa4[12] == "+")  {?>
                  <input type="radio" name="mata" value="+" checked>
                  <?php } else { ?>
                    <input type="radio" name="mata" value="+">
                  <?php } ?>
                  </td>
                <td>+</td>
                <td width="35%">
                  <input value="<?php echo $siswa4[13]; ?>" style="border-right:none; border-left:none;border-top:none" name="ket_mata" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Hidung</td>
                <td>
                  <?php if($siswa4[14] == "-")  {?>
                    <input type="radio" name="hidung" checked value="-">
                  <?php } else { ?>
                    <input type="radio" name="hidung"  value="-">
                  <?php } ?>
                  </td>
                <td>Polip -</td>
                <td>
                  <?php if($siswa4[14] == "+")  {?>
                    <input type="radio" name="hidung" value="+" checked>
                  <?php } else { ?>
                    <input type="radio" name="hidung" value="+">
                  <?php } ?>
                  </td>
                <td>Polip +</td>
                <td width="35%">
                  <input value="<?php echo $siswa4[15]; ?>"   style="border-right:none; border-left:none;border-top:none" name="ket_hidung" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Mulut / Tonsil</td>
                <td>
                  <?php if($siswa4[16] == "Paringitis -")  {?>
                    <input type="radio" name="mulut_1" checked value="Paringitis -">
                  <?php } else { ?>
                    <input type="radio" name="mulut_1" value="Paringitis -">
                  <?php } ?>
                  </td>
                <td>Paringitis -</td>
                <td>
                  <?php if($siswa4[16] == "Paringitis +")  {?>
                   <input type="radio" name="mulut_1" checked value="Paringitis +">
                  <?php } else { ?>
                    <input type="radio" name="mulut_1" value="Paringitis +">
                  <?php } ?>
                  </td>
                <td>Paringitis +</td>
                <td width="35%">
                  <input value="<?php echo $siswa4[18]; ?>" style="border-right:none; border-left:none;border-top:none" name="ket_paring" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;"></td>
                <td>
                  <?php if($siswa4[17] == "Tonsilitis -")  {?>
                   <input type="radio" name="mulut_2" checked value="Tonsilitis -">
                  <?php } else { ?>
                    <input type="radio" name="mulut_2"  value="Tonsilitis -">
                  <?php } ?>
                  </td>
                <td>Tonsilitis -</td>
                <td>
                  <?php if($siswa4[17] == "Tonsilitis +")  {?>
                   <input type="radio" name="mulut_2" value="Tonsilitis +" checked>
                  <?php } else { ?>
                    <input type="radio" name="mulut_2" value="Tonsilitis +">
                  <?php } ?>
                  </td>
                <td>Tonsilitis +</td>
                <td width="35%">
                  <input value="<?php echo $siswa4[19]; ?>"  style="border-right:none; border-left:none;border-top:none" name="ket_tonsi" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Telinga / Pendengaran</td>
                <td>
                  <?php if($siswa4[20] == "-")  {?>
                     <input type="radio" name="telinga" checked value="-">
                  <?php } else { ?>
                    <input type="radio" name="telinga" value="-">
                  <?php } ?>
                  </td>
                <td>-</td>
                <td>
                  <?php if($siswa4[20] == "+")  {?>
                    <input type="radio" name="telinga" value="+" checked>
                  <?php } else { ?>
                    <input type="radio" name="telinga" value="+">
                  <?php } ?>
                 </td>
                <td>+</td>
                <td width="35%">
                  <input value="<?php echo $siswa4[21]; ?>" style="border-right:none; border-left:none;border-top:none" name="ket_telinga" class="form-control">
                </td>
              </tr>
              <tr>
                <td colspan="5" style="padding-left:8px;"><b>Leher</b></td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Kel. Tiroid / dengan palpasi</td>
                <td>
                  <?php if($siswa4[22] == "-")  {?>
                    <input type="radio" name="tiroid" checked value="-">
                  <?php } else { ?>
                    <input type="radio" name="tiroid" value="-">
                  <?php } ?>
                </td>
                <td>-</td>
                <td>
                  <?php if($siswa4[22] == "+")  {?>
                    <input type="radio" name="tiroid" value="+" checked>
                  <?php } else { ?>
                    <input type="radio" name="tiroid" value="+">
                  <?php } ?>
                 </td>
                <td>+</td>
                <td width="35%">
                  <input value="<?php echo $siswa4[23]; ?>"  style="border-right:none; border-left:none;border-top:none" name="ket_tiroid" class="form-control">
                </td>
              </tr>
              <tr>
                <td colspan="5" style="padding-left:8px;"><b>Thoraks</b></td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Paru / dengan auskultasi</td>
                <td>
                  <?php if($siswa4[24] == "-")  {?>
                   <input type="radio" name="paru" value="-" checked>
                  <?php } else { ?>
                    <input type="radio" name="paru" value="-">
                  <?php } ?>
                </td>
                <td>Rh -</td>
                <td>
                  <?php if($siswa4[24] == "+")  {?>
                   <input type="radio" name="paru" value="+" checked>
                  <?php } else { ?>
                    <input type="radio" name="paru" value="+">
                  <?php } ?>
                  </td>
                <td>Rh +</td>
                <td width="35%" rowspan="2">
                  <input value="<?php echo $siswa4[25]; ?>"  style="border-right:none; border-left:none;border-top:none" name="ket_paru" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;"></td>
                <td>
                  <?php if($siswa4[26] == "-")  {?>
                    <input type="radio" name="wh" value="-" checked>
                  <?php } else { ?>
                    <input type="radio" name="wh" value="-">
                  <?php } ?>
                 </td>
                <td>Wh -</td>
                <td>
                  <?php if($siswa4[26] == "+")  {?>
                    <input type="radio" name="wh" value="+" checked>
                  <?php } else { ?>
                    <input type="radio" name="wh" value="+">
                  <?php } ?>
                 </td>
                <td>Wh +</td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Jantung / dengan auskultasi</td>
                <td>
                  <?php if($siswa4[27] == "-")  {?>
                    <input type="radio" name="murmur" value="-" checked>
                  <?php } else { ?>
                    <input type="radio" name="murmur" value="-">
                  <?php } ?>
                 </td>
                <td>Murmur -</td>
                <td>
                  <?php if($siswa4[27] == "+")  {?>
                    <input type="radio" name="murmur" value="+" checked>
                  <?php } else { ?>
                    <input type="radio" name="murmur" value="+">
                  <?php } ?>
                 </td>
                <td>Murmur +</td>
                <td width="35%">
                  <input value="<?php echo $siswa4[28]; ?>" rowspan="2" style="border-right:none; border-left:none;border-top:none" name="ket_mur" class="form-control">
                </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <?php if($siswa4[29] == "-")  {?>
                    <input type="radio" name="galop" value="-" checked>
                  <?php } else { ?>
                    <input type="radio" name="galop" value="-">
                  <?php } ?>
                 </td>
                <td>Gallop -</td>
                <td>
                  <?php if($siswa4[29] == "+")  {?>
                    <input type="radio" name="galop" value="+" checked>
                  <?php } else { ?>
                    <input type="radio" name="galop" value="+">
                  <?php } ?>
                 </td>
                <td>Gallop +</td>
              </tr>
              <tr>
                <td colspan="5" style="padding-left:8px;"><b>Abdomen</b></td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Hepar / dengan palpasi</td>
                <td>
                  <?php if($siswa4[30] == "Teraba")  {?>
                   <input type="radio" name="hepar" value="Teraba" checked>
                  <?php } else { ?>
                    <input type="radio" name="hepar" value="Teraba">
                  <?php } ?>
                   </td>
                <td>Teraba</td>
                <td>
                  <?php if($siswa4[30] == "Tidak Teraba")  {?>
                    <input type="radio" name="hepar" value="Tidak Teraba" checked>
                  <?php } else { ?>
                    <input type="radio" name="hepar" value="Tidak Teraba">
                  <?php } ?>
                 </td>
                <td>Tidak Teraba</td>
                <td width="35%">
                  <input value="<?php echo $siswa4[31]; ?>"  style="border-right:none; border-left:none;border-top:none" name="ket_hepar" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Lien / dengan palpasi</td>
                <td>
                  <?php if($siswa4[32] == "Teraba")  {?>
                    <input type="radio" name="lien" value="Teraba" checked>
                  <?php } else { ?>
                    <input type="radio" name="lien" value="Teraba">
                  <?php } ?>
                 </td>
                <td>Teraba</td>
                <td>
                  <?php if($siswa4[32] == "Tidak Teraba")  {?>
                    <input type="radio" name="lien" value="Tidak Teraba" checked>
                  <?php } else { ?>
                    <input type="radio" name="lien" value="Tidak Teraba">
                  <?php } ?>
                 </td>
                <td>Tidak Teraba</td>
                <td width="35%">
                  <input value="<?php echo $siswa4[33]; ?>" style="border-right:none; border-left:none;border-top:none" name="ket_lien" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:8px;">Genitalia / dengan anamnesa</td>
                <td>
                  <?php if($siswa4[34] == "-")  {?>
                    <input type="radio" name="geni" value="-" checked>
                  <?php } else { ?>
                    <input type="radio" name="geni" value="-">
                  <?php } ?>
                 </td>
                <td>-</td>
                <td>
                  <?php if($siswa4[34] == "+")  {?>
                    <input type="radio" name="geni" value="+" checked>
                  <?php } else { ?>
                    <input type="radio" name="geni" value="+">
                  <?php } ?>
                 </td>
                <td>+</td>
                <td width="35%">
                  <input value="<?php echo $siswa4[35]; ?>"  style="border-right:none; border-left:none;border-top:none" name="ket_geni" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:8px;">Anus / dengan palpasi</td>
                <td>
                  <?php if($siswa4[36] == "-")  {?>
                    <input type="radio" name="haemorhoid" value="-" checked>
                  <?php } else { ?>
                    <input type="radio" name="haemorhoid" value="-">
                  <?php } ?>
                 </td>
                <td>Haemorhoid -</td>
                <td>
                  <?php if($siswa4[36] == "+")  {?>
                    <input type="radio" name="haemorhoid" value="+" checked>
                  <?php } else { ?>
                    <input type="radio" name="haemorhoid" value="+">
                  <?php } ?>
                 </td>
                <td>Haemorhoid +</td>
                <td rowspan="3" width="35%">
                  <input value="<?php echo $siswa4[39]; ?>" style="border-right:none; border-left:none;border-top:none" name="ket_hepar" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;"></td>
                <td>
                  <?php if($siswa4[37] == "-")  {?>
                    <input type="radio" name="fistul" value="-" checked>
                  <?php } else { ?>
                    <input type="radio" name="fistul" value="-">
                  <?php } ?>
                 </td>
                <td>Fistul -</td>
                <td>
                  <?php if($siswa4[37] == "+")  {?>
                    <input type="radio" name="fistul" value="+" checked>
                  <?php } else { ?>
                    <input type="radio" name="fistul" value="+">
                  <?php } ?>
                 </td>
                <td>Fistul +</td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;"></td>
                <td>
                  <?php if($siswa4[38] == "-")  {?>
                    <input type="radio" name="abses" value="-" checked>
                  <?php } else { ?>
                    <input type="radio" name="abses" value="-">
                  <?php } ?>
                 </td>
                <td>Abses -</td>
                <td>
                  <?php if($siswa4[38] == "+")  {?>
                    <input type="radio" name="abses" value="+" checked>
                  <?php } else { ?>
                    <input type="radio" name="abses" value="+">
                  <?php } ?>
                 </td>
                <td>Abses +</td>
              </tr>
              <tr>
                <td colspan="5" style="padding-left:8px;"><b>Ekstremitas</b></td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Tangan</td>
                <td>
                  <?php if($siswa4[41] == "Normal")  {?>
                    <input type="radio" name="eks_tangan" value="Normal" checked>
                  <?php } else { ?>
                    <input type="radio" name="eks_tangan" value="Normal">
                  <?php } ?>
                 </td>
                <td>Normal</td>
                <td>
                  <?php if($siswa4[41] == "Tidak Normal")  {?>
                    <input type="radio" name="eks_tangan" value="Tidak Normal" checked>
                  <?php } else { ?>
                    <input type="radio" name="eks_tangan" value="Tidak Normal">
                  <?php } ?>
                 </td>
                <td>Tidak Normal</td>
                <td width="35%">
                  <!-- <input value="<?php echo $siswa4[42]; ?>"  style="border-right:none; border-left:none;border-top:none" name="ket_tangan" class="form-control"> -->
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Kaki / Refleks Patologis</td>
                <td>
                  <?php if($siswa4[42] == "Normal")  {?>
                    <input type="radio" name="kaki_refleks" value="Normal" checked>
                  <?php } else { ?>
                    <input type="radio" name="kaki_refleks" value="Normal">
                  <?php } ?>
                 </td>
                <td>Normal</td>
                <td>
                  <?php if($siswa4[42] == "Tidak Normal")  {?>
                    <input type="radio" name="kaki_refleks" value="Tidak Normal" checked>
                  <?php } else { ?>
                    <input type="radio" name="kaki_refleks" value="Tidak Normal">
                  <?php } ?>
                 </td>
                <td>Tidak Normal</td>
                <td width="35%">
                  <!-- <input value="<?php echo $siswa4[44]; ?>"  style="border-right:none; border-left:none;border-top:none" name="ket_tangan" class="form-control"> -->
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Kaki / Ederma</td>
                <td>
                  <?php if($siswa4[43] == "Normal")  {?>
                    <input type="radio" name="kaki_ederma" value="Normal" checked>
                  <?php } else { ?>
                    <input type="radio" name="kaki_ederma" value="Normal">
                  <?php } ?>
                 </td>
                <td>Normal</td>
                <td>
                  <?php if($siswa4[43] == "Tidak Normal")  {?>
                    <input type="radio" name="kaki_ederma" value="Tidak Normal" checked>
                  <?php } else { ?>
                    <input type="radio" name="kaki_ederma" value="Tidak Normal">
                  <?php } ?>
                 </td>
                <td>Tidak Normal</td>
                <td width="35%">
                  <!-- <input value="<?php echo $siswa4[46]; ?>" style="border-right:none; border-left:none;border-top:none" name="ket_kaki" class="form-control"> -->
                </td>
              </tr>
              <tr>
                <td colspan="8">&nbsp;</td>
              </tr>
            </table>
            <?php
            $result5 = mysqli_query($connect, "SELECT * FROM siswa_baru4 WHERE id = '$no'");
            while($siswa5 = mysqli_fetch_row($result5)) {
             ?>
          <div class="form-group">
              <h5><b><u>3. DATA TES KEPRIBADIAN</u><br>Diisi Pemeriksa(Klinik PPNS)</b></h5>
            </div>
            <!-- Rubah Total -->
            <table width="100%" style="padding-left:10px;">
              <tr>
                <td width="3%">A :</td>
                <td width="10%">
                  <?php if ($siswa5[1] == '1') { ?>
                  <input type="checkbox" name="a1" value="1" checked>
                  <?php } else { ?>
                    <input type="checkbox" name="a1" value="1">
                  <?php } ?>
                </td>

                <td width="3%">VP :</td>
                <td width="10%">
                  <?php if ($siswa5[2] == '1') { ?>
                  <input type="checkbox" name="a2" value="1" checked>
                  <?php } else { ?>
                    <input type="checkbox" name="a2" value="1">
                  <?php } ?>
                </td>

                <td width="3%">P :</td>
                <td width="10%">
                  <?php if ($siswa5[3] == '1') { ?>
                  <input type="checkbox" name="a3" value="1" checked>
                  <?php } else { ?>
                    <input type="checkbox" name="a3" value="1">
                  <?php } ?>
                </td>

                <td width="3%">A :</td>
                <td width="10%">
                  <?php if ($siswa5[4] == '1') { ?>
                  <input type="checkbox" name="a4" value="1" checked>
                  <?php } else { ?>
                  <input type="checkbox" name="a4" value="1">
                  <?php } ?>
                </td>

                <td width="3%">BM :</td>
                <td width="10%">
                  <?php if ($siswa5[5] == '1') { ?>
                    <input type="checkbox" name="a5" value="1" checked>
                  <?php } else { ?>
                    <input type="checkbox" name="a5" value="1">
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td width="3%">L :</td>
                <td width="10%">
                  <?php if ($siswa5[6] == '1') { ?>
                    <input type="checkbox" name="b1" value="1" checked>
                  <?php } else { ?>
                    <input type="checkbox" name="b1" value="1">
                  <?php } ?>
                </td>

                <td width="3%">I :</td>
                <td width="10%">
                  <?php if ($siswa5[7] == '1') { ?>
                  <input type="checkbox" name="b2" value="1" checked>
                  <?php } else { ?>
                    <input type="checkbox" name="b2" value="1">
                  <?php } ?>
                </td>

                <td width="3%">D :</td>
                <td width="10%">
                  <?php if ($siswa5[8] == '1') { ?>
                  <input type="checkbox" name="b3" value="1" checked>
                  <?php } else { ?>
                    <input type="checkbox" name="b3" value="1">
                  <?php } ?>
                </td>

                <td width="3%">G :</td>
                <td width="10%">
                  <?php if ($siswa5[9] == '1') { ?>
                  <input type="checkbox" name="b4" value="1" checked>
                  <?php } else { ?>
                    <input type="checkbox" name="b4" value="1">
                  <?php } ?>
                </td>

                <td width="3%"></td>
                <td width="10%"></td>
              </tr>
              <tr>
                <td width="3%">D :</td>
                <td width="10%">
                  <?php if ($siswa5[10] == '1') { ?>
                    <input type="checkbox" name="c1" value="1" checked>
                  <?php } else { ?>
                    <input type="checkbox" name="c1" value="1">
                  <?php } ?>
                </td>

                <td width="3%">VP :</td>
                <td width="10%">
                  <?php if ($siswa5[11] == '1') { ?>
                  <input type="checkbox" name="c2" value="1" checked>
                  <?php } else { ?>
                  <input type="checkbox" name="c2" value="1">
                  <?php } ?>
                </td>

                <td width="3%">P :</td>
                <td width="10%">
                  <?php if ($siswa5[12] == '1') { ?>
                    <input type="checkbox" name="c3" value="1" checked>
                  <?php } else { ?>
                    <input type="checkbox" name="c3" value="1">
                  <?php } ?>
                </td>

                <td width="3%">A :</td>
                <td width="10%">
                  <?php if ($siswa5[13] == '1') { ?>
                    <input type="checkbox" name="c4" value="1" checked>
                  <?php } else { ?>
                    <input type="checkbox" name="c4" value="1">
                  <?php } ?>
                </td>

                <td width="3%">BD :</td>
                <td width="10%">
                  <?php if ($siswa5[14] == '1') { ?>
                    <input type="checkbox" name="c5" value="1" checked>
                  <?php } else { ?>
                    <input type="checkbox" name="c5" value="1">
                  <?php } ?>
                </td>
              </tr>

              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
          </div>
          <div class="form-group">
            <h5><b><u>4. Diisi Calon Mahasiswa Baru</u></b></h5>
          </div>
          <?php
          $result6 = mysqli_query($connect, "SELECT * FROM siswa_baru6 WHERE id = '$no'");
          while($siswa6 = mysqli_fetch_row($result6)) {
           ?>
          <div class="form-group">
          <table>
            <tr>
              <td width="25%">Riwayat Ibadah</td>
              <td>
                <?php if ($siswa6[1] == 'Islam') { ?>
                  <input type="radio" name="agama" value="Islam" checked>
                <?php } else { ?>
                  <input type="radio" name="agama" value="Islam">
                <?php } ?>
              </td>
              <td>Islam</td>
              <td width="5%"></td>
              <td width="15%">Sholat</td>
              <td width="5%"> <input value="<?php echo $siswa6[2]; ?>" type="text" name="sholat" class="form-control"> </td>
              <td style="padding-left:10px;"> Waktu/hari</td>
              <td width="5%"></td>
              <td width="15%">Membaca Al-Quran</td>
              <td width="5%"> <input value="<?php echo $siswa6[3]; ?>" type="text" name="quran" class="form-control"> </td>
              <td style="padding-left:10px;"> Lembar/hari</td>
            </tr>
            <tr>
              <td width="25%"></td>
              <td width="5%">
                <?php if ($siswa6[1] == 'Kristen') { ?>
                  <input type="radio" name="agama" value="Kristen" checked>
                <?php } else { ?>
                  <input type="radio" name="agama" value="Kristen">
                <?php } ?>
              </td>
              <td>Kristen</td>
              <td width="5%"></td>
              <td width="15%">Tempat Ibadah</td>
              <td width="5%"> <input value="<?php echo $siswa6[4]; ?>" type="text" name="sholat1" class="form-control"> </td>
              <td style="padding-left:10px;"> Kali/Pekan</td>
              <td width="5%"></td>
              <td width="15%">Membaca Kitab</td>
              <td width="5%"> <input value="<?php echo $siswa6[5]; ?>" type="text" name="quran1" class="form-control"> </td>
              <td style="padding-left:10px;"> Lembar/hari</td>
            </tr>
            <tr>
              <td width="25%"></td>
              <td width="5%">
                <?php if ($siswa6[1] == 'Hindu') { ?>
                  <input type="radio" name="agama" value="Hindu" checked>
                <?php } else { ?>
                  <input type="radio" name="agama" value="Hindu">
                <?php } ?>
              </td>
              <td>Hindu</td>
              <td width="5%"></td>
              <td width="15%">Tempat Ibadah</td>
              <td width="5%"> <input value="<?php echo $siswa6[6]; ?>" type="text" name="sholat2" class="form-control"> </td>
              <td style="padding-left:10px;"> Kali/Pekan</td>
              <td width="5%"></td>
              <td width="15%">Membaca Kitab</td>
              <td width="5%"> <input value="<?php echo $siswa6[7]; ?>" type="text" name="quran2" class="form-control"> </td>
              <td style="padding-left:10px;"> Lembar/hari</td>
            </tr>
            <tr>
              <td width="25%"></td>
              <td width="5%">
                <?php if ($siswa6[1] == 'Budha') { ?>
                <input type="radio" name="agama" value="Budha" checked>
                <?php } else { ?>
                  <input type="radio" name="agama" value="Budha">
                <?php } ?>
              </td>
              <td>Budha</td>
              <td width="10%"></td>
              <td width="15%">Tempat Ibadah</td>
              <td width="5%"> <input  value="<?php echo $siswa6[8]; ?>" type="text" name="sholat3" class="form-control"> </td>
              <td style="padding-left:10px;"> Kali/Pekan</td>
              <td width="10%"></td>
              <td width="15%">Membaca Kitab</td>
              <td> <input type="text" value="<?php echo $siswa6[9]; ?>" name="quran3" class="form-control"> </td>
              <td style="padding-left:10px;"> Lembar/hari</td>
            </tr>
          </table>
        </form>
          </div>
        <?php
        // } else if($id == 5) {
          ?>
      </div>
    </div>
<?php }}}}}}} ?>

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.php" ?>
