<?php 
// Proteksi halaman dashboard menggunakan session
session_start();
if(!isset($_SESSION['status']) || $_SESSION['status'] != "login"){
    header("location:login.php?pesan=belum_login");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Stok Gudang Barang</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            background-color: #fff; 
        }
        
        .header-app {
            padding: 20px 50px;
            color: #46bccc;
            font-size: 24px;
            font-weight: bold;
        }

        /* Navbar warna cyan khas SI Gudang */
        .navbar {
            background-color: #46bccc;
            padding: 10px 50px;
            display: flex;
            gap: 15px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 13px;
            padding: 5px 10px;
        }

        .navbar a:hover {
            background-color: rgba(255,255,255,0.2);
            border-radius: 4px;
        }

        .main-wrapper {
            padding: 30px 50px;
        }

        .content-box {
            border: 1px solid #ccc;
            min-height: 450px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: white;
        }

        .welcome-text {
            text-align: center;
            color: #46bccc;
        }

        .welcome-text h1 {
            margin: 5px 0;
            font-size: 28px;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

    <div class="header-app">
        Aplikasi Stok Gudang Barang
    </div>

    <div class="navbar">
        <a href="index.php">Beranda</a>
        <a href="gudang_tampil.php">Kelola Data</a>
        <a href="transaksi_tampil.php">Kelola Transaksi</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="main-wrapper">
        <div class="content-box">
            <div class="welcome-text">
                <h1>SELAMAT DATANG <b>ADMIN (<?php echo $_SESSION['username']; ?>)</b></h1>
                <h1>DI SISTEM INFORMASI STOK GUDANG BARANG</h1>
            </div>
        </div>
    </div>

</body>
</html>