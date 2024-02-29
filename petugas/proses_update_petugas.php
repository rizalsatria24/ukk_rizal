<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$iduser= $_POST['iduser'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

 
// update data ke database
if ($password) {
 	mysqli_query($koneksi,"update petugas set nama='$nama', username='$username', level='$level'
        where Iduser='$Iduser'");
 } else {
 	 	mysqli_query($koneksi,"update user set nama='$nama', username='$username', password='$password'
 	 		level='$level' where Iduser='$Iduser'");
 }
  
// mengalihkan halaman kembali ke data_barang.php
header("location:data_pengguna.php?pesan=update");
 
?>

