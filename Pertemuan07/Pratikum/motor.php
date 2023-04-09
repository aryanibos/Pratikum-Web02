<?php
class Motor
{
    public $merk;
    public $bensin;
    public $topSpeed;
    public $cc;

    public function __construct($merk, $bensin, $topSpeed, $cc)
    {
        $this->merk = $merk;
        $this->bensin = $bensin;
        $this->topSpeed = $topSpeed;
        $this->cc = $cc;
    }

    public function jalan($jarak)
    {
        return "Motor {$this->merk} berkapasitas {$this->cc} cc dengan top speed {$this->topSpeed} km/jam telah melaju sejauh {$jarak} km. Bensin tersisa: " . round(($this->bensin - ($jarak / 30)), 2) . " liter.";
    }
}


$motor1 = new Motor('Honda', 10, 120, 250);

echo "<br>";

echo  $motor1->jalan(200);


$motor2 = new Motor('Yamaha', 7, 100, 200);

echo "<br>";

echo  $motor2->jalan(100);
