<?php
session_start();
include "../admin/proses/koneksi.php";
$pa = $_REQUEST['pa'];
$no = $_POST['no'];

if ($no == 0 && $pa != 'selesai' && $pa != "ulangi") {
  $a  = $_POST['a'];
  $_SESSION['a'] = $a;
  echo "<script>alert('Gejala 1 : $a');window.location = 'index.php?no=1&data=b&a=$a';</script>";
} else if($no == 1) {
  $b  = $_POST['b'];
  $_SESSION['b'] = $b;
    echo "<script>alert('Gejala 2 : $b');window.location = 'index.php?no=2&data=c&a=".$_SESSION['a']."&b=$b';</script>";
} else if($no == 2) {
  $c  = $_POST['c'];
  $_SESSION['c'] = $c;
    echo "<script>alert('Gejala 3 : $c');window.location = 'index.php?no=3&data=d&a=".$_SESSION['a']."&b=".$_SESSION['b']."&c=$c';</script>";
} else if($no == 3) {
  $d  = $_POST['d'];
  $_SESSION['d'] = $d;
    echo "<script>alert('Gejala 4 : $d');window.location = 'index.php?no=4&data=e&a=".$_SESSION['a']."&b=".$_SESSION['b']."&c=".$_SESSION['c']."&d=$d';</script>";
} else if($no == 4) {
  $e  = $_POST['e'];
  $_SESSION['e'] = $e;
  echo "<script>alert('Gejala 5 : $e');window.location = 'index.php?no=5&data=f&a=".$_SESSION['a']."&b=".$_SESSION['b']."&c=".$_SESSION['c']."&d=".$_SESSION['d']."&e=$e';</script>";
} else if($no == 5) {
  $f  = $_POST['f'];
  $_SESSION['f'] = $f;
    echo "<script>alert('Gejala 6 : $f');window.location = 'index.php?no=6&data=g&a=".$_SESSION['a']."&b=".$_SESSION['b']."&c=".$_SESSION['c']."&d=".$_SESSION['d']."&e=".$_SESSION['e']."&f=$f';</script>";
} else if($no == 6) {
  $g  = $_POST['g'];
  $_SESSION['g'] = $g;
    echo "<script>alert('Gejala 7 : $g');window.location = 'index.php?no=7&data=h&a=".$_SESSION['a']."&b=".$_SESSION['b']."&c=".$_SESSION['c']."&d=".$_SESSION['d']."&e=".$_SESSION['e']."&f=".$_SESSION['f']."&g=$g';</script>";
} else if($no == 7) {
  $h  = $_POST['h'];
  $_SESSION['h'] = $h;
    echo "<script>alert('Gejala 8 : $h');window.location = 'index.php?no=8&data=i&a=".$_SESSION['a']."&b=".$_SESSION['b']."&c=".$_SESSION['c']."&d=".$_SESSION['d']."&e=".$_SESSION['e']."&f=".$_SESSION['f']."&g=".$_SESSION['g']."&h=$h';</script>";
} else if($no == 8) {
  $i  = $_POST['i'];
  $_SESSION['i'] = $i;
    echo "<script>alert('Gejala 9 : $i');window.location = 'index.php?no=9&data=j&a=".$_SESSION['a']."&b=".$_SESSION['b']."&c=".$_SESSION['c']."&d=".$_SESSION['d']."&e=".$_SESSION['e']."&f=".$_SESSION['f']."&g=".$_SESSION['g']."&h=".$_SESSION['h']."&i=$i';</script>";
} else if($no == 9) {
  $j  = $_POST['j'];
  $_SESSION['j'] = $j;
  echo "<script>alert('Gejala 10 : $j');window.location = 'index.php?no=10&data=i&a=".$_SESSION['a']."&b=".$_SESSION['b']."&c=".$_SESSION['c']."&d=".$_SESSION['d']."&e=".$_SESSION['e']."&f=".$_SESSION['f']."&g=".$_SESSION['g']."&h=".$_SESSION['h']."&i=".$_SESSION['i']."&j=$j';</script>";
}

if ($pa == "selesai") {
  $pakar = mysqli_query($connect, "SELECT * FROM `pakar` WHERE `a` = '".$_SESSION['a']."' AND `b` = '".$_SESSION['b']."' AND `c` = '".$_SESSION['c']."' AND `d` = '".$_SESSION['d']."' AND `e` = '".$_SESSION['e']."' AND `f` = '".$_SESSION['f']."' AND `g` = '".$_SESSION['g']."' AND `h` = '".$_SESSION['h']."' AND `i` = '".$_SESSION['i']."' AND `j` = '".$_SESSION['j']."'");
  while ($penyakit = mysqli_fetch_row($pakar)) {
      $_SESSION['penyakit'] = $penyakit[11];
      $_SESSION['rekom'] = $penyakit[12];
      $sakit = $_SESSION['penyakit'];

  }
  echo "<script>alert('Penyakit : $sakit');window.location = 'index.php'sakit=$sakit'</script>";
} else if($pa == "ulangi") {
  session_destroy();
  echo "<script>alert('Data Direset');window.location = 'index.php'</script>";
}
 ?>
