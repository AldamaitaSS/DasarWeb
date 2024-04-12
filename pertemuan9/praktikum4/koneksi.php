<?php
$connect = mysqli_connect("localhost", "root", "", "prakwebdb");


// Buat tabel user jika belum ada
// $queryCreateTable = "CREATE TABLE IF NOT EXISTS `user` (
//     `id` INT AUTO_INCREMENT PRIMARY KEY,
//     `username` VARCHAR(50) NOT NULL,
//     `password` VARCHAR(50) NOT NULL,
//     `level` INT DEFAULT 2
// )";

// if (mysqli_query($connect, $queryCreateTable)) {
//     echo "Tabel user berhasil dibuat atau sudah ada <br>";
// } else {
//     echo "Tabel user gagal dibuat <br>" . mysqli_error($connect);
// }

// Insert data default jika belum ada data
$queryInsertData = "INSERT INTO `user` (`username`, `password`, `level`) VALUES ('guest', '" . md5('234') . "', 2)";

if (mysqli_query($connect, $queryInsertData)) {
    echo "Data default berhasil ditambahkan <br>";
} else {
    echo "Data default gagal ditambahkan <br>" . mysqli_error($connect);
}


?>
