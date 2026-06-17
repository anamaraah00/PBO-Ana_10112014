<?php 
session_start();
include 'koneksi.php';      // Memanggil class Database
include 'class_gudang.php'; // Memanggil class Gudang

// Inisialisasi Object
$gudang_obj = new Gudang($koneksi);
$data_gudang = $gudang_obj->tampil_semua();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Gudang</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; margin: 0; }
        .container { padding: 20px; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h2 { color: #333; }
        .btn-tambah { background-color: #2196F3; color: white; padding: 10px 15px; text-decoration: none; border-radius: 4px; display: inline-block; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 12px; text-align: left; }
        th { background-color: #f8f9fa; }
        .btn-edit { color: #2196F3; text-decoration: none; margin-right: 10px; }
        .btn-hapus { color: #f44336; text-decoration: none; }
    </style>
</head>
<body>

    <div style="background-color: #46bccc; padding: 10px 50px;">
        <a href="index.php" style="color:white; text-decoration:none;">⬅ Kembali ke Beranda</a>
    </div>

    <div class="container">
        <div class="card">
            <h2>Gudang</h2>
            <a href="gudang_tambah.php" class="btn-tambah">Tambah Gudang</a>
            
            <table>
                <thead>
                    <tr>
                        <th>ID Gudang</th>
                        <th>Kode Gudang</th>
                        <th>Nama Gudang</th>
                        <th>Lokasi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data_gudang as $row) : ?>
                    <tr>
                        <td><?= $row['id_gudang']; ?></td>
                        <td><?= $row['kode_gudang']; ?></td>
                        <td><?= $row['nama_gudang']; ?></td>
                        <td><?= $row['lokasi']; ?></td>
                        <td>
                            <a href="gudang_edit.php?id=<?= $row['id_gudang']; ?>" class="btn-edit">📝 Edit</a>
                            <a href="gudang_hapus.php?id=<?= $row['id_gudang']; ?>" class="btn-hapus" onclick="return confirm('Yakin hapus?')">🗑 Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>