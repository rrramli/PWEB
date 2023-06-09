<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$program_studi = $_POST['program_studi'];
$semester = $_POST['semester'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa (nim, nama, program_studi, semester) values('$nim','$nama','$program_studi','$semester')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>