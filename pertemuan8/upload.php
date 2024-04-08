<?php

// $targetDirectory = "uploads/";

// if (!file_exists($targetDirectory)) {
    
//     if (!mkdir($targetDirectory, 0755, true)) {
//         die("Gagal membuat direktori uploads");
//     }
// }

// if (isset($_POST["submit"])) {
//     $targetDirectory = "uploads/";
//     $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
//     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//     $allowedExtensions = array("jpg", "jpeg", "png", "gif");

//     $maxFileSize = 5 * 1024 * 1024;

//     if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
//         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
//             echo "File berhasil diunggah";
//         } else {
//             echo "gagal mengunggah file.";
//         }
//     } else {
//         echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
//     }

// }


// membuat file thumbnail
$targetDirectory = "uploads/";

if (!file_exists($targetDirectory)) {
    if (!mkdir($targetDirectory, 0755, true)) {
        die("Gagal membuat direktori uploads");
    }
}

if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxFileSize = 5 * 1024 * 1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah";

            // Langkah 5: Buat thumbnail
            $thumbnailDirectory = "thumbnails/";

            // Membuat direktori thumbnail jika belum ada
            if (!file_exists($thumbnailDirectory)) {
                mkdir($thumbnailDirectory, 0755, true);
            }

            // Mendapatkan nama file thumbnail
            $thumbnailFileName = $thumbnailDirectory . "thumbnail_" . basename($_FILES["fileToUpload"]["name"]);

            // Mengambil ukuran gambar asli
            list($width, $height) = getimagesize($targetFile);

            // Menghitung ukuran thumbnail
            $thumbnailWidth = 200;
            $thumbnailHeight = intval($height * ($thumbnailWidth / $width));

            // Membuat gambar thumbnail
            if ($fileType == "jpeg" || $fileType == "jpg") {
                $sourceImage = imagecreatefromjpeg($targetFile);
            } elseif ($fileType == "png") {
                $sourceImage = imagecreatefrompng($targetFile);
            }

            $thumbnailImage = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);
            imagecopyresampled($thumbnailImage, $sourceImage, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $width, $height);

            // Simpan thumbnail
            imagejpeg($thumbnailImage, $thumbnailFileName);

            // Hapus gambar sumber dan thumbnail dari memori
            imagedestroy($sourceImage);  
            imagedestroy($thumbnailImage);

            echo "<br>Thumbnail berhasil dibuat: " . "<br><img src='$thumbnailFileName' alt='Thumbnail'>";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}


// if (isset($_POST["submit"])) {
//     $targetDirectory = "document/";
//     $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
//     $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//     $allowedExtensions = array("txt", "pdf", "doc", "docx");
//     $maxFileSize = 10 * 1024 * 1024;

    
//         if (in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
//             if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
//                 echo "Dokumen berhasil diunggah";
//             } else {
//                 echo "Gagal mengunggah dokumen";
//             }
//         } else {
//             echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
//         }
    
// }

?>


