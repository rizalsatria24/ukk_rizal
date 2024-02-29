<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$PelangganID = $_POST['PelangganID'];
$NamaPelanggan = $_POST['NamaPelanggan'];
$NomorTelepon = $_POST['NomorTelepon'];
$Alamat = $_POST['Alamat'];
 
// menghapus data dari database
mysqli_query($koneksi,"update pelanggan set NamaPelanggan='$NamaPelanggan',NomorTelepon='$NomorTelepon',
	Alamat='$Alamat' where PelangganID='$PelangganID'");
 
// mengalihkan halaman kembali ke index.php
header("location:pembelian.php?pesan=update");
 ?>