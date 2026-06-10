<?php
include '../../koneksi.php';
/**@var mysqli $koneksi */

// Ambil ID / KD Barang dari URL
if (!isset($_GET['id'])) {
    header("Location: data_barang.php");
}
$id = $_GET['id'];

// Ambil data lama berdasarkan KD Barang tersebut
$query_ambil = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE kd_barang = '$id'");
$data = mysqli_fetch_array($query_ambil);

if (mysqli_num_rows($query_ambil) < 1) {
    die("Data tidak ditemukan...");
}

// Proses Update Data
if (isset($_POST['update'])) {
    $kode_jenis   = $_POST['kode_jenis'];
    $nama_barang  = $_POST['nama_barang'];
    $stok         = $_POST['stok'];
    $harga_beli   = $_POST['harga_beli'];
    $harga_jual   = $_POST['harga_jual'];
    $gambar_produk= $_POST['gambar_produk'];

    $query_update = mysqli_query($koneksi, "UPDATE tb_barang SET 
                    kode_jenis='$kode_jenis', 
                    nama_barang='$nama_barang', 
                    stok='$stok', 
                    harga_beli='$harga_beli', 
                    harga_jual='$harga_jual', 
                    gambar_produk='$gambar_produk' 
                    WHERE kd_barang='$id'");

    if ($query_update) {
        echo "<script>alert('Data berhasil diubah!'); window.location='data_barang.php';</script>";
    } else {
        echo "<script>alert('Gagal mengubah data!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5" style="max-width: 600px;">
    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0">Edit Data Barang: <?= $data['kd_barang']; ?></h4>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">Kode Barang (KD Barang)</label>
                    <input type="text" class="form-control" value="<?= $data['kd_barang']; ?>" readonly disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kode Jenis</label>
                    <input type="text" name="kode_jenis" class="form-control" value="<?= $data['kode_jenis']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" value="<?= $data['nama_barang']; ?>" required>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Stok</label>
                        <input type="number" name="stok" class="form-control" value="<?= $data['stok']; ?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Harga Beli</label>
                        <input type="number" name="harga_beli" class="form-control" value="<?= $data['harga_beli']; ?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Harga Jual</label>
                        <input type="number" name="harga_jual" class="form-control" value="<?= $data['harga_jual']; ?>" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama File Gambar</label>
                    <input type="text" name="gambar_produk" class="form-control" value="<?= $data['gambar_produk']; ?>">
                </div>
                <div class="d-flex justify-content-between">
                    <a href="data_barang.php" class="btn btn-secondary">Batal</a>
                    <button type="submit" name="update" class="btn btn-warning fw-bold">Update Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>