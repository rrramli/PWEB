<?php 
// koneksi database
include 'koneksibayar.php';
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$nominal = $_POST['nominal'];
$ke = $_POST['ke'];
// update data ke database
mysqli_query($koneksi,"update pembayaran set id='$id', tanggal='$tanggal', nama='$nama', nominal='$nominal', ke='$ke' where id='$id'");
// mengalihkan halaman kembali ke index.php
header("location:tabelbayar.php");
?>