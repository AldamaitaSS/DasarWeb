<?php
    if (isset($_POST["beliNovel"]) && ($_POST["beliBuku"])) {
        setcookie("beliNovel", $_POST["beliNovel"]);
        setcookie("beliBuku", $_POST["beliBuku"]);
        header("location: keranjangBelanja.php");
    }
?>