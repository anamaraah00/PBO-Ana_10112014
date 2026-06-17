<?php 
// Mulai session global
session_start();

// Panggil koneksi data OOP
include 'koneksi.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    
    // Amankan input data menggunakan koneksi dari objek $db
    $username = mysqli_real_escape_string($db->koneksi, $_POST['username']);
    $password_input = mysqli_real_escape_string($db->koneksi, $_POST['password']);

    // Ubah password ke format MD5 agar sama dengan phpMyAdmin
    $password_md5 = md5($password_input);

    // Ambil data user dari tabel database
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password_md5'";
    $login = mysqli_query($db->koneksi, $query);

    if (!$login) {
        die("Proses database gagal: " . mysqli_error($db->koneksi));
    }

    $cek = mysqli_num_rows($login);

    if($cek > 0){
        $data = mysqli_fetch_assoc($login);
        
        // Daftarkan session penanda login sah
        $_SESSION['username'] = $data['username'];
        $_SESSION['status'] = "login"; 
        
        // Pindah otomatis ke dashboard
        header("location:index.php");
        exit();
    } else {
        // Jika gagal, kembalikan ke login.php dengan tanda gagal
        header("location:login.php?pesan=gagal");
        exit();
    }
} else {
    header("location:login.php");
    exit();
}
?>