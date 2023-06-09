<?php 
// koneksi database
include 'koneksibayar.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$nominal = $_POST['nominal'];
$ke = $_POST['ke'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into pembayaran (tanggal, nama, nominal, ke) values('$tanggal','$nama','$nominal','$ke')");
 
// mengalihkan halaman kembali ke tabel.php
header("location:tabelbayar.php");
 
?>