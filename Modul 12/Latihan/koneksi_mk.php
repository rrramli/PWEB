<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"akademik");
if(!$con = mysqli_connect("localhost","root","")) 
{
echo "Tdk Konek Ke Database, Silahkan Cek Apakah 
 Konfigurasi sudah sesuai !";
} 
if(!mysqli_select_db($con,'akademik')) 
{
echo "Database Tdk Ada, Silahkan cek kembali !"; 
}
?>