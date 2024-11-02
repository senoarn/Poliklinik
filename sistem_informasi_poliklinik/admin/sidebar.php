<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/amikom.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo  $_SESSION['nama']; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Main Menu</li>
      <?php
        $jabatan = $_SESSION['jabatan'];
        if ($jabatan == "Admin") {
      ?>
      <li class="active"><a href="panel-user.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-user"></i> <span>Pasien</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="pasien-baru.php"><i class="fa fa-circle-o"></i> Pendaftaran Pasien Baru</a></li>
          <li><a href="data-pasien.php"><i class="fa fa-circle-o"></i> Data Pasien</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-medkit"></i> <span>Obat</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="obat.php"><i class="fa fa-circle-o"></i> <span>Input Obat</span></a></li>
          <li><a href="data-obat.php"><i class="fa fa-circle-o"></i> Data Obat</a></li>
        </ul>
      </li>
      <li><a href="logout.php"><i class="fa fa-arrow-left"></i> <span>Logout</span></a></li>
      <?php } else { ?>
        <li class="active"><a href="panel-user.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li><a href="riwayat.php"><i class="fa fa-folder"></i> <span>Riwayat Pemeriksaan</span></a></li>
        <li><a href="logout.php"><i class="fa fa-arrow-left"></i> <span>Logout</span></a></li>
      <?php } ?>
    </ul>
    </section>
    </aside>
