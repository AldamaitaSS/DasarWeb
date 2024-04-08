<?php
// $targetDirectory = "documents/";
$targetDirectory = "uploads/";

// Membuat direktori jika tidak ada
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (isset($_FILES['file']['name'][0])) {
    $totalFiles = count($_FILES['file']['name']); // Menghitung jumlah file yang diunggah

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['file']['name'][$i]; // Nama file
        $targetFile = $targetDirectory . $fileName; // Path untuk menyimpan file
        $fileTmpName = $_FILES['file']['tmp_name'][$i]; // Lokasi sementara file yang diunggah

        // Memindahkan file ke direktori target
        if (move_uploaded_file($fileTmpName, $targetFile)) {
            echo "File <b> $fileName</b> berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah file $fileName.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
