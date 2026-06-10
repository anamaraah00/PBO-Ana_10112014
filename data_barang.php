<?php
include '../../koneksi.php';
/**@var mysqli $koneksi */

// Fitur Hapus Data
if (isset($_GET['hapus'])) {
    $kd_barang = $_GET['hapus'];
    $query_hapus = mysqli_query($koneksi, "DELETE FROM tb_barang WHERE kd_barang = '$kd_barang'");
    if ($query_hapus) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='data_barang.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Daftar Data Barang</h4>
            <a href="tambah_data_barang.php" class="btn btn-light btn-sm fw-bold">+ Tambah Barang</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>No</th>
                            <th>KD Barang</th>
                            <th>Jenis</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_barang");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td class="fw-bold"><?= $data['kd_barang']; ?></td>
                            <td class="text-center"><?= $data['kode_jenis']; ?></td>
                            <td><?= $data['nama_barang']; ?></td>
                            <td class="text-center"><?= $data['stok']; ?></td>
                            <td>Rp <?= number_format($data['harga_beli'], 0, ',', '.'); ?></td>
                            <td>Rp <?= number_format($data['harga_jual'], 0, ',', '.'); ?></td>
                            <td class="text-center">
                                <a href="edit_data_barang.php?id=<?= $data['kd_barang']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="data_barang.php?hapus=<?= $data['kd_barang']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus barang ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>