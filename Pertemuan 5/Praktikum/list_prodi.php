<?<?php   
  require_once 'dbkoneksi.php';

  // 4) Definisikan query
  $sql = "SELECT * FROM mahasiswa ORDER BY thn_masuk DESC";
  // 5) Jalankan query
  $rs = $dbh->query($sql);
  // 6) Tampilkan hasil query
?>
<table border="1" width="100%">
   <tr><th>NO</th><th>Kode<th><th>Nama Prodi</th>
