<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = ""; // Jika database XAMPP kamu pakai password, isi di antara kutip ini
    private $database = "db_inventory"; 
    public $koneksi;

    public function __construct() {
        // Melakukan koneksi ke MySQL database
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);

        // Memeriksa apakah koneksi berhasil atau gagal
        if (mysqli_connect_errno()) {
            die("Koneksi database gagal : " . mysqli_connect_error());
        }
    }
}

// Inisialisasi object database utama
$db = new Database();

// Menyediakan variabel koneksi cadangan agar file struktural lama kamu tidak error
$koneksi = $db->koneksi;
?>