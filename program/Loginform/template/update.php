<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$program_studi = $_POST['program_studi'];
$semester = $_POST['semester'];
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama', program_studi='$program_studi', semester='$semester' where nim='$nim'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>