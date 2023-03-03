<?php

if (isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $pratikum = $_GET['pratikum'];
    $n_rata = ($uts + $uas + $pratikum) / 3;

    if ($n_rata <= 35) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/Pratikum : $pratikum <br>";
        echo "Nilai Rata-rata : ". number_format($n_rata,2,","). "<br>";
        echo "Grade Nilai : E <br>";
    } elseif ($n_rata <= 55) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/Pratikum : $pratikum <br>";
        echo "Nilai Rata-rata : ". number_format($n_rata,2,","). "<br>";
        echo "Grade Nilai : D <br>";
    } elseif ($n_rata <= 69) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/Pratikum : $pratikum <br>";
        echo "Nilai Rata-rata : ". number_format($n_rata,2,","). "<br>";
        echo "Grade Nilai : C <br>";
    } elseif ($n_rata <= 84) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/Pratikum : $pratikum <br>";
        echo "Nilai Rata-rata : ". number_format($n_rata,2,","). "<br>";
        echo "Grade Nilai : B <br>";
    } elseif ($n_rata <= 100) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/Pratikum : $pratikum <br>";
        echo "Nilai Rata-rata : ". number_format($n_rata,2,","). "<br>";
        echo "Grade Nilai : A <br>";
    } else {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/Pratikum : $pratikum <br>";
        echo "Nilai Rata-rata : ". number_format($n_rata,2,","). "<br>";
        echo "Grade Nilai : I <br>";
    }

    switch ($n_rata) {
        case ($n_rata >= 0 && $n_rata <= 35) :
            echo "Predikat : Sangat Kurang";
            break;
        
        case ($n_rata >= 36 && $n_rata <= 55) :
            echo "Predikat : Kurang";
            break;
        
        case ($n_rata >= 56 && $n_rata <= 69) :
            echo "Predikat : Cukup";
            break;

        case ($n_rata >= 70 && $n_rata <= 84) :
            echo "Predikat : Memuaskan";
            break;
        
        case ($n_rata >= 85) :
            echo "Predikat : Sangat Memuaskan";
            break;

        default:
            echo "Predikat : Tidak Ada";
            break;
    }

    if ($n_rata >= 55) {
        echo "<br><h3>Selamat Kamu [ <span style='color: green;'>LULUS</span> ]</h3>";
    } else {
        echo "<br><h3>Maaf Kamu [ <span style='color: red;'>Tidak LULUS</span> ], Silahkan Coba Lagi di Tahun Depan...</h3>";
    }
    
}else{
    echo "Tidak Ada Data";
}