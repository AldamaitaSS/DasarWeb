<?php
$nama = @$_GET['alda']; //tanda @ agar tidak ada peringatan error ketika key-nya kosong 
$usia = @$_GET['20']; //tanda @ agar tidak ada peringatan error ketika key-nya kosong

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>