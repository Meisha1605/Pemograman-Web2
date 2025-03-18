<?php
class NilaiMahasiswa {
    public string $nama;
    public string $matakuliah;
    public int $nilai_uts;
    public int $nilai_uas;
    public int $nilai_tugas;

    public function __construct($nama, $matakuliah, $nilai_uts, $nilai_uas, $nilai_tugas) {
        $this->nama = $nama;
        $this->matakuliah = $matakuliah;
        $this->nilai_uts = $nilai_uts;
        $this->nilai_uas = $nilai_uas;
        $this->nilai_tugas = $nilai_tugas;
    }

    // Menghitung Nilai Akhir
    public function getNA(): float {
        return ($this->nilai_uts * 0.3) + ($this->nilai_uas * 0.4) + ($this->nilai_tugas * 0.3);
    }

    // Menentukan Status Kelulusan
    public function kelulusan(): string {
        return $this->getNA() >= 60 ? "Lulus" : "Tidak Lulus";
    }
}
?>
