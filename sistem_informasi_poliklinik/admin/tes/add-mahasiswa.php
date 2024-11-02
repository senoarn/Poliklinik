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
          if($id == '') {
          ?>
          <form action="proses/mahasiswa_baru.php?id=tambah&id=1" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <h5><b><u>1. Data Pribadi dan Keluarga</u></b></h5>
          </div>
          <table width="100%" class="table">
            <tr>
              <td width="30%">Nama Lengkap</td>
              <td width="5%">:</td>
              <td><input type="text" required name="nama" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
            </tr>
            <tr>
              <td width="30%">Panggilan</td>
              <td width="5%">:</td>
              <td><input type="text" name="panggilan" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
            </tr>
            <tr>
              <td width="30%">Jenis Kelamin</td>
              <td width="5%">:</td>
              <td>
                <table>
                  <tr>
                    <td> <input type="radio" name="jk" value="Laki-Laki"></td>
                    <td> Laki-Laki</td>
                    <td width="10%"></td>
                    <td> <input type="radio" name="jk" value="Perempuan"></td>
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
                      <input type="text" name="saudara" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                    <td width="5%"></td>
                    <td width="15%" style="text-align:right"> Anak Ke</td>
                    <td width="2%"></td>
                    <td> <input type="text" name="ke" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    <td width="5%"></td>
                    <td> dari</td>
                    <td width="2%"></td>
                    <td> <input type="text" name="dari" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
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
                    <td> <input type="radio" name="goldar" value="A"></td>
                    <td> A</td>
                    <td width="10%"></td>
                    <td> <input type="radio" name="goldar" value="B"></td>
                    <td> B</td>
                    <td width="10%"></td>
                    <td> <input type="radio" name="goldar" value="AB"></td>
                    <td> AB</td>
                    <td width="10%"></td>
                    <td> <input type="radio" name="goldar" value="O"></td>
                    <td> O</td>
                    <td width="20%"></td>
                    <td>Rhesus</td>
                    <td width="10%"></td>
                    <td> <input type="radio" name="rhesus" value="+"></td>
                    <td> +</td>
                    <td width="5%"></td>
                    <td width="5%">/</td>
                    <td> <input type="radio" name="rhesus" value="-"></td>
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
                      <input type="text" name="hp1" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                    <td width="10%" style="text-align:center">/</td>
                    <td>
                      <input type="text" name="hp2" class="form-control" style="border-right:none; border-left:none;border-top:none">
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
                      <input type="text" name="pil1" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                    <td width="10%" style="text-align:center"></td>
                    <td>2. </td>
                    <td>
                      <input type="text" name="pil2" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                    <td width="10%" style="text-align:center"></td>
                    <td>3. </td>
                    <td>
                      <input type="text" name="pil3" class="form-control" style="border-right:none; border-left:none;border-top:none">
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
                    <td width="10%"> <input type="radio" name="jalur1" value="SBMPTN"></td>
                    <td width="10%"> SBMPTN</td>
                    <td width="10%" style="text-align:center;">/</td>
                    <td width="10%">
                      <input type="radio" name="jalur1" value="SNMPTN">
                      <input type="hidden" name="jalur2" value="">
                    </td>
                    <td width="60%"> SNMPTN</td>
                  </tr>
                    <tr>
                      <td>Jurusan</td>
                      <td colspan="4" width="100%">
                        <input type="text" name="jurusan" class="form-control" style="border-right:none; border-left:none;border-top:none">
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
                      <input type="text" name="riwayat1" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                  </tr>
                    <tr>
                      <td>SMP</td>
                      <td>
                        <input type="text" name="riwayat2" class="form-control" style="border-right:none; border-left:none;border-top:none">
                      </td>
                    </tr>
                    <tr>
                      <td>SMA</td>
                      <td>
                        <input type="text" name="riwayat3" class="form-control" style="border-right:none; border-left:none;border-top:none">
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
                      <input type="text" name="ekskul1" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                  </tr>
                    <tr>
                      <td>2. </td>
                      <td>
                        <input type="text" name="ekskul2" class="form-control" style="border-right:none; border-left:none;border-top:none">
                      </td>
                    </tr>
                    <tr>
                      <td>3. </td>
                      <td>
                        <input type="text" name="ekskul3" class="form-control" style="border-right:none; border-left:none;border-top:none">
                      </td>
                  </tr>
                  <tr>
                    <td>4. </td>
                    <td>
                      <input type="text" name="ekskul4" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                </tr>
                <tr>
                  <td>5. </td>
                  <td>
                    <input type="text" name="ekskul5" class="form-control" style="border-right:none; border-left:none;border-top:none">
                  </td>
              </tr>
                </table>
              </td>
            </tr>

            <tr>
              <td width="30%">Riwayat Penyakit</td>
              <td width="5%">:</td>
              <td>
                <table width="100%">
                  <tr>
                    <td>Asma </td>
                    <td width="10%" style="text-align:center;"></td>
                    <td width="5%"> <input type="radio" name="asma" value="Ya"></td>
                    <td width="5%"> Iya</td>
                    <td width="5%" style="text-align:center">/</td>
                    <td width="5%"> <input type="radio" checked name="asma" value="Tidak"></td>
                    <td> Tidak</td>
                    <td colspan="2"></td>
                  </tr>
                  <tr>
                    <td>TBC </td>
                    <td width="10%" style="text-align:center;"></td>
                    <td width="5%"> <input type="radio" name="tbc" value="Ya"></td>
                    <td width="5%"> Iya</td>
                    <td width="5%" style="text-align:center">/</td>
                    <td width="5%"> <input type="radio" checked name="tbc" value="Tidak"></td>
                    <td> Tidak</td>
                    <td colspan="2"></td>
                  </tr>
                  <tr>
                    <td>Hepatitis </td>
                    <td width="10%" style="text-align:center;"></td>
                    <td width="5%"> <input type="radio" name="hepatitis" value="Ya"></td>
                    <td width="5%"> Iya</td>
                    <td width="5%" style="text-align:center">/</td>
                    <td width="5%"> <input type="radio" checked name="hepatitis" value="Tidak"></td>
                    <td> Tidak</td>
                    <td colspan="2"></td>
                  </tr>
                  <tr>
                    <td>Operasi </td>
                    <td width="10%" style="text-align:center;"></td>
                    <td width="5%"> <input type="radio" name="operasi" value="Pernah"></td>
                    <td width="5%"> Pernah</td>
                    <td width="5%" style="text-align:center">/</td>
                    <td width="5%"> <input type="radio" checked name="operasi" value="Tidak"></td>
                    <td> Tidak</td>
                    <td>, Sebutkan</td>
                    <td>
                      <input type="text" name="operasi_text" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                  </tr>
                  <tr>
                    <td>Kecelakaan </td>
                    <td width="10%" style="text-align:center;"></td>
                    <td width="5%"> <input type="radio" checked name="kecelakaan" value="Pernah"></td>
                    <td width="5%"> Pernah</td>
                    <td width="5%" style="text-align:center">/</td>
                    <td width="5%"> <input type="radio" name="kecelakaan" value="Tidak"></td>
                    <td> Tidak</td>
                    <td>, Sebutkan</td>
                    <td>
                      <input type="text" name="kecelakaan_text" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                  </tr>
                  <tr>
                    <td>Opname RS </td>
                    <td width="10%" style="text-align:center;"></td>
                    <td width="5%"> <input type="radio" checked name="opname" value="Pernah"></td>
                    <td width="5%"> Pernah</td>
                    <td width="5%" style="text-align:center">/</td>
                    <td width="5%"> <input type="radio" name="opname" value="Tidak"></td>
                    <td> Tidak</td>
                    <td>, Sebutkan</td>
                    <td>
                      <input type="text" name="opname_text" class="form-control" style="border-right:none; border-left:none;border-top:none">
                    </td>
                  </tr>
                  <tr>
                    <td>Maag </td>
                    <td width="10%" style="text-align:center;"></td>
                    <td width="5%"> <input type="radio" name="maag" value="Ya"></td>
                    <td width="5%"> Iya</td>
                    <td width="5%" style="text-align:center">/</td>
                    <td width="5%"> <input type="radio" checked name="maag" value="Tidak"></td>
                    <td colspan="2">Tidak</td>
                  </tr>
                  <tr>
                    <td>Epilepsi / Ayan </td>
                    <td width="10%" style="text-align:center;"></td>
                    <td width="5%"> <input type="radio" name="epilepsi" value="1"></td>
                    <td width="5%"> Iya</td>
                    <td width="5%" style="text-align:center">/</td>
                    <td width="5%"> <input type="radio" checked name="epilepsi" value="0"></td>
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
                      <td width="5%"> <input type="radio" checked name="olahraga" value="<1x/pekan"></td>
                      <td width="10%"> <1x/Pekan</td>
                      <td width="5%"></td>
                      <td width="5%"> <input type="radio" name="olahraga" value="1-2x/pekan"></td>
                      <td width="10%"> 1-2x/pekan</td>
                      <td width="5%"></td>
                      <td width="5%"> <input type="radio" name="olahraga" value=">2x/pekan"></td>
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
                      <td width="3%"> <input type="radio" checked name="buah" value="setiap hari"></td>
                      <td width="9%"> setiap hari</td>
                      <td width="2%"> <input type="radio" name="buah" value="2hr/sekali"></td>
                      <td width="10%"> 2hr/sekali</td>
                      <td width="5%"> <input type="radio" name="buah" value=">3-6hr/sekali"></td>
                      <td width="10%"> 3-6hr/sekali</td>
                      <td width="5%"></td>
                      <td width="5%"> <input type="radio" name="buah" value="1x/pekan"></td>
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
                      <td width="4%"> <input type="radio" name="rokok" value="1"></td>
                      <td width="4%"> Iya</td>
                      <td width="5%"></td>
                      <td width="2%"> <input type="radio" checked name="rokok" value="0"></td>
                      <td width="5%"> Tidak</td>
                      <td width="5%"></td>
                      <td width="10%"> Batang/perhari</td>
                      <td width="25%"> <input type="text" name="batang" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
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
                      <td width="4%"> <input type="text" name="tidur" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="4%"> <input type="radio" checked name="waktu1" value="WIB"></td>
                      <td width="4%"> WIB</td>
                      <td width="5%">/</td>
                      <td width="2%"> <input type="radio" name="waktu1" value="WITA"></td>
                      <td width="5%"> WITA</td>
                      <td width="5%">/</td>
                      <td width="2%"> <input type="radio" name="waktu1" value="WIT"></td>
                      <td width="5%"> WIT</td>
                    </tr>
                    <tr>
                      <td width="4%"> Bangun </td>
                      <td width="4%"> <input type="text" name="bangun" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="4%"> <input type="radio" checked name="waktu2" value="WIB"></td>
                      <td width="4%"> WIB</td>
                      <td width="5%">/</td>
                      <td width="2%"> <input type="radio" name="waktu2" value="WITA"></td>
                      <td width="5%"> WITA</td>
                      <td width="5%">/</td>
                      <td width="2%"> <input type="radio" name="waktu2" value="WIT"></td>
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
                      <td width="40%"><input type="text" name="facebook" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="10%"></td>
                      <td>Instagram</td>
                      <td width="40%"><input type="text" name="instagram" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
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
                      <td width="4%"> <input type="radio" name="bpjs" checked value="Iya"></td>
                      <td width="4%"> Iya</td>
                      <td width="5%">/</td>
                      <td width="2%"> <input type="radio" name="bpjs" value="Tidak"></td>
                      <td width="5%"> Tidak</td>
                      <td width="5%"></td>
                      <td width="10%">Faskes 1</td>
                      <td><input type="text" name="faskes" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td width="30%">Nama Ayah (Gelar)</td>
                <td width="5%">:</td>
                <td width="65%">
                  <table>
                    <tr>
                      <td width="30%"><input type="text" name="ayah" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="15%">Tanggal Lahir :</td>
                      <td width="20"><input type="date" name="tgl_lahir_ayah" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td width="30%">Pekerjaan Ayah</td>
                <td width="5%">:</td>
                <td width="65%">
                  <input type="text" name="pekerjaan_ayah" class="form-control" style="border-right:none; border-left:none;border-top:none">
                </td>
              </tr>
              <tr>
                <td width="30%">Riwayat Penyakit Ayah</td>
                <td width="5%">:</td>
                <td width="65%">
                  <table>
                    <tr>
                      <td width="30%"><input type="text" name="riwayat_ayah" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="15%">Goldar :</td>
                      <td width="20"><input type="text" name="goldar_ayah" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
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
                      <td width="30%"><input type="text" name="ibu" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="15%">Tanggal Lahir :</td>
                      <td width="20"><input type="date" name="tgl_lahir_ibu" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td width="30%">Pekerjaan Ibu</td>
                <td width="5%">:</td>
                <td width="65%">
                  <input type="text" name="pekerjaan_ibu" class="form-control" style="border-right:none; border-left:none;border-top:none">
                </td>
              </tr>
              <tr>
                <td width="30%">Riwayat Penyakit Ibu</td>
                <td width="5%">:</td>
                <td width="65%">
                  <table>
                    <tr>
                      <td width="30%"><input type="text" name="riwayat_ibu" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="15%">Goldar :</td>
                      <td width="20"><input type="text" name="goldar_ibu" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
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
                      <td><input type="radio" name="penghasilan" checked value="< Rp. 1.500.000,-"></td>
                      <td width="10%"></td>
                      <td>< Rp. 1.500.000,-</td>
                    </tr>
                    <tr>
                      <td><input type="radio" name="penghasilan" value="Rp. 1.500.001 - 3.000.000,-"></td>
                      <td width="10%"></td>
                      <td>Rp. 1.500.001 - 3.000.000,-</td>
                    </tr>
                    <tr>
                      <td><input type="radio" name="penghasilan" value="Rp. 3.000.001 - 5.000.000,-"></td>
                      <td width="10%"></td>
                      <td>Rp. 3.000.001 - 5.000.000,-</td>
                    </tr>
                    <tr>
                      <td><input type="radio" name="penghasilan" value="Rp 5.000.000 - 10.000.000,-"></td>
                      <td width="10%"></td>
                      <td>Rp 5.000.000 - 10.000.000,-</td>
                    </tr>
                    <tr>
                      <td><input type="radio" name="penghasilan" value="> Rp. 10.000.000,-"></td>
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
                      <td width="20%"><input type="text" name="nama_saudara_1" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="10%">Tgl Lahir</td>
                      <td width="10%"><input type="date" name="tgl_lahir_saudara_1" class="form-control" style="border-right:none; border-left:none;border-top:none"> </td>
                      <td width="5%"></td>
                      <td width="10%">Goldar :</td>
                      <td width="10"><input type="text" name="goldar_saudara_1" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                    <tr>
                      <td width="10%">Nama :</td>
                      <td width="20%"><input type="text" name="nama_saudara_2" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="10%">Tgl Lahir</td>
                      <td width="10%"><input type="date" name="tgl_lahir_saudara_2" class="form-control" style="border-right:none; border-left:none;border-top:none"> </td>
                      <td width="5%"></td>
                      <td width="10%">Goldar :</td>
                      <td width="10"><input type="text" name="goldar_saudara_2" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                    <tr>
                      <td width="10%">Nama :</td>
                      <td width="20%"><input type="text" name="nama_saudara_3" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="10%">Tgl Lahir</td>
                      <td width="10%"><input type="date" name="tgl_lahir_saudara_3" class="form-control" style="border-right:none; border-left:none;border-top:none"> </td>
                      <td width="5%"></td>
                      <td width="10%">Goldar :</td>
                      <td width="10"><input type="text" name="goldar_saudara_3" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                    <tr>
                      <td width="10%">Nama :</td>
                      <td width="20%"><input type="text" name="nama_saudara_4" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="10%">Tgl Lahir</td>
                      <td width="10%"><input type="date" name="tgl_lahir_saudara_4" class="form-control" style="border-right:none; border-left:none;border-top:none"> </td>
                      <td width="5%"></td>
                      <td width="10%">Goldar :</td>
                      <td width="10"><input type="text" name="goldar_saudara_4" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                    <tr>
                      <td width="10%">Nama :</td>
                      <td width="20%"><input type="text" name="nama_saudara_5" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="5%"></td>
                      <td width="10%">Tgl Lahir</td>
                      <td width="10%"><input type="date" name="tgl_lahir_saudara_5" class="form-control" style="border-right:none; border-left:none;border-top:none"> </td>
                      <td width="5%"></td>
                      <td width="10%">Goldar :</td>
                      <td width="10"><input type="text" name="goldar_saudara_5" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                  </table>
                </td>
              </tr>
          </table>
          <div class="form-group" style="margin-top:20px;">
          <input type="submit" name="" class="btn btn-primary" value="Next" style="width:100%">
        </div>
        </form>
        <?php } if($id == 2) { ?>
          <form action="proses/mahasiswa_baru.php?id=tambah&id=2" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <h5><b><u>2. DATA TES KESEHATAN DIISI PEMERIKSA (KLINIK PPNS)</u></b></h5>
          </div>
          <div class="form-group">
            <table class="" border="1" style="text-align:center">
              <tr>
                <td>
                  Berat Badan<br>
                  <input type="text" onchange="bmi()" id="bb" name="bb" class="form-control" style="border-right:none; border-left:none;border-top:none">
                </td>
                <td>
                  Tinggi Badan<br>
                  <input type="text" onchange="bmi()" id="tb" name="tb" class="form-control" style="border-right:none; border-left:none;border-top:none">
                </td>
                <td>
                  BMI<br>
                  <p id="bmi">0</p>
                </td>
                <td>
                  Tekanan Darah<br>
                  <input type="text" name="tkd" class="form-control" style="border-right:none; border-left:none;border-top:none">
                </td>
                <td>
                  Nadi Awal<br>
                <input type="text" name="nadi_awal" class="form-control" style="border-right:none; border-left:none;border-top:none">
              </td>
              </tr>
              <tr>
                <td>
                  Buta Warna<br>
                  <table align="center">
                    <tr>
                      <td width="15%"></td>
                      <td><input type="radio" name="bw" value="+"></td>
                      <td>+</td>
                      <td width="20%"></td>
                      <td><input type="radio" name="bw" value="-"></td>
                      <td>-</td>
                    </tr>
                  </table>
                </td>
                <td>
                  Havard, Step Test<br>
                  <table>
                    <tr>
                      <td><input type="text" name="st1" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                      <td width="10px">,</td>
                      <td><input type="text" name="st2" class="form-control" style="border-right:none; border-left:none;border-top:none"></td>
                    </tr>
                  </table>
                </td>
                <td>
                  Sp02<br>
                  <input type="text" name="sp02" class="form-control" style="border-right:none; border-left:none;border-top:none">
                </td>
                <td colspan="2">
                  Visus<br>
                  <table align="center">
                    <tr>
                      <td width="15%"></td>
                      <td><input type="radio" name="visus" value="OD"></td>
                      <td>OD</td>
                      <td width="20%"></td>
                      <td><input type="radio" name="visus" value="OS"></td>
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
                <td> <input type="radio" name="umum" checked value="Normal" checked> </td>
                <td>Normal</td>
                <td> <input type="radio" name="umum" value="Tidak Normal"> </td>
                <td>Tidak Normal</td>
                <td width="35%">
                  <input   style="border-right:none; border-left:none;border-top:none" name="ket_umum" class="form-control">
          </td>
              </tr>
              <tr>
                <td colspan="5" style="padding-left:8px;"><b>Kepala</b></td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Mata</td>
                <td> <input type="radio" name="mata" checked value="-"> </td>
                <td>-</td>
                <td> <input type="radio" name="mata" value="+"> </td>
                <td>+</td>
                <td width="35%">
                  <input   style="border-right:none; border-left:none;border-top:none" name="ket_mata" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Hidung</td>
                <td> <input type="radio" name="hidung" checked value="-"> </td>
                <td>Polip -</td>
                <td> <input type="radio" name="hidung" value="+"> </td>
                <td>Polip +</td>
                <td width="35%">
                  <input   style="border-right:none; border-left:none;border-top:none" name="ket_hidung" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Mulut / Tonsil</td>
                <td> <input type="radio" name="mulut_1" checked value="Paringitis -"> </td>
                <td>Paringitis -</td>
                <td> <input type="radio" name="mulut_1" value="Paringitis +"> </td>
                <td>Paringitis +</td>
                <td width="35%">
                  <input style="border-right:none; border-left:none;border-top:none" name="ket_paring" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;"></td>
                <td> <input type="radio" name="mulut_2" checked value="Tonsilitis -"> </td>
                <td>Tonsilitis -</td>
                <td> <input type="radio" name="mulut_2" value="Tonsilitis +"> </td>
                <td>Tonsilitis +</td>
                <td width="35%">
                  <input   style="border-right:none; border-left:none;border-top:none" name="ket_tonsi" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Telinga / Pendengaran</td>
                <td> <input type="radio" name="telinga" checked value="-"> </td>
                <td>-</td>
                <td> <input type="radio" name="telinga" value="+"> </td>
                <td>+</td>
                <td width="35%">
                  <input   style="border-right:none; border-left:none;border-top:none" name="ket_telinga" class="form-control">
                </td>
              </tr>
              <tr>
                <td colspan="5" style="padding-left:8px;"><b>Leher</b></td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Kel. Tiroid / dengan palpasi</td>
                <td> <input type="radio" name="tiroid" checked value="-"> </td>
                <td>-</td>
                <td> <input type="radio" name="tiroid" value="+"> </td>
                <td>+</td>
                <td width="35%">
                  <input   style="border-right:none; border-left:none;border-top:none" name="ket_tiroid" class="form-control">
                </td>
              </tr>
              <tr>
                <td colspan="5" style="padding-left:8px;"><b>Thoraks</b></td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Paru / dengan auskultasi</td>
                <td> <input type="radio" name="paru" value="-"> </td>
                <td>Rh -</td>
                <td> <input type="radio" name="paru" value="+"> </td>
                <td>Rh +</td>
                <td width="35%" rowspan="2">
                  <input   style="border-right:none; border-left:none;border-top:none" name="ket_paru" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;"></td>
                <td> <input type="radio" name="wh" value="-"> </td>
                <td>Wh -</td>
                <td> <input type="radio" name="wh" value="+"> </td>
                <td>Wh +</td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Jantung / dengan auskultasi</td>
                <td> <input type="radio" name="murmur" value="-"> </td>
                <td>Murmur -</td>
                <td> <input type="radio" name="murmur" value="+"> </td>
                <td>Murmur +</td>
                <td width="35%">
                  <input rowspan="2" style="border-right:none; border-left:none;border-top:none" name="ket_mur" class="form-control">
                </td>
              </tr>
              <tr>
                <td></td>
                <td> <input type="radio" name="galop" value="-"> </td>
                <td>Gallop -</td>
                <td> <input type="radio" name="galop" value="+"> </td>
                <td>Gallop +</td>
              </tr>
              <tr>
                <td colspan="5" style="padding-left:8px;"><b>Abdomen</b></td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Hepar / dengan palpasi</td>
                <td> <input type="radio" name="hepar" value="Teraba"> </td>
                <td>Teraba</td>
                <td> <input type="radio" name="hepar" value="Tidak Teraba"> </td>
                <td>Tidak Teraba</td>
                <td width="35%">
                  <input   style="border-right:none; border-left:none;border-top:none" name="ket_hepar" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Lien / dengan palpasi</td>
                <td> <input type="radio" name="lien" value="Teraba"> </td>
                <td>Teraba</td>
                <td> <input type="radio" name="lien" value="Tidak Teraba"> </td>
                <td>Tidak Teraba</td>
                <td width="35%">
                  <input style="border-right:none; border-left:none;border-top:none" name="ket_lien" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:8px;">Genitalia / dengan anamnesa</td>
                <td> <input type="radio" name="geni" value="-"> </td>
                <td>-</td>
                <td> <input type="radio" name="geni" value="+"> </td>
                <td>+</td>
                <td width="35%">
                  <input   style="border-right:none; border-left:none;border-top:none" name="ket_geni" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:8px;">Anus / dengan palpasi</td>
                <td> <input type="radio" name="haemorhoid" value="-"> </td>
                <td>Haemorhoid -</td>
                <td> <input type="radio" name="haemorhoid" value="+"> </td>
                <td>Haemorhoid +</td>
                <td rowspan="3" width="35%">
                  <input style="border-right:none; border-left:none;border-top:none" name="ket_hepar" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;"></td>
                <td> <input type="radio" name="fistul" value="-"> </td>
                <td>Fistul -</td>
                <td> <input type="radio" name="fistul" value="+"> </td>
                <td>Fistul +</td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;"></td>
                <td> <input type="radio" name="abses" value="-"> </td>
                <td>Abses -</td>
                <td> <input type="radio" name="abses" value="+"> </td>
                <td>Abses +</td>
              </tr>
              <tr>
                <td colspan="5" style="padding-left:8px;"><b>Ekstremitas</b></td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Tangan</td>
                <td> <input type="radio" name="eks_tangan" value="Normal" checked> </td>
                <td>Normal</td>
                <td> <input type="radio" name="eks_tangan" value="Tidak Normal"> </td>
                <td>Tidak Normal</td>
                <td width="35%">
                  <input   style="border-right:none; border-left:none;border-top:none" name="ket_tangan" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Kaki / Refleks Patologis</td>
                <td> <input type="radio" name="kaki_refleks" value="Normal" checked> </td>
                <td>Normal</td>
                <td> <input type="radio" name="kaki_refleks" value="Tidak Normal"> </td>
                <td>Tidak Normal</td>
                <td width="35%">
                  <input   style="border-right:none; border-left:none;border-top:none" name="ket_tangan" class="form-control">
                </td>
              </tr>
              <tr>
                <td width="39%" style="padding-left:20px;">Kaki / Ederma</td>
                <td> <input type="radio" name="kaki_ederma" value="Normal" checked> </td>
                <td>Normal</td>
                <td> <input type="radio" name="kaki_ederma" value="Tidak Normal"> </td>
                <td>Tidak Normal</td>
                <td width="35%">
                  <input style="border-right:none; border-left:none;border-top:none" name="ket_kaki" class="form-control">
                </td>
              </tr>
              <tr>
                <td colspan="8">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="8">
                  <input type="submit" name="" class="btn btn-primary" value="Next" style="width:100%">
                </td>
              </tr>
            </table>
          <?php } else if($id == 3) { ?>
            <form action="proses/mahasiswa_baru.php?id=tambah&id=3" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <h5><b><u>3. DATA TES KEPRIBADIAN</u><br>Diisi Pemeriksa(Klinik PPNS)</b></h5>
            </div>
            <!-- Rubah Total -->
            <table width="100%" style="padding-left:10px;">
              <tr>
                <td width="3%">A :</td>
                <td width="10%"><input type="checkbox" name="a1" value="1"></td>

                <td width="3%">VP :</td>
                <td width="10%"><input type="checkbox" name="a2" value="1"></td>

                <td width="3%">P :</td>
                <td width="10%"><input type="checkbox" name="a3" value="1"></td>

                <td width="3%">A :</td>
                <td width="10%"><input type="checkbox" name="a4" value="1"></td>

                <td width="3%">BM :</td>
                <td width="10%"><input type="checkbox" name="a5" value="1"></td>
              </tr>
              <tr>
                <td width="3%">L :</td>
                <td width="10%"><input type="checkbox" name="b1" value="1"></td>

                <td width="3%">I :</td>
                <td width="10%"><input type="checkbox" name="b2" value="1"></td>

                <td width="3%">D :</td>
                <td width="10%"><input type="checkbox" name="b3" value="1"></td>

                <td width="3%">G :</td>
                <td width="10%"><input type="checkbox" name="b4" value="1"></td>

                <td width="3%"></td>
                <td width="10%"></td>
              </tr>
              <tr>
                <td width="3%">D :</td>
                <td width="10%"><input type="checkbox" name="c1" value="1"></td>

                <td width="3%">VP :</td>
                <td width="10%"><input type="checkbox" name="c2" value="1"></td>

                <td width="3%">P :</td>
                <td width="10%"><input type="checkbox" name="c3" value="1"></td>

                <td width="3%">A :</td>
                <td width="10%"><input type="checkbox" name="c4" value="1"></td>

                <td width="3%">BD :</td>
                <td width="10%"><input type="checkbox" name="c5" value="1"></td>
              </tr>

              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="15"> <input style="width:100%" type="submit" name="" value="Next" class="btn btn-primary"> </td>
              </tr>
            </table>
          </div>
        <?php } else if($id == 4) { ?>
          <form action="proses/mahasiswa_baru.php?id=tambah&id=4" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <h5><b><u>4. Diisi Calon Mahasiswa Baru</u></b></h5>
          </div>
          <div class="form-group">
          <table>
            <tr>
              <td width="25%">Riwayat Ibadah</td>
              <td> <input type="radio" name="agama" value="Islam"> </td>
              <td>Islam</td>
              <td width="5%"></td>
              <td width="15%">Sholat</td>
              <td width="5%"> <input type="text" name="sholat" class="form-control"> </td>
              <td style="padding-left:10px;"> Waktu/hari</td>
              <td width="5%"></td>
              <td width="15%">Membaca Al-Quran</td>
              <td width="5%"> <input type="text" name="quran" class="form-control"> </td>
              <td style="padding-left:10px;"> Lembar/hari</td>
            </tr>
            <tr>
              <td width="25%"></td>
              <td width="5%"> <input type="radio" name="agama" value="Kristen"> </td>
              <td>Kristen</td>
              <td width="5%"></td>
              <td width="15%">Tempat Ibadah</td>
              <td width="5%"> <input type="text" name="sholat1" class="form-control"> </td>
              <td style="padding-left:10px;"> Kali/Pekan</td>
              <td width="5%"></td>
              <td width="15%">Membaca Kitab</td>
              <td width="5%"> <input type="text" name="quran1" class="form-control"> </td>
              <td style="padding-left:10px;"> Lembar/hari</td>
            </tr>
            <tr>
              <td width="25%"></td>
              <td width="5%"> <input type="radio" name="agama" value="Hindu"> </td>
              <td>Hindu</td>
              <td width="5%"></td>
              <td width="15%">Tempat Ibadah</td>
              <td width="5%"> <input type="text" name="sholat2" class="form-control"> </td>
              <td style="padding-left:10px;"> Kali/Pekan</td>
              <td width="5%"></td>
              <td width="15%">Membaca Kitab</td>
              <td width="5%"> <input type="text" name="quran2" class="form-control"> </td>
              <td style="padding-left:10px;"> Lembar/hari</td>
            </tr>
            <tr>
              <td width="25%"></td>
              <td width="5%"> <input type="radio" name="agama" value="Budha"> </td>
              <td>Budha</td>
              <td width="10%"></td>
              <td width="15%">Tempat Ibadah</td>
              <td width="5%"> <input type="text" name="sholat3" class="form-control"> </td>
              <td style="padding-left:10px;"> Kali/Pekan</td>
              <td width="10%"></td>
              <td width="15%">Membaca Kitab</td>
              <td> <input type="text" name="quran3" class="form-control"> </td>
              <td style="padding-left:10px;"> Lembar/hari</td>
            </tr>
            <tr>
              <td colspan="10"> <input type="submit" name="" value="Next" class="btn btn-primary"> </td>
            </tr>
          </table>
        </form>
          </div>
        <?php } else if($id == 5) { ?>
          <form action="proses/mahasiswa_baru.php?id=tambah&id=5" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <h5><b><u>Personality Test <br>(Berilah nomor 1, 2, 3, 4 sesuai urutan yang paling menggambarkan diri Anda dan jumlahkan di TOT)</u></b></h5>
          </div>
          <div class="form-group">
            <table border="1" style="text-align:center">
              <tr>
                <th style="text-align:center">Poin</th>
                <th width="5%"></th>
                <th style="text-align:center">L</th>
                <th width="5%"></th>
                <th style="text-align:center">B</th>
                <th width="5%"></th>
                <th style="text-align:center">O</th>
                <th width="5%"></th>
                <th style="text-align:center">GR</th>
              </tr>
              <tr>
                <td>a</td>
                <td width="4%"> <input type="text" name="l1" onchange="hitung()"  onchange="myFunction()" id="l1" class="form-control" style="text-align:center"> </td>
                <td>Menyukai kekuasaan</td>
                <td><input type="text" name="b1" id="b1"  onchange="bFunction()" class="form-control" style="text-align:center"></td>
                <td>Enthusiastic</td>
                <td><input type="text" name="o1" onchange="oFunction()" id="o1" class="form-control" style="text-align:center"></td>
                <td>Perasaan sensitif</td>
                <td><input type="text" name="gr1" onchange="grFunction()" id="gr1" class="form-control" style="text-align:center"></td>
                <td>Menyukai diperintah</td>
              </tr>
              <tr>
                <td>b</td>
                <td> <input type="text" name="l2"  onchange="myFunction()" id="l2" class="form-control" style="text-align:center"> </td>
                <td>Suka terlibat</td>
                <td><input type="text" name="b2" id="b2"  onchange="bFunction()" class="form-control" style="text-align:center"></td>
                <td>Suka tantangan</td>
                <td><input type="text" name="o2" onchange="oFunction()" id="o2" class="form-control" style="text-align:center"></td>
                <td>Loyal</td>
                <td><input type="text" name="gr2" onchange="grFunction()" id="gr2" class="form-control" style="text-align:center"></td>
                <td>Akurat</td>
              </tr>
              <tr>
                <td>c</td>
                <td> <input type="text" name="l3"  onchange="myFunction()" id="l3" class="form-control" style="text-align:center"> </td>
                <td>Kuat pendirian</td>
                <td><input type="text" name="b3" id="b3"  onchange="bFunction()" class="form-control" style="text-align:center"></td>
                <td>Visioner</td>
                <td><input type="text" name="o3" onchange="oFunction()" id="o3" class="form-control" style="text-align:center"></td>
                <td>Tenang</td>
                <td><input type="text" name="gr3" onchange="grFunction()" id="gr3" class="form-control" style="text-align:center"></td>
                <td>Konsisten</td>
              </tr>
              <tr>
                <td>d</td>
                <td> <input type="text" name="l4"  onchange="myFunction()" id="l4" class="form-control" style="text-align:center"> </td>
                <td>Membimbing</td>
                <td><input type="text" name="b4" id="b4"  onchange="bFunction()" class="form-control" style="text-align:center"></td>
                <td>Suka berbicara</td>
                <td><input type="text" name="o4" onchange="oFunction()" id="o4" class="form-control" style="text-align:center"></td>
                <td>Suka rutinitas</td>
                <td><input type="text" name="gr4" onchange="grFunction()" id="gr4" class="form-control" style="text-align:center"></td>
                <td>Mudah diprediksi</td>
              </tr>
              <tr>
                <td>e</td>
                <td> <input type="text" name="l5"  onchange="myFunction()" id="l5" class="form-control" style="text-align:center"> </td>
                <td>Kompetitif</td>
                <td><input type="text" name="b5" id="b5"  onchange="bFunction()" class="form-control" style="text-align:center"></td>
                <td>Promotor</td>
                <td><input type="text" name="o5" onchange="oFunction()" id="o5" class="form-control" style="text-align:center"></td>
                <td>Tidak suka perubahan</td>
                <td><input type="text" name="gr5" onchange="grFunction()" id="gr5" class="form-control" style="text-align:center"></td>
                <td>Praktis</td>
              </tr>
              <tr>
                <td>f</td>
                <td> <input type="text" name="l6"  onchange="myFunction()" id="l6" class="form-control" style="text-align:center"> </td>
                <td>Pemecah masalah</td>
                <td><input type="text" name="b6" id="b6"  onchange="bFunction()" class="form-control" style="text-align:center"></td>
                <td>Suka popularitas</td>
                <td><input type="text" name="o6" onchange="oFunction()" id="o6" class="form-control" style="text-align:center"></td>
                <td>Melimpahkan ke orang lain</td>
                <td><input type="text" name="gr6" onchange="grFunction()" id="gr6" class="form-control" style="text-align:center"></td>
                <td>Berdasarkan fakta</td>
              </tr>

                <td>g</td>
                <td> <input type="text" name="l7"  onchange="myFunction()" id="l7" class="form-control" style="text-align:center"> </td>
                <td>Produktif</td>
                <td><input type="text" name="b7" id="b7"  onchange="bFunction()" class="form-control" style="text-align:center"></td>
                <td>Menyukai bersenang-senang</td>
                <td><input type="text" name="o7" onchange="oFunction()" id="o7" class="form-control" style="text-align:center"></td>
                <td>Menghindari konfrontasi</td>
                <td><input type="text" name="gr7" onchange="grFunction()" id="gr7" class="form-control" style="text-align:center"></td>
                <td>Bertanggung jawab</td>
              </tr>
              <tr>
                <td>h</td>
                <td> <input type="text" name="l8"  onchange="myFunction()" id="l8" class="form-control" style="text-align:center"> </td>
                <td>Kaku</td>
                <td><input type="text" name="b8" id="b8"  onchange="bFunction()" class="form-control" style="text-align:center"></td>
                <td>Menyukai keragaman</td>
                <td><input type="text" name="o8" onchange="oFunction()" id="o8" class="form-control" style="text-align:center"></td>
                <td>Sensitif</td>
                <td><input type="text" name="gr8" onchange="grFunction()" id="gr8" class="form-control" style="text-align:center"></td>
                <td>Perfeksionis</td>
              </tr>
              <tr>
                <td>i</td>
                <td> <input type="text" name="l9"  onchange="myFunction()" id="l9" class="form-control" style="text-align:center"> </td>
                <td>Pengambil Keputusan</td>
                <td><input type="text" name="b9" id="b9"  onchange="bFunction()" class="form-control" style="text-align:center"></td>
                <td>Spontanitas</td>
                <td><input type="text" name="o9" onchange="oFunction()" id="o9" class="form-control" style="text-align:center"></td>
                <td>Membimbing</td>
                <td><input type="text" name="gr9" onchange="grFunction()" id="gr9" class="form-control" style="text-align:center"></td>
                <td>Detail</td>
              </tr>
              <tr>
                <td>j</td>
                <td> <input type="text" onchange="myFunction()" name="l10" id="l10" class="form-control" style="text-align:center"> </td>
                <td>Persisten</td>
                <td><input type="text" name="b10" id="b10" onchange="bFunction()" class="form-control" style="text-align:center"></td>
                <td>Inspirasional</td>
                <td><input type="text" name="o10" id="o10" onchange="oFunction()"  class="form-control" style="text-align:center"></td>
                <td>Pencetus/penggagas</td>
                <td><input type="text" name="gr10" id="gr10" onchange="grFunction()"  class="form-control" style="text-align:center"></td>
                <td>Analitik</td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <input style="width:100%" type="text" class="form-control" style="text-align:center" id="l" disabled>
                  <input type="hidden"  id="m" name="m">
                </td>
                <td></td>
                <td>
                <input style="width:100%" type="text"  class="form-control" style="text-align:center" id="b" disabled>
                <input type="hidden"  id="n" name="n">
                </td>
                <td></td>
                <td>
                  <input style="width:100%" type="text"  class="form-control" style="text-align:center" id="o" disabled>
                  <input type="hidden"  id="p" name="p">
                </td>
                <td></td>
                <td>
                  <input style="width:100%" type="text"  class="form-control" style="text-align:center" id="gr" disabled>
                  <input type="hidden"  id="q" name="q">
                </td>
                <td></td>
              </tr>
            </table>
          </div>
          <div class="form-group" style="margin-top:20px">
            <input type="submit" class="btn btn-primary add-one" value="Simpan">
          </div>
        </form>
      </div>
      <?php } ?>
    <?php } ?>
      <!-- /.box-body -->
    </div>


  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
