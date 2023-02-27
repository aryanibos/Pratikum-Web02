<?php

    $jam = 06;

    echo "Saat ini pukul $jam <br>";

    $hasil = $jam < 12;

    if ($hasil) {
        echo "selamat Pagi!";
    } elseif ($jam < 18) {
        echo "Selamat Sore!";
    } else {
        echo "Selamat Malam!";
    }
    
?>