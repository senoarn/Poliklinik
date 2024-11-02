<?php
error_reporting(0);
session_start();
include "koneksi.php";

$email     = $_POST['email'];
$password  = $_POST['password'];
$user     = "SELECT * FROM `user` where email = '$email' AND password = '$password' ";
$result   = mysqli_query($connect,$user);

if (mysqli_num_rows($result) != 0)
  {
  while ($row=mysqli_fetch_row($result))
    {
    $_SESSION['kode']   = $row[0];
    $_SESSION['nama']   = $row[1];
    $_SESSION['email']  = $row[2];
    $_SESSION['jabatan']= $row[4];
    }

    echo "<script>window.location = '../panel-user.php';</script>";
  } else {
    echo "<script>alert('Login Gagal, Pastikan Email dan Password Benar');window.location = '../../index.php';</script>";
  }


?>
