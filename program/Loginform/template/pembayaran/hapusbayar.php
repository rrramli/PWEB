<?php 
// koneksi database
include 'koneksibayar.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from pembayaran where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tabelbayar.php");
 
?>