function myFunction() {
  var a = parseInt(document.getElementById("l1").value);
  var b = parseInt(document.getElementById("l2").value);
  var c = parseInt(document.getElementById("l3").value);
  var d = parseInt(document.getElementById("l4").value);
  var e = parseInt(document.getElementById("l5").value);
  var f = parseInt(document.getElementById("l6").value);
  var g = parseInt(document.getElementById("l7").value);
  var h = parseInt(document.getElementById("l8").value);
  var i = parseInt(document.getElementById("l9").value);
  var j = parseInt(document.getElementById("l10").value);
  var l = a+b+c+d+e+f+g+h+i+j;
  document.getElementById("l").setAttribute("value", l);
  document.getElementById("m").setAttribute("value", l);
}

function bFunction() {
  var a = parseInt(document.getElementById("b1").value);
  var b = parseInt(document.getElementById("b2").value);
  var c = parseInt(document.getElementById("b3").value);
  var d = parseInt(document.getElementById("b4").value);
  var e = parseInt(document.getElementById("b5").value);
  var f = parseInt(document.getElementById("b6").value);
  var g = parseInt(document.getElementById("b7").value);
  var h = parseInt(document.getElementById("b8").value);
  var i = parseInt(document.getElementById("b9").value);
  var j = parseInt(document.getElementById("b10").value);
  var l = a+b+c+d+e+f+g+h+i+j;
  document.getElementById("b").setAttribute("value", l);
  document.getElementById("n").setAttribute("value", l);
}

