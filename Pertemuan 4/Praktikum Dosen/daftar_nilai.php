<?php 
require_once 'nilai_mahasiswa.php';

$data_mhs = [];

// Data Awal
$data_mhs[] = new NilaiMahasiswa("Hakim", "Pemrograman Web", 30, 25, 15);
$data_mhs[] = new NilaiMahasiswa("Ikhsan", "Pemrograman Web", 40, 60, 20);
$data_mhs[] = new NilaiMahasiswa("Kaff", "Pemrograman Web", 50, 35, 78);

// Proses Form Input
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $matakuliah = $_POST['matakuliah'];
    $nilai_uts = (int) $_POST['nilai_uts'];
    $nilai_uas = (int) $_POST['nilai_uas'];
    $nilai_tugas = (int) $_POST['nilai_tugas'];

    // Tambahkan ke dalam array
    $data_mhs[] = new NilaiMahasiswa($nama, $matakuliah, $nilai_uts, $nilai_uas, $nilai_tugas);
}
?>

<h3>Input Data Mahasiswa</h3>

<form method="POST">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" required><br><br>

    <label for="matakuliah">Mata Kuliah</label>
    <input type="text" name="matakuliah" id="matakuliah" required><br><br>

    <label for="nilai_uts">UTS</label>
    <input type="number" name="nilai_uts" id="nilai_uts" required><br><br>

    <label for="nilai_uas">UAS</label>
    <input type="number" name="nilai_uas" id="nilai_uas" required><br><br>

    <label for="nilai_tugas">Tugas</label>
    <input type="number" name="nilai_tugas" id="nilai_tugas" required><br><br>

    <input type="submit" value="Simpan">
</form>

<h3>Daftar Nilai Mahasiswa</h3>

<table border="1" cellpadding="5" cellspacing="0" width="100%">
     <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>Nilai UTS</th>
              <th>Nilai UAS</th>
              <th>Nilai Tugas</th>
              <th>Nilai Akhir</th>
              <th>Status</th>
          </tr>
    </thead>
    <tbody>
    <?php
    $nomor = 1;
    foreach ($data_mhs as $mhs) {
        echo "<tr>";
        echo "<td>$nomor</td>";
        echo "<td>{$mhs->nama}</td>";
        echo "<td>{$mhs->matakuliah}</td>";
        echo "<td>{$mhs->nilai_uts}</td>";
        echo "<td>{$mhs->nilai_uas}</td>";
        echo "<td>{$mhs->nilai_tugas}</td>";
        echo "<td>" . number_format($mhs->getNA(), 2) . "</td>";
        echo "<td>" . $mhs->kelulusan() . "</td>";
        echo "</tr>";
        $nomor++;
    }
    ?>
    </tbody>
</table>
