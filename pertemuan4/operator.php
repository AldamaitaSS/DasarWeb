<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// tambahan
echo "Nilai a: $a <br>";
echo "Nilai b: $b <br>";
echo "<hr>";
echo "Hasil Penjumlahan a + b: $hasilTambah <br>";
echo "Hasil Pengurangan a - b: $hasilKurang <br>";
echo "Hasil Perkalian a * b: $hasilKali <br>";
echo "Hasil Pembagian a / b: $hasilBagi <br>";
echo "Sisa Bagi a % b: $sisaBagi <br>";
echo "Hasil Pangkat a ^ b: $pangkat <br>";

echo "<hr>";
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

//tambahan
echo "Apakah a sama dengan b? " . ($hasilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a tidak sama dengan b? " . ($hasilTidakSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a lebih kecil dari b? " . ($hasilLebihKecil ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a lebih besar dari b? " . ($hasilLebihBesar ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a lebih kecil atau sama dengan b? " . ($hasilLebihKecilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a lebih besar atau sama dengan b? " . ($hasilLebihBesarSama ? 'Ya' : 'Tidak') . "<br>";

echo "<hr>";
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

//tambahan
echo "Hasil Operasi AND a && b: " . ($hasilAnd ? 'True' : 'False') . "<br>";
echo "Hasil Operasi OR a || b: " . ($hasilOr ? 'True' : 'False') . "<br>";
echo "Hasil Operasi NOT !$a: " . ($hasilNotA ? 'True' : 'False') . "<br>";
echo "Hasil Operasi NOT !$b: " . ($hasilNotB ? 'True' : 'False') . "<br>";

echo "<hr>";
$tambah = $a += $b;
$kurang = $a -= $b;
$kali = $a *= $b;
$bagi = $a /= $b;
$persen = $a %= $b;

//tambahan
echo "Setelah operasi (a += b): " . $tambah ."<br>";
echo "Setelah operasi (a -= b): " . $kurang . "<br>";
echo "Setelah operasi (a *= b): " . $kali . "<br>";
echo "Setelah operasi (a /= b): " . $bagi . "<br>";
echo "Setelah operasi (a %= b): " . $persen . "<br>";

echo "<hr>";
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

//tambahan
echo "Apakah a identik dengan b? " . ($hasilIdentik ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah a tidak identik dengan b? " . ($hasilTidakIdentik ? 'Ya' : 'Tidak') . "<br>";

//restoran
echo "<hr>";
$totalKursi = 45;
$kursiDitempati = 28;
$kursiKosong = $totalKursi - $kursiDitempati;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah kursi yang masih kosong: $kursiKosong<br>";
echo "Persentase kursi yang masih kosong: " .($persentaseKosong) . "%";
?>