function oFunction() {
  var a = parseInt(document.getElementById("o1").value);
  var b = parseInt(document.getElementById("o2").value);
  var c = parseInt(document.getElementById("o3").value);
  var d = parseInt(document.getElementById("o4").value);
  var e = parseInt(document.getElementById("o5").value);
  var f = parseInt(document.getElementById("o6").value);
  var g = parseInt(document.getElementById("o7").value);
  var h = parseInt(document.getElementById("o8").value);
  var i = parseInt(document.getElementById("o9").value);
  var j = parseInt(document.getElementById("o10").value);
  var l = a+b+c+d+e+f+g+h+i+j;
  document.getElementById("o").setAttribute("value", l);
  document.getElementById("p").setAttribute("value", l);
}

function grFunction() {
  var a = parseInt(document.getElementById("gr1").value);
  var b = parseInt(document.getElementById("gr2").value);
  var c = parseInt(document.getElementById("gr3").value);
  var d = parseInt(document.getElementById("gr4").value);
  var e = parseInt(document.getElementById("gr5").value);
  var f = parseInt(document.getElementById("gr6").value);
  var g = parseInt(document.getElementById("gr7").value);
  var h = parseInt(document.getElementById("gr8").value);
  var i = parseInt(document.getElementById("gr9").value);
  var j = parseInt(document.getElementById("gr10").value);
  var l = a+b+c+d+e+f+g+h+i+j;
  document.getElementById("gr").setAttribute("value", l);
  document.getElementById("q").setAttribute("value", l);
}

function bmi() {
  var x = document.getElementById("bb").value;
  var y = document.getElementById("tb").value;
  var z = (x/(y*y)*10000);
  document.getElementById("bmi").innerHTML = z;
}
</script>
</script>



<?php include "footer.php" ?>
