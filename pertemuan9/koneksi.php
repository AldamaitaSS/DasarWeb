<!-- Membuat Tabel -->
<!-- <?php
// $hostname = "localhost";
// $username = "root";
// $password = "";
// $database = "prakwebdb";

// $connect = mysqli_connect($hostname, $username, $password, $database);

// if ($connect) {
//     echo "Koneksi ke MySQL berhasil <br>";
// } else {
//     echo "Koneksi ke MySQL gagal" . mysqli_connect_error();
// }

// $query = "CREATE TABLE user (
//     id int primary key auto_increment,
//     username varchar(50) not null,
//     password varchar(50))";

//     if (mysqli_query($connect, $query)) {
//         echo "Tabel user berhasil dibuat";
//     } else {
//         echo "Tabel user gagal dibuat <br>" . mysqli_error($connect);
//     }
//     mysqli_close($connect);
?> -->

<!-- Membuat Data -->
<!-- <?php
// $hostname = "localhost";
// $username = "root";
// $password = "";
// $database = "prakwebdb";

// $connect = mysqli_connect($hostname, $username, $password, $database);
// if (!$connect) {
//     die("Koneksi ke MySQL gagal : " .mysqli_connect_error());
// }

// echo "Koneksi ke MySQL berhasil <br>";

// $nama = "admin";
// $passwordEnkripsi = md5('123');

// $query = "INSERT INTO user (username, password) VALUES ('$nama', '$passwordEnkripsi')";

// if (mysqli_query($connect, $query)) {
//     echo "Data baru berhasil ditambahkan";
// } else {
//     echo "Data baru gagal ditambahkan : " . mysqli_error($connect);
// }

// mysqli_close($connect);

?> -->

<?php
$connect = mysqli_connect("localhost", "root", "", "prakwebdb");
// $result = mysqli_query($con, "CREATE TABLE `prakwebdb`.`user`
//     (`id` INT NOT NULL ,
//     `username` VARCHAR(50) NOT NULL ,
//     `password` VARCHAR(50) NOT NULL ,
//     PRIMARY KEY (`id`)) ENGINE = InnoDB;");
?>
<!-- mengisi tabel sql -->
<!-- <?php
// $connect = mysqli_connect("localhost", "root", "", "prakwebdb");
// $input = mysqli_query($con, "INSERT INTO `user` (`id`, `username`, `password`) VALUES ('1', 'admin', MD5('123'));");
?> -->