<?php

class Hero
{
    // Langkah Awal
    // public $name = "Alucard";
    // public $health = 3200;
    // public $demage = 300;

    // Lanjutan ke-2
    public $name;
    public $health;
    public $demage;
    public $level = 1;

    // Lanjutan ke-2
    public function __construct($name, $health, $demage)
    {
        $this->name = $name;
        $this->health = $health;
        $this->demage = $demage;
    }

    // Lanjutan ke-2 menampilkan informasi dari hero 
    public function getInfo()
    {
        echo "Nama Hero: " . $this->name;
        echo "<br>Health: " . $this->health;
        echo "<br>Demage: " . $this->demage;
        echo "<br>Level: " . $this->level . "<br>";
    }

    // Method untuk naik level 
    public function levelUp()
    {
        $this->level++;
    }

    // Method untuk melalkukan attack
    public function attack($target)
    {
        $target->health -= $this->demage;
    }
}

// lanjutan ke-2

$hero1 = new Hero("Alucard", 3200, 300);

$hero2 = new Hero("Zilong", 3000, 315);

// cara memanggil menggunakan method yang ada di dalam funtion getInfo()

$hero1->getInfo();

echo "<hr />";
// cara membuat level naik dalam funtion getInfo()
$hero1->levelUp();

$hero2->attack($hero1);

$hero1->getInfo();

// cara memanggil kedua tanpa mengambil dari function getInfo()
// echo "Nama Hero : " . $hero2->name . "<br/>";
// echo "Darah Hero : " . $hero2->health . "<br/>";
// echo "Demage Hero : " . $hero2->demage . "<br/>";


// Langkah Awal
// # Membuat object dari class Hero
// $hero1 = new Hero;

// echo "Nama Hero: " . $hero1->name;