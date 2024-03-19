<!-- <?php
// function perkenalan() {
//     echo "Assalamualaikum, ";
//     echo "Perkenalan, nama saya Aldamaita<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";

//     echo "Assalamualaikum, ";
//     echo "Perkenalan, nama saya Aldamaita<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }


// //memanggil fungsi yang sudah dibuat
// perkenalan();
?>  -->

<!-- <?php
// function perkenalan($nama, $salam) {
//     echo $salam.", ";
//     echo "Perkenalan, nama saya" .$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
    
//     }
    
    
//     //memanggil fungsi yang sudah dibuat
//     perkenalan("Aldamaita", "Hallo");

//     echo "<hr";

//     $saya = "Salwa";
//     $ucapkanSalam = "Selamat pagi";

//     // memanggil lagi
//     perkenalan($saya, $ucapkanSalam);
?> -->

<?php
    function perkenalan($nama, $salam="Assalamualaikum") {
        echo $salam.", ";
        echo "Perkenalan, nama saya" .$nama."<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
        
    }
        
    //memanggil fungsi yang sudah dibuat
        perkenalan("Aldamaita", "Hallo");

        echo "<hr";

        $saya = "Salwa";
        $ucapkanSalam = "Selamat pagi";

        // memanggil lagi
        perkenalan($saya);
?>