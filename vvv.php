<?php

class Pegadaian {
    public $pinjaman;
    public $bunga;
    public $lama_angsuran;
    public $keterlambatan;

    
    public function __construct($pinjaman, $bunga, $lama_angsuran, $keterlambatan) {
        $this->pinjaman = $pinjaman;
        $this->bunga = $bunga;
        $this->lama_angsuran = $lama_angsuran;
        $this->keterlambatan = $keterlambatan;
    }

    
    public function totalPinjaman() {
        return $this->pinjaman + ($this->pinjaman * $this->bunga / 100);
    }

    
    public function angsuranPerBulan() {
        return $this->totalPinjaman() / $this->lama_angsuran;
    }

    
    public function dendaPerHari() {
        return 0.0015 * $this->angsuranPerBulan();
    }

 
    public function dendaKeterlambatan() {
        return $this->dendaPerHari() * $this->keterlambatan;
    }

    // Hitung total pembayaran (angsuran + denda)
    public function totalPembayaran() {
        return $this->angsuranPerBulan() + $this->dendaKeterlambatan();
    }
}

// Fungsi untuk format rupiah
function formatRp($angka) {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

// Proses form POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Buat objek Produk menggunakan "new"
    $produk = new Produk(
        (float) htmlspecialchars($_POST['pinjaman']),
        (float) htmlspecialchars($_POST['bunga']),
        (int) htmlspecialchars($_POST['lama_angsuran']),
        (int) htmlspecialchars($_POST['keterlambatan'])
    );

    // Tampilkan hasil perhitungan
    echo "<h2>TOKO PEGADAIAN SYARIAH ISLAM</h2>";
    echo "Jl Keadilan No 16<br>";
    echo "Telp. 72353459<br><br>";

    echo "Program Penghitung Besaran Angsuran Hutang<br><br>";

    echo "Besaran <u>Pinjaman</u> : " . formatRp($produk->pinjaman) . "<br>";
    echo "Masukan besar bunga (%) : " . $produk->bunga . "%<br>";
    echo "Total <u>Pinjaman</u> : " . formatRp($produk->totalPinjaman()) . "<br>";
    echo "Lama angsuran (bulan) : " . $produk->lama_angsuran . "<br>";
    echo "Besaran <u>angsuran</u> : " . formatRp($produk->angsuranPerBulan()) . "<br><br>";

    echo "<span style='color:red; font-weight:bold;'>";
    echo "Ketentuan denda keterlambatan 0.15% per hari dari angsuran";
    echo "</span><br><br>";

    echo "<strong>Keterlambatan Angsuran (Hari):</strong> " . $produk->keterlambatan . "<br>";
    echo "<strong>Denda Keterlambatan :</strong> " . formatRp($produk->dendaKeterlambatan()) . "<br>";
    echo "<strong>Besaran Pembayaran :</strong> " . formatRp($produk->totalPembayaran()) . "<br>";
} else {
    header("Location: form_produk.php");
    exit;
}
?>

