<?php include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pakar
      <small>Diagnosa dan Penyakit</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <div class="row">
              <div class="col-md-4">
                <h2 class="box-title">Sistem Pakar</h2>
              </div>
              <div class="col-md-8">
                <button type="button" style="margin-left:10px;float:right" class="btn btn-primary" data-toggle="modal" data-target="#view">* View</button>
                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" style="width:90%" role="document">
                    <div class="modal-content"  style="width:90%">
                      <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Data Pakar</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <iframe src="penyakit.php?id=view" width="100%" height="350px" style="border:none;"></iframe>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="button" style="float:right" class="btn btn-primary" data-toggle="modal" data-target="#pakar">+ Add</button>
                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" id="pakar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <iframe src="penyakit.php?id=pakar" width="100%" height="450px" style="border:none;"></iframe>
                      </div>
                      <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>

            <!-- <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">

                <div class="input-group-btn">
                  <a class="btn btn-primary" href="add-mahasiswa.php">Riwayat Pemeriksaan Terakhir</a>
                </div>
              </div>
            </div> -->

          <!-- /.box-header -->
          <div class=" box box-body">
            <div class="row">
              <div class="col-md-6">
               <font style="font-size:18px;"><b> Data Penyakit </b></font>
                  <button type="button" style="float:right" class="btn btn-danger" data-toggle="modal" data-target="#penyakit">+ Penyakit</button>
                  <!-- Button trigger modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="penyakit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content" style="width:100%">
                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel"></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <iframe src="penyakit.php?id=penyakit" width="100%" height="350px" style="border:none;"></iframe>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                <table class="table table-hover">
                  <tr>
                    <th width="5%">No</th>
                    <th>Penyakit</th>
                    <!-- <th>Tanggal</th> -->
                  </tr>
                      <?php
                      include "proses/koneksi.php";
                      $nomor       = 1;
                      $nama        = $_REQUEST['nama'];
                      if ($nama != '') {
                        $pasien      = mysqli_query($connect, "SELECT * FROM `penyakit_diagnosa` WHERE `nama` like '%$nama%' ORDER BY `riwayat`.`id` DESC ");
                      } else {
                        $pasien      = mysqli_query($connect, "SELECT * FROM `penyakit_diagnosa` WHERE `ket` = 'penyakit' ORDER BY `penyakit_diagnosa`.`id` DESC");
                      }
                      while ($data = mysqli_fetch_row($pasien)) {
                        ?>
                    <tr>
                      <td> <?php echo $nomor;$nomor++; ?> </td>
                      <td><?php echo $data[1]; ?></td>
                      <!-- <td><?php echo $data[2]; ?></td> -->
                  </tr>
                <?php } ?>
                </table>
              </div>
              <div class="col-md-6" style="border-left:solid thin #242424">
                <font style="font-size:18px;"><b> Data Gejala </b></font>
                <button type="button" style="float:right" class="btn btn-danger" data-toggle="modal" data-target="#diagnosa">+ Gejala</button>
                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" id="diagnosa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <iframe src="penyakit.php?id=diagnosa" width="100%" height="350px" style="border:none;"></iframe>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <table class="table table-hover">
                  <tr>
                    <th width="5%">No</th>
                    <th>Gejala Penyakit</th>
                    <!-- <th>Tanggal</th> -->
                  </tr>
                  <?php
                  include "proses/koneksi.php";
                  $nomor       = 1;
                  $nama        = $_REQUEST['nama'];
                  if ($nama != '') {
                    $pasien      = mysqli_query($connect, "SELECT * FROM `penyakit_diagnosa` WHERE `nama` like '%$nama%' ORDER BY `riwayat`.`id` DESC ");
                  } else {
                    $pasien      = mysqli_query($connect, "SELECT * FROM `penyakit_diagnosa` WHERE `ket` = 'diagnosa' ORDER BY `penyakit_diagnosa`.`id` DESC");
                  }
                  while ($data = mysqli_fetch_row($pasien)) {
                    ?>
                    <tr>
                      <td><?php echo $nomor; $nomor++; ?></td>
                      <td><?php echo $data[1]; ?></td>
                      <!-- <td><?php echo $data[2]; ?></td> -->
                  </tr>
                <?php } ?>
                </table>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>

  </section>
  <!-- /.content -->
  </div>
<?php include "footer.php" ?>
