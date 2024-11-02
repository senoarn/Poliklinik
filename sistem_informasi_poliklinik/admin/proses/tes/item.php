<?php
error_reporting(0);
session_start();
include "koneksi.php";
$id           = $_REQUEST['id'];
$no           = $_REQUEST['no'];
$item         = $_POST['item'];
$harga        = $_POST['harga'];
$stok         = $_POST['stok'];
$date         = date('d/m/Y h:i:sa');
$name         = $_SESSION['nama'];
$file_1     = basename($_FILES["file1"]["name"]);

if ($id == "tambah") {
  $target_dir = "produk/";
  $target_file_1 = $target_dir . basename($_FILES["file1"]["name"]);
  if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file_1)) {
  } else {
  }
    $insert = mysqli_query($connect, "INSERT INTO `product` (`id`, `name`, `price`, `quantity`, `description`) VALUES (NULL, '$item', '$harga', '$stok', '$file_1');");
    echo "<script>alert('Data Berhasil Ditambahkan'); window.location = '../tambah-item.php';</script>";
  } else if($id == "edit") {
  $proses = mysqli_query($connect,"UPDATE `product` SET `name` = '$item', `price` = '$harga', `quantity` = '$stok' WHERE `product`.`id` = '$no';");
  if ($file_1 != '') {
    $target_dir = "produk/";
    $target_file_1 = $target_dir . basename($_FILES["file1"]["name"]);
    if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file_1)) {
      // echo "The file ". basename( $_FILES["file1"]["name"]). " has been uploaded.";
    } else {
      // echo "Sorry, there was an error uploading your file.";
    }
    $img_update = mysqli_query($connect, "UPDATE `product` SET `description` = '$file_1' WHERE `product`.`id` = '$no';");
  }
  echo "<script>alert('Berhasil Diedit'); window.location = '../tambah-item.php';</script>";
}
