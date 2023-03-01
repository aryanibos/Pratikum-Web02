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
        echo "Predikat : Sangat Kurang";
    } elseif ($n_rata <= 55) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/Pratikum : $pratikum <br>";
        echo "Nilai Rata-rata : ". number_format($n_rata,2,","). "<br>";
        echo "Grade Nilai : D <br>";
        echo "Predikat : Kurang";
    } elseif ($n_rata <= 69) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/Pratikum : $pratikum <br>";
        echo "Nilai Rata-rata : ". number_format($n_rata,2,","). "<br>";
        echo "Grade Nilai : C <br>";
        echo "Predikat : Cukup ";
    } elseif ($n_rata <= 84) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/Pratikum : $pratikum <br>";
        echo "Nilai Rata-rata : ". number_format($n_rata,2,","). "<br>";
        echo "Grade Nilai : B <br>";
        echo "Predikat : Memuaskan";
    } elseif ($n_rata <= 100) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/Pratikum : $pratikum <br>";
        echo "Nilai Rata-rata : ". number_format($n_rata,2,","). "<br>";
        echo "Grade Nilai : A <br>";
        echo "Predikat : Sangat Memuaskan";
    } else {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/Pratikum : $pratikum <br>";
        echo "Nilai Rata-rata : ". number_format($n_rata,2,","). "<br>";
        echo "Grade Nilai : I <br>";
        echo "Predikat : Tidak Ada";
    }
}else{
    echo "Tidak Ada Data";
}