<?php
$i=1;
$n = 3; //menentukan variable yang akan ditambahkan
$hasil = 0;
    while ($i<=$n){
        $hasil += $i;
        if($i !=$n) {
            echo "$i + ";
        }elseif($i = $n) {
            echo "$i = ";
        }$i++;
    }
    echo "$hasil";
// }
?>