<?php
$kode=$_GET['kode_buku'];
$jdl=$_GET['judul'];
$pnrbt=$_GET['penerbit'];
$pngrng=$_GET['pengarang'];
$tahun=$_GET['tahun_terbit'];
echo "Kode Buku : " .$kode. "<br>";
echo "Judul Buku : " .$jdl."<br>";
echo "Penerbit : " .$pnrbt. "<br>";
echo "Pengarang : " .$pngrng. "<br>";
echo "Tahun Terbit : " .$tahun. "<br>";
?>