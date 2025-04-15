<?php
include 'dbkoneksi.php';

// Ambil data pasien + nama kelurahan
$query = "SELECT p.id, p.kode, p.nama, p.tmp_lahir, p.tgl_lahir, p.gender, 
                 p.email, p.alamat, k.nama AS kelurahan
          FROM pasien p
          JOIN kelurahan k ON p.kelurahan_id = k.id";
$stmt = $dbh->query($query);
$pasien = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <div class="content-wrapper p-4">
        <section class="content-header">
            <h1>Data Pasien</h1>
        </section>
        <section class="content">
            <div class="card">
                <div class="card-body">
                    <a href="form_pasien.php" class="btn btn-primary mb-3">Tambah Pasien</a>
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Gender</th>
                                <th>Kelurahan</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
    <?php foreach($pasien as $row): ?>
    <tr>
        <td><?= htmlspecialchars($row['kode']); ?></td>
        <td><?= htmlspecialchars($row['nama']); ?></td>
        <td><?= htmlspecialchars($row['tmp_lahir']); ?></td>
        <td><?= htmlspecialchars($row['tgl_lahir']); ?></td>
        <td><?= htmlspecialchars($row['gender']); ?></td>
        <td><?= htmlspecialchars($row['kelurahan']); ?></td>
        <td><?= htmlspecialchars($row['email']); ?></td>
        <td><?= htmlspecialchars($row['alamat']); ?></td>
        <td>
            <a href="form_pasien.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="proses_pasien.php?delete&id=<?= $row['id']; ?>" class="btn btn-danger btn-sm"
               onclick='return confirm("Yakin ingin menghapus data ini?")'>Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</tbody>
