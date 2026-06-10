<?php
session_start();
include '../../koneksi.php';

if (isset($_POST['simpan'])) {
    $kd_barang    = $_POST['kd_barang'];
    $kode_jenis   = $_POST['kode_jenis'];
    $nama_barang  = $_POST['nama_barang'];
    $stok         = $_POST['stok'];
    $harga_beli   = $_POST['harga_beli'];
    $harga_jual   = $_POST['harga_jual'];
    $gambar_produk= $_POST['gambar_produk'];

    $query_tambah = mysqli_query($koneksi,
        "INSERT INTO tb_barang 
        (kd_barang, kode_jenis, nama_barang, stok, harga_beli, harga_jual, gambar_produk)
        VALUES 
        ('$kd_barang', '$kode_jenis', '$nama_barang', '$stok', '$harga_beli', '$harga_jual', '$gambar_produk')"
    );

    if ($query_tambah) {
        echo "<script>alert('Data berhasil disimpan!'); window.location='data_barang.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tambah Barang</title>

    <!-- TEMPLATE CSS -->
    <link rel="stylesheet" href="../../assets/template/spica/template/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/template/spica/template/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/template/spica/template/css/style.css">
</head>

<body>
<div class="container-scroller d-flex">

    <!-- SIDEBAR -->
    <?php include('navbar.php'); ?>

    <div class="container-fluid page-body-wrapper">

        <!-- NAVBAR ATAS -->
        <nav class="navbar col-lg-12 col-12 px-0 py-2 d-flex flex-row">
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <h4 class="font-weight-bold mb-0">
                    Tambah Data Barang
                </h4>
            </div>
        </nav>

        <!-- MAIN -->
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="row justify-content-center">
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Form Tambah Barang</h4>

                                <form method="POST">

                                    <div class="form-group">
                                        <label>Kode Barang</label>
                                        <input type="text" name="kd_barang" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Kode Jenis</label>
                                        <input type="text" name="kode_jenis" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Barang</label>
                                        <input type="text" name="nama_barang" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Stok</label>
                                        <input type="number" name="stok" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Harga Beli</label>
                                        <input type="number" name="harga_beli" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Harga Jual</label>
                                        <input type="number" name="harga_jual" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama File Gambar</label>
                                        <input type="text" name="gambar_produk" class="form-control">
                                    </div>

                                    <br>

                                    <button type="submit" name="simpan" class="btn btn-success">
                                        Simpan
                                    </button>

                                    <a href="data_barang.php" class="btn btn-secondary">
                                        Kembali
                                    </a>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- TEMPLATE JS -->
<script src="../../assets/template/spica/template/vendors/js/vendor.bundle.base.js"></script>
<script src="../../assets/template/spica/template/js/off-canvas.js"></script>
<script src="../../assets/template/spica/template/js/template.js"></script>

</body>
</html>