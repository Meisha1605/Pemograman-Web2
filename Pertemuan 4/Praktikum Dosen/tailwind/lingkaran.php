<?php
class Lingkaran {
    private float $jari; // Ubah menjadi private agar lebih aman
    public const PHI = 3.14;

    public function __construct(float $jari) {
        $this->jari = $jari;
    }

    // Getter untuk jari-jari
    public function getJari(): float {
        return $this->jari;
    }

    public function getLuas(): float {
        return self::PHI * $this->jari * $this->jari;
    }

    public function getKeliling(): float {
        return 2.0 * self::PHI * $this->jari;
    }

    public function cetak(): void {
        echo "Lingkaran dengan jari-jari " . $this->jari;
        echo "<br>Luas = " . number_format($this->getLuas(), 2);
        echo "<br>Keliling = " . number_format($this->getKeliling(), 2);
    }
}
?>
