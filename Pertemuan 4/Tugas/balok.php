<?php

// Class Balok
class Balok {
    public $panjang;
    public $lebar;
    public $tinggi;

    // Konstruktor balok
    function __construct($panjang, $lebar, $tinggi) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;
    }

    // Method untuk menghitung volume balok
    function getVolume() {
        return $this->panjang * $this->lebar * $this->tinggi;
    }

    // Method untuk menghitung luas permukaan balok
    function getLuasPermukaan() {
        return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Ruang - Balok</title>
</head>
<body>
    <div class="section">

    <h2>Contoh Penggunaan Balok</h2>

    <?php
    $balok = new Balok(9, 4, 5);

    echo "Panjang : " . $balok->panjang . "<br>";
    echo "Lebar : " . $balok->lebar . "<br>";
    echo "Tinggi : " . $balok->tinggi . "<br>";
    echo '<hr>';
    echo "Volume : " . $balok->getVolume() . "<br>";
    echo "Luas Permukaan : " . $balok->getLuasPermukaan() . "<br>";
    ?>
    </div>

</body>
</html>
