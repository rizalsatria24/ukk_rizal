<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$ProdukID = $_POST['ProdukID'];
$DetailID = $_POST['DetailID'];
$PelangganID = $_POST['PelangganID'];

 
 
// menghapus data dari database
mysqli_query($koneksi,"update detailpenjualan set ProdukID='$ProdukID' where DetailID='$DetailID'");

// mengalihkan halaman kembali ke detail_pembelian.php
header("location:detail_pembelian.php?PelangganID=$PelangganID");
?>
 