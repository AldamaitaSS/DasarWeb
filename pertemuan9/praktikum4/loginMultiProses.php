<?php
include "koneksi.php";

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username ='$username' AND password ='$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        if ($row['level'] == 1) {
            echo "Anda berhasil login. Silahkan menuju <a href='homeAdmin.html'>Halaman HOME</a>";
        } else if ($row['level'] == 2) {
            echo "Anda berhasil login. Silahkan menuju <a href='homeGuest.html'>Halaman HOME</a>";
        }
    } else {
        echo "Username atau password salah. Silahkan <a href='loginForm.html'>login kembali</a>";
    }
} else {
    echo "Data tidak lengkap";
}
?>
