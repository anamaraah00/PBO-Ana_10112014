<!DOCTYPE html>
<html>
<head>
    <title>Login - Sistem Informasi Stok Gudang Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d1e7e7; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        .header-title {
            font-weight: bold;
            font-size: 16px;
            color: #000;
            margin-bottom: 20px;
            line-height: 1.4;
        }
        .logo {
            width: 80px;
            margin-bottom: 20px;
        }
        .card-login {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: left;
        }
        .card-login h3 {
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
            font-size: 16px;
            letter-spacing: 1px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-size: 13px;
            margin-bottom: 5px;
            color: #555;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        .btn-login {
            width: 100%;
            background-color: #46bccc;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }
        .btn-login:hover {
            background-color: #3aa3b2;
        }
        /* --- CSS BARU UNTUK TOMBOL RESET BIAR GEDE DAN RAPI --- */
        .btn-reset {
            width: 100%;
            background-color: #46bccc;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }
        .btn-reset:hover {
            background-color: #3aa3b2;
        }
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
            font-size: 13px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header-title">
        Sistem Informasi Stok Gudang Barang<br>
        Politeknik Negeri Subang
    </div>
   
    <img src="https://cdn-icons-png.flaticon.com/512/869/869636.png" class="logo" alt="Logo">

    <div class="card-login">
        <h3>SILAHKAN LOGIN</h3>
       
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<div class='alert-error'>Username atau Password salah!</div>";
            } else if($_GET['pesan'] == "belum_login"){
                echo "<div class='alert-error'>Anda harus login terlebih dahulu!</div>";
            }
        }
        ?>

        <form action="login_aksi.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required placeholder="Masukkan Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required placeholder="Masukkan Password">
            </div>
            <button type="submit" class="btn-login">Login</button>
            <button type="reset" class="btn-reset">Reset</button>
        </form>
    </div>
</div>

</body>
</html>