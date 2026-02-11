<?php 

class Belajar {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBarang;
    public $totalBayar;
    public $diskon;
    public static $pajak = 0.02;

    public function __construct($namaPembeli, $namaBarang, $hargaBarang, $jumlahBarang, $diskon) {
        $this->namaPembeli = $namaPembeli;
        $this->namaBarang = $namaBarang;
        $this->hargaBarang = $hargaBarang;
        $this->jumlahBarang = $jumlahBarang;
        $this->diskon = $diskon;
    }

    public function totalHarga(): int {
        $subtotal = $this->hargaBarang * $this->jumlahBarang;
        return $subtotal;
    }
}

// Membuat object
$belanja = new Belajar("Ana", "Mie", 5000, 3, 0.2);

echo "<pre>";
echo "Nama Pembeli: " . $belanja->namaPembeli . "\n";
echo "Nama Barang: " . $belanja->namaBarang . "\n";
echo "Harga Barang: Rp " . $belanja->hargaBarang . "\n";
echo "Jumlah Barang: " . $belanja->jumlahBarang . "\n";
echo "Diskon: " . ($belanja->diskon * 100) . "%\n";
echo "Subtotal: Rp " . $belanja->totalHarga() . "\n";
echo "</pre>";

