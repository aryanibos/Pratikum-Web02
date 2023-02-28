<?php

    // Array Index
    $animals = ['Macan', 'Anjing', 'Beruang', 'Gajah', 'Kucing', 'Kelelawar', 'Paus', 'Hiu'];

    array_push($animals, "Kambing");

    // Mengakses array Index
    var_dump($animals);

    // Array Assosiatif
    $animal = [
        'nama' => $animals[2],
        'jenis' => 'Karnivora',
        'usia' => '4 Bulan'
    ];

    // Mengakses Array Assosiatif
    echo $animal['jenis'];

?>