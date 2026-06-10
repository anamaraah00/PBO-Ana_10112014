<?php
session_start();
include('../../koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?php echo htmlspecialchars($_SESSION['tipe_user']); ?></title>
    <link rel="stylesheet" href="../../assets/template/spica/template/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/template/spica/template/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/template/spica/template/css/style.css">
    <link rel="shortcut icon" href="../../assets/template/spica/template/images/favicon.png"/>
</head>

<body>
<div class="container-scroller d-flex">

    <?php include('navbar.php'); ?>

    <div class="container-fluid page-body-wrapper">

        <!-- NAVBAR -->
        <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">

            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

                <button class="navbar-toggler navbar-toggler align-self-center"
                        type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>

                <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">
                    Welcome <?php echo htmlspecialchars($_SESSION['tipe_user']); ?>
                </h4>

                <ul class="navbar-nav navbar-nav-right">

                    <!-- Notifikasi -->
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                           id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                            <i class="mdi mdi-email-open mx-0"></i>
                            <span class="count bg-danger">1</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                             aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>

                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-information mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">Just now</p>
                                </div>
                            </a>

                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="mdi mdi-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">Private message</p>
                                </div>
                            </a>

                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-account-box mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">2 days ago</p>
                                </div>
                            </a>
                        </div>
                    </li>

                    <!-- Profile -->
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#"
                           data-bs-toggle="dropdown" id="profileDropdown">
                            <img src="../../assets/template/spica/template/images/faces/face5.jpg" alt="profile"/>
                            <span class="nav-profile-name">
                                <?php echo htmlspecialchars($_SESSION['tipe_user']); ?>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                             aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="mdi mdi-settings text-primary"></i> Settings
                            </a>
                            <a class="dropdown-item" href="../../proses.php?action=logout">
                                <i class="mdi mdi-logout text-primary"></i> Logout
                            </a>
                        </div>
                    </li>

                </ul>

                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
                        type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>

            </div>

            <!-- Search -->
            <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <input type="text" class="form-control"
                                   placeholder="Search Here..."
                                   aria-label="search"
                                   aria-describedby="search">
                        </div>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- END NAVBAR -->

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">

                    <!-- FORM TAMBAH PEMBELIAN -->
                    <div class="col-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Form Transaksi Pembelian (Barang Masuk)</h4>
                                <br>

                                <?php
                                // Generate nomor faktur
                                $data_count = mysqli_query($koneksi,
                                    "SELECT COUNT(no_pembelian) as no_pembelian FROM tb_pembelian");
                                $row_count   = mysqli_fetch_assoc($data_count);
                                $no_baru     = $row_count['no_pembelian'] + 1;

                                date_default_timezone_set('Asia/Jakarta');
                                $invoice = 'BUY-' . date('Ymds') . str_pad($no_baru, 2, '0', STR_PAD_LEFT);
                                ?>

                                <form method="post"
                                      action="../../proses.php?action=tambah_pembelian"
                                      enctype="multipart/form-data">

                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Nomor Faktur Pembelian
                                        </label>
                                        <div class="col-md-6 col-sm-4">
                                            <input type="text" class="form-control"
                                                   name="no_pembelian"
                                                   value="<?php echo htmlspecialchars($invoice); ?>"
                                                   readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Tanggal Pembelian
                                        </label>
                                        <div class="col-md-6 col-sm-6">
                                            <!-- FIX: typo "tangal" -> "tanggal" -->
                                            <input type="date" class="form-control"
                                                   name="tanggal_pembelian"
                                                   value="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3">
                                            Supplier
                                        </label>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="form-control" name="id_supplier">
                                                <option value="">-- Pilih Supplier --</option>
                                                <?php
                                                $data_supplier = mysqli_query($koneksi,
                                                    "SELECT * FROM tb_supplier ORDER BY nama_supplier ASC");
                                                while ($d2 = mysqli_fetch_assoc($data_supplier)) {
                                                ?>
                                                    <option value="<?php echo $d2['id_supplier']; ?>">
                                                        <?php echo htmlspecialchars($d2['nama_supplier']); ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>

                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9 offset-md-3">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                            <button type="reset"  class="btn btn-primary">Reset</button>
                                            <a href="data_barang.php">
                                                <button type="button" class="btn btn-danger">Back</button>
                                            </a>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- END FORM -->

                    <!-- TABEL DATA PEMBELIAN -->
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">

                                <!-- FIX: h4 tidak boleh berisi h3 -->
                                <h3 class="card-title">Data Transaksi Pembelian (Barang Masuk)</h3>

                                <?php
                                $halaman = 5;
                                $page    = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                                $mulai   = ($page > 1) ? ($page * $halaman) - $halaman : 0;

                                $sql_join =
                                    "SELECT a.no_pembelian, a.tanggal_pembelian,
                                            a.id_supplier, a.total_barangall,
                                            a.total_hargaall, b.nama_supplier
                                     FROM tb_pembelian a
                                     JOIN tb_supplier b ON a.id_supplier = b.id_supplier
                                     ORDER BY a.no_pembelian DESC";

                                // Hitung total untuk pagination
                                $query_total = mysqli_query($koneksi, $sql_join);
                                $total       = mysqli_num_rows($query_total);
                                $pages       = ceil($total / $halaman);

                                // Query dengan LIMIT
                                $query = mysqli_query($koneksi,
                                    $sql_join . " LIMIT $mulai, $halaman");

                                $nomor = $mulai + 1;
                                ?>

                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th width="5%">No</th>
                                                <th width="20%">No Faktur Pembelian</th>
                                                <th width="15%">Tanggal Pembelian</th>
                                                <th width="10%">ID Supplier</th>
                                                <th width="15%">Nama Supplier</th>
                                                <th width="10%">Total Barang</th>
                                                <th width="15%">Total Harga</th>
                                                <th width="10%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if (mysqli_num_rows($query) > 0) {
                                            while ($d = mysqli_fetch_assoc($query)) {
                                                $rupiah = "Rp " . number_format($d['total_hargaall'], 2, ',', '.');
                                        ?>
                                            <tr>
                                                <td><?php echo $nomor++; ?></td>
                                                <td><?php echo htmlspecialchars($d['no_pembelian']); ?></td>
                                                <td><?php echo htmlspecialchars($d['tanggal_pembelian']); ?></td>
                                                <td><?php echo htmlspecialchars($d['id_supplier']); ?></td>
                                                <td><?php echo htmlspecialchars($d['nama_supplier']); ?></td>
                                                <td><?php echo htmlspecialchars($d['total_barangall']); ?></td>
                                                <td><?php echo $rupiah; ?></td>
                                                <td>
                                                    <a href="detail_pembelian.php?no_pembelian=<?php echo urlencode($d['no_pembelian']); ?>&action=detail_pembelian"
                                                       class="btn btn-info btn-sm">
                                                        Detail
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                            }
                                        } else {
                                        ?>
                                            <tr>
                                                <td colspan="8" class="text-center">
                                                    Belum ada data pembelian
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Pagination -->
                                <div class="text-center mt-2">
                                    <?php for ($i = 1; $i <= $pages; $i++) { ?>
                                        <a href="?halaman=<?php echo $i; ?>">
                                            <button type="button"
                                                    class="btn <?php echo ($i == $page) ? 'btn-success' : 'btn-primary'; ?> btn-sm">
                                                <?php echo $i; ?>
                                            </button>
                                        </a>
                                    <?php } ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- END TABEL -->

                </div>
            </div>

            <footer class="footer">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between py-2">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">
                                Copyright ©
                                <a href="https://www.bootstrapdash.com" target="_blank">bootstrapdash.com</a>
                                2021
                            </span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                                Only the best
                                <a href="https://www.bootstrapdash.com" target="_blank">Bootstrap dashboard</a>
                                templates
                            </span>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>
</div>

<script src="../../assets/template/spica/template/vendors/js/vendor.bundle.base.js"></script>
<script src="../../assets/template/spica/template/js/off-canvas.js"></script>
<script src="../../assets/template/spica/template/js/hoverable-collapse.js"></script>
<script src="../../assets/template/spica/template/js/template.js"></script>
<script src="../../assets/template/spica/template/js/file-upload.js"></script>

</body>
</html>