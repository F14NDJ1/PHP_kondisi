<?php

$jml = 3;
$barang = 3;
$diskon1 = 0.2;
$diskon2 = 0.15;

switch ($barang ) {
 case 1:
 $hrg_brg = 20000;
 $bayar = $jml * $hrg_brg ;
 if($bayar > 75000){
     $bayar_diskon = $bayar - ($bayar * $diskon2);
     echo "Jumlah barang ".$jml. '<br>';
     echo "Harga barang Rp.".$hrg_brg. '<br>';
     echo "Mendapatkan diskon 15%". '<br>';
     echo "Sebelum mendapatkan diskon Rp.".$bayar. '<br>';
     echo "Jumlah bayar setelah diskon Rp.".$bayar_diskon ;   
 }else{       
     echo "Jumlah barang ".$jml. '<br>';
     echo "Harga barang Rp.".$hrg_brg. '<br>';              
     echo "Jumlah bayar Rp.".$bayar ;
 }
 break ;

 case 2:
 $hrg_brg = 30000;
 $bayar = $jml * $hrg_brg ;
 if($bayar > 75000){
     $bayar_diskon = $bayar - ($bayar * $diskon2); 
     echo "Jumlah barang ".$jml. '<br>';
     echo "Harga barang Rp.".$hrg_brg. '<br>';
     echo "Mendapatkan diskon 15%". '<br>';
     echo "Sebelum mendapatkan diskon Rp.".$bayar. '<br>';
     echo "Jumlah bayar setelah diskon Rp.".$bayar_diskon ;   
 }else{
     echo "Jumlah barang ".$jml. '<br>';
     echo "Harga barang Rp.".$hrg_brg. '<br>';              
     echo "Jumlah bayar Rp.".$bayar ;
 }
 break ;

 case 3:
 $hrg_brg = 50000;
 $bayar = $jml * $hrg_brg ;
 $bayar_diskon = $bayar - ($bayar * $diskon1);
 echo "Jumlah barang ".$jml. '<br>';
 echo "Harga barang Rp.".$hrg_brg. '<br>';
 echo "Mendapatkan diskon 20%". '<br>';
 echo "Sebelum mendapatkan diskon Rp.".$bayar. '<br>';
 echo "Jumlah bayar setelah diskon Rp.".$bayar_diskon ;
 break ;

}
?>