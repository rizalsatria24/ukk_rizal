<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$Iduser = $_POST['Iduser'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from user where Iduser='$Iduser'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_pengguna.php?pesan=hapus");
 
?>