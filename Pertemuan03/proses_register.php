<?php

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $prodi = $_POST['prodi'];
    $skills = $_POST['skill'];
    $domisili = $_POST['tempat'];
    $email = $_POST['email'];

    function skor_skill($skills)
    {
        $skill_list = [
            "HTML"=>10, 
            "CSS"=>10,
            "JavaScript"=>20,
            "RWD Bootstrap"=>20,
            "PHP"=>30,
            "Pyhon"=>30,
            "Java"=>50
        ];

        $hasil = 0;
        foreach ($skills as $skill) {
            $hasil = $hasil + $skill_list[$skill];
        }
        return $hasil;
    }

    function Kategori_skill($skills)
    {
        $skill_list = [
            "HTML"=>10, 
            "CSS"=>10,
            "JavaScript"=>20,
            "RWD Bootstrap"=>20,
            "PHP"=>30,
            "Pyhon"=>30,
            "Java"=>50
        ];

        $hasil = 0;

        foreach ($skills as $skill) {
            $hasil += $skill_list[$skill];
        }

        switch ($hasil) {
            case ($hasil >= 100 && $hasil <= 150):
                $hasil = "Sangat Baik";
                break;
            case ($hasil >= 60 && $hasil <= 99):
                $hasil = "Baik";
                break;
            case ($hasil >= 40 && $hasil <= 59):
                $hasil = "Cukup";
                break;
            case ($hasil >= 0 && $hasil <= 39):
                $hasil = "Kurang";
                break;
            default:
                $hasil = "Tidak Memandai";
                break;
        }
        
        // if ($hasil >= 100 ) {
        //     $hasil = "Sangat Baik";
        // } elseif ($hasil >= 60) {
        //     $hasil = "Baik";
        // } elseif ($hasil >= 40) {
        //     $hasil = "Cukup";
        // } elseif ($hasil >= 0) {
        //     $hasil = "Kurang";
        // } else {
        //     $hasil = "Tidak Memandai";
        // }
        
        return $hasil;
    }
    
    echo "NIM : $nim";
    echo "<br>Nama : $nama";
    echo "<br>Jenis Kelamin : $gender";
    echo "<br>Program Studi : $prodi";
    echo "<br>Skill : ";
    foreach ($skills as $skill) {
        echo $skill. ", ";
    }
    echo "<br>Skor Skill : " . skor_skill($skills);
    echo "<br>Kategori Skill: " . Kategori_skill($skills);
    echo "<br>Domisili : $domisili";
    echo "<br>Email : $email";
} else {
    echo "
    Data Belum di Masukkan, Silahkan Masukkan dulu melalui FORM DAFTAR <a href='form_register.php'>disini.</a>";
}


?>