<?php include "header.php" ?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Dashboard
      <small>Overview</small>
    </h1>
  </section>
  <section class="content container-fluid">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
          <div class="inner">
            <?php
              session_start();
              $nama          = $_SESSION['nama'];
              $pasien        = mysqli_query($connect, "SELECT COUNT(*) FROM pasien");
              while ($jumlah = mysqli_fetch_row($pasien)) {
                echo "<h3>$jumlah[0]</h3>";
              }
            ?>
            <p>Total Pasien</p>
          </div>
          <div class="icon">
            <i class="fa fa-user"></i>
          </div>
        </div>

        
      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
          <div class="inner">
            <?php
              session_start();
              $nama          = $_SESSION['nama'];
              $pasien        = mysqli_query($connect, "SELECT COUNT(*) FROM obat");
              while ($jumlah = mysqli_fetch_row($pasien)) {
                echo "<h3>$jumlah[0]</h3>";
              }
            ?>
            <p>Total Obat</p>
          </div>
          <div class="icon">
            <i class="fa fa-medkit"></i>
          </div>
        </div>
      </div>
  </section>
  </div>
<?php include "footer.php" ?>
