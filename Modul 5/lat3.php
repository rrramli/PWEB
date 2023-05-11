<?php
$nim = "0411500400"; 
$nama = 'Chotimatul Musyarofah'; 
$umur = 23; 
$nilai = 82.25; 
$status = TRUE; 
?>
<table border= 0>
    <tr>
        <td>Nim</td>
        <td>:</td>
        <td>
            <?php
                echo " $nim "; 
            ?>
        </td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>
            <?php
            echo "$nama";
            ?>
        </td>
    </tr>
    <tr>
        <td>Umur</td>
        <td>:</td>
        <td>
            <?php
            echo "  $umur"; 
            ?>
        </td>
    </tr>
    <tr>
        <td>Nilai</td>
        <td>:</td>
        <td>
            <?php
            echo " $nilai";
            ?>
        </td>
    </tr>
</table>