<?php
    // Pemrosesan data setelah pengiriman formulir, menampilkan informasi yang dipilih pengguna
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedBuah = htmlspecialchars($_POST['buah']);

        if (isset($_POST['warna'])) {
            $selectedWarna = $_POST['warna'];
        } else {
            $selectedWarna = [];
        }

        $selectedJenisKelamin = $_POST['jenis_kelamin'];

        echo "Anda memilih buah : " . $selectedBuah . "<br>";

        if (!empty($selectedWarna)) {
            echo "Warna favorite Anda : " . implode(", ", $selectedWarna) . "<br>";
        } else {
            echo "Anda tidak memilih warna favorit.<br>";
        }

        echo "Jenis kelamin Anda : " . $selectedJenisKelamin;
    }
?>