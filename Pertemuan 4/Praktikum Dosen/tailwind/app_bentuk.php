<?php
require_once 'lingkaran.php'; // Memanggil class Lingkaran

$lingkaran1 = new Lingkaran(8.4);
$lingkaran2 = new Lingkaran(14);

// Menampilkan hasil
echo 'NILAI PHI adalah ' . Lingkaran::PHI;
echo '<br> Jari-jari lingkaran 1 = ' . $lingkaran1->getJari();
echo '<br> Luas Lingkaran 1 = ' . number_format($lingkaran1->getLuas(), 2);
echo '<br> Keliling Lingkaran 1 = ' . number_format($lingkaran1->getKeliling(), 2);
echo '<hr>';
$lingkaran1->cetak();
echo '<br>';
?>
