<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>
</head>
<body>
    <h2>Keranjang Belanja</h2>

    <?php
    
    if (isset($_COOKIE['beliNovel']) && isset($_COOKIE['beliBuku'])) {
        
        $beliNovel = $_COOKIE['beliNovel'];
        $beliBuku = $_COOKIE['beliBuku'];
    } else {
        
        $beliNovel = 0;
        $beliBuku = 0;
    }
    echo "Jumlah Novel: " . $beliNovel . "<br>";
    echo "Jumlah Buku: " . $beliBuku;
    ?>
</body>
</html>
