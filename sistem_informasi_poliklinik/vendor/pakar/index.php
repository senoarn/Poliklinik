<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aplikasi Poliklinik PPNS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="row" style="width:70%">
				<div class="col-md-7">
					<div class="wrap-login100 p-l-30 p-r-30 p-t-55 p-b-55" style="width:100%">
							<span class="login100-form-title p-b-32" style="text-align:center">
								Sistem Pakar
							</span>
							Apa yang Anda Rasakan ?
							<form class="" action="pakar.php" method="post">
							<table width="100%">
							<?php
							 session_start();
							 include "../admin/proses/koneksi.php";
							 $get  = $_REQUEST['data'];
							 $a 	 = $_REQUEST['a'];
							 $b 	 = $_REQUEST['b'];
							 $c 	 = $_REQUEST['c'];
							 $d 	 = $_REQUEST['d'];
							 $e 	 = $_REQUEST['e'];
							 $f 	 = $_REQUEST['f'];
							 $g 	 = $_REQUEST['g'];
							 $h 	 = $_REQUEST['h'];
							 $i 	 = $_REQUEST['i'];
							 $j 	 = $_REQUEST['j'];

							 $k 	 = $_SESSION['a'];
							 $l 	 = $_SESSION['b'];
							 $m 	 = $_SESSION['c'];
							 $n 	 = $_SESSION['d'];
							 $o 	 = $_SESSION['e'];
							 $p 	 = $_SESSION['f'];
							 $q 	 = $_SESSION['g'];
							 $r 	 = $_SESSION['h'];
							 $s 	 = $_SESSION['i'];
							 $t 	 = $_SESSION['j'];

							 $no 	 = $_REQUEST['no'];
							 if ($get == '') {
								$get  = "a";
								$pakar = mysqli_query($connect, "SELECT DISTINCT `a` FROM `pakar`");
							} else if ($a != '' && $b == '') {
								$pakar = mysqli_query($connect, "SELECT DISTINCT `b` FROM `pakar` WHERE `a` = '$a'");
							} else if ($b != '' && $c == '') {
								$pakar = mysqli_query($connect, "SELECT DISTINCT `c` FROM `pakar` WHERE `a` = '$a' AND `b` = '$b'");
							} else if ($c != '' && $d == '') {
								$pakar = mysqli_query($connect, "SELECT DISTINCT `d` FROM `pakar` WHERE `a` = '$a' AND `b` = '$b' AND `c` = '$c'");
							} else if ($d != '' && $e == '') {
								$pakar = mysqli_query($connect, "SELECT DISTINCT `e` FROM `pakar` WHERE `a` = '$a' AND `b` = '$b' AND `c` = '$c' AND `d` = '$d'");
							} else if ($e != '' && $f == '') {
								$pakar = mysqli_query($connect, "SELECT DISTINCT `f` FROM `pakar` WHERE `a` = '$a' AND `b` = '$b' AND `c` = '$c' AND `d` = '$d' AND `e` = '$e' ");
							} else if ($f != '' && $g == '') {
								$pakar = mysqli_query($connect, "SELECT DISTINCT `g` FROM `pakar` WHERE `a` = '$a' AND `b` = '$b' AND `c` = '$c' AND `d` = '$d' AND `e` = '$e' AND `f` = '$f'");
							} else if ($g != '' && $h == '') {
								$pakar = mysqli_query($connect, "SELECT DISTINCT `h` FROM `pakar` WHERE `a` = '$a' AND `b` = '$b' AND `c` = '$c' AND `d` = '$d' AND `e` = '$e' AND `f` = '$f' AND `g` = '$g'");
							} else if ($h != '' && $i == '') {
								$pakar = mysqli_query($connect, "SELECT DISTINCT `i` FROM `pakar` WHERE `a` = '$a' AND `b` = '$b' AND `c` = '$c' AND `d` = '$d' AND `e` = '$e' AND `f` = '$f' AND `g` = '$g' AND `h` = '$h'");
							} else if ($i != '' && $j == '') {
								$pakar = mysqli_query($connect, "SELECT DISTINCT `j` FROM `pakar` WHERE `a` = '$a' AND `b` = '$b' AND `c` = '$c' AND `d` = '$d' AND `e` = '$e' AND `f` = '$f' AND `g` = '$g' AND `h` = '$h' AND `i` = '$i'");
							} else if ($j != '') {

							}
							 while ($data = mysqli_fetch_array($pakar)) {
								 if ($data[$get] == '') {
									 echo "<tr>";
 									echo "<td width='7%'><input type='radio' name='$get' value='$data[$get]' style='margin-top: 6px;'></td>";
 									echo "<td style='vertical-align:center;text-transform:capitalize'>Tidak Ada Gejala Lain <font color=red>(Klik cek penyakit)</font></td>";
 									echo "</tr>";
								} else {
									echo "<tr>";
									echo "<td width='7%'><input type='radio' name='$get' value='$data[$get]' style='margin-top: 6px;'></td>";
									echo "<td style='vertical-align:center;text-transform:capitalize'>$data[$get]</td>";
									echo "</tr>";
								}
							 }
							 ?>
							 <tr>
								<td colspan="2">
									<input type="hidden" name="no" value="<?php echo $no; ?>">
									<button class="btn btn-primary" type="submit" name="button" style="margin-top:20px;width:100%">Gejala Lainya</button>
								</td>
							 </tr>
						 </form>
						 <tr>
							<td colspan="2">
								<a href="pakar.php?pa=selesai" class="btn btn-success" style="width:100%;margin-top:10px">Cek Penyakit Anda</a>
							</td>
						 </tr>
						 </table>
						 <p style="color:red;font-size:12px;margin-top:20px;">Keterangan : Jika ada salah satu option kosong, anda dapat langsung klik cek penyakit untuk melihat penyakit Anda, jika tidak ada yang kosong maka diharapkan melanjutkan memilih option</p>
					</div>
				</div>
				<div class="col-md-5">
					<div class="container" style="padding:30px;background:#fff;border-radius:10px;width:100%">
						<?php
						echo "<h2>Sistem Pakar</h2>
									<p>Data Gejala dan Penyakit</p>
									<hr>
									<table width='100%'>
									<tr><td width='25%'>Gejala 1 </td><td>=</td><td><font style='text-transform:capitalize;'> $k</font></td></tr>
									<tr><td>Gejala 2 </td><td>=</td><td><font style='text-transform:capitalize;'>  $l</font></td></tr>
									<tr><td>Gejala 3 </td><td>=</td><td><font style='text-transform:capitalize;'>  $m</font></td></tr>
									<tr><td>Gejala 4 </td><td>=</td><td><font style='text-transform:capitalize;'>  $n</font></td></tr>
									<tr><td>Gejala 5 </td><td>=</td><td><font style='text-transform:capitalize;'>  $o</font></td></tr>
									<tr><td>Gejala 6 </td><td>=</td><td><font style='text-transform:capitalize;'>  $p</font></td></tr>
									<tr><td>Gejala 7 </td><td>=</td><td><font style='text-transform:capitalize;'>  $q</font></td></tr>
									<tr><td>Gejala 8 </td><td>=</td><td><font style='text-transform:capitalize;'>  $r</font></td></tr>
									<tr><td>Gejala 9 </td><td>=</td><td><font style='text-transform:capitalize;'>  $s</font></td></tr>
									<tr><td>Gejala 10 </td><td>=</td><td><font style='text-transform:capitalize;'>  $t</font></td></tr>
									</table>
									<hr><h5> Penyakit : <font style='text-transform:capitalize;'>".$_SESSION['penyakit']."</font> </h5><hr>
									<h6> Rekomendasi : <font style='text-transform:capitalize;'>".$_SESSION['rekom']."</font> </h6><br>";
						?>
						<p><a href="pakar.php?pa=ulangi">Ulangi Sistem Pakar</a></p>
						<p><a href="../index.php">Kembali Login</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
