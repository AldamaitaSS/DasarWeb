<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf : A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf : B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf : C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf : D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer <br>";

$jumlahLama = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLama; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "<br>Total skor ujian adalah : $totalSkor <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai :  $nilai (Tidak lulus) <br>";
        continue;
    }
    
    echo "Nilai : $nilai (Lulus) <br>";
}

echo "<hr>";
//soal cerita 1
$nilai_siswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);

for ($i = 0; $i < count($nilai_siswa) - 1; $i++) {
    for ($j = $i + 1; $j < count($nilai_siswa); $j++) {
        if ($nilai_siswa[$i] > $nilai_siswa[$j]) {
            $temp = $nilai_siswa[$i];
            $nilai_siswa[$i] = $nilai_siswa[$j];
            $nilai_siswa[$j] = $temp;
        }
    }
}

$total_nilai = 0;
for ($i = 2; $i < count($nilai_siswa) - 2; $i++) {
    $total_nilai += $nilai_siswa[$i];
}

$jumlah_siswa = count($nilai_siswa) - 4;

$rata_rata = $total_nilai / $jumlah_siswa;

echo "Daftar nilai siswa: ";
for ($i = 2; $i < count($nilai_siswa) - 2; $i++) {
    echo $nilai_siswa[$i];
    if ($i < count($nilai_siswa) - 3) {
        echo ", ";
    }
}
echo "<br>";
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $total_nilai . "<br>";
echo "Jumlah siswa: " . $jumlah_siswa . "<br>";
echo "Rata-rata nilai: " . $rata_rata;

echo "<hr>";
//soal cerita 2
$hargaProduk = 120000;
$batasDiskon = 100000;
$persentaseDiskon = 20;

if ($hargaProduk > $batasDiskon) {
    
    $diskon = ($persentaseDiskon / 100) * $hargaProduk;

    $hargaSetelahDiskon = $hargaProduk - $diskon;

    echo "Harga produk sebelum diskon : Rp " .($hargaProduk) . "<br>";
    echo "Anda mendapatkan diskon sebesar : $persentaseDiskon %<br>";
    echo "Harga yang harus dibayar setelah diskon: Rp " .($hargaSetelahDiskon);
} else {
    echo "Harga produk Rp " .($hargaProduk). "<br>";
    echo "Anda tidak mendapatkan diskon.";
}

echo "<hr>";
// soal cerita 3
$skorPemain = 600;
$skorPemain2 = 400;

$totalSkor = "Total skor pemain adalah: $skorPemain";
$mendapatkanHadiah = "";

if ($skorPemain > 500) {
    $mendapatkanHadiah = "YA";
} else {
    $mendapatkanHadiah = "TIDAK";
}

$totalSkor2 = "Total skor pemain adalah: $skorPemain2";
$mendapatkanHadiah2 = "";

if ($skorPemain2 > 500) {
    $mendapatkanHadiah2 = "YA";
} else {
    $mendapatkanHadiah2 = "TIDAK";
}

echo $totalSkor . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $mendapatkanHadiah" . "<br>";

echo $totalSkor2 . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $mendapatkanHadiah2";

?>
