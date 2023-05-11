<?php
$server=$_SERVER['PHP_SELF'];
?>
<fieldset><legend>Input Nilai</legend>
<form action="<?php echo $server;?>" method="post">
 <table width="301" border="0">
 <tr>
 <td width="91">Nilai</td>
 <td width="10">:</td>
 <td width="178"><input type="text" name="skor_nilai" id="textfield"></td>
 </tr>
 <!-- Menerima data dengan script PHP -->

 <tr>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td><input type="submit" name="button" id="button" 
value="Proses"></td>
 </tr>
 <tr>
    <td colspan=3>
         <?php
$skor=$_POST['skor_nilai'];
if($skor%2==0) 
{
echo $skor. " Adalah Bilangan Genap";
}
else
{
echo $skor. " Adalah Bilangan Ganjil";
}
?>
    </td>
</tr>
 </table>
</form>
</fieldset>