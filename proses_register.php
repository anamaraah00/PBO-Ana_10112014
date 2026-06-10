<?php
// Simpan sebagai proses_register.php
include("koneksi.php");

$username  = $_POST['username'];
$password  = $_POST['password'];
$tipe_user = $_POST['tipe_user'];

// Cek apakah username + role sudah ada
$cek = mysqli_query($koneksi,
    "SELECT * FROM user
     WHERE username='$username'
     AND tipe_user='$tipe_user'"
);

if (mysqli_num_rows($cek) > 0) {
    echo "<script>
            alert('Username dengan role tersebut sudah ada!');
            window.location='register.php';
          </script>";
} else {

    // Simpan ke tabel user
    mysqli_query($koneksi,
        "INSERT INTO user (username, password, tipe_user)
         VALUES ('$username', '$password', '$tipe_user')"
    );

    echo "<script>
            alert('Akun berhasil dibuat!');
            window.location='login.php';
          </script>";
}
?>