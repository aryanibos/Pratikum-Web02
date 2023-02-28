<?php

if (isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $pratikum = $_GET['pratikum'];
    
    echo "Nama : $nama <br>";
    echo "Mata Kuliah : $matkul <br>";
    echo "Nilai UTS : $uts <br>";
    echo "Nilai UAS : $uas <br>";
    echo "Nilai Tugas/Pratikum : $pratikum";
}else{
    echo "Tidak Ada Data";
}