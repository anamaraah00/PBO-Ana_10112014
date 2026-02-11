<?php 

class Belajar {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBarang;
    public $diskon; // persen (0.1 = 10%)
    public $uangDibayar; // property baru
    public $totalBayar;

    public static $pajak = 0.02; // static property pajak 2%

    // Method subtotal
    public function totalHarga(): int {
        return $this->hargaBarang * $this->jumlahBarang;
    }

    // Method hitung total akhir
    public function hitungTotalAkhir() {
        $subtotal = $this->totalHarga();
        $diskonRp = $subtotal * $this->diskon;
        $setelahDiskon = $subtotal - $diskonRp;
        $pajakRp = $setelahDiskon * self::$pajak;

        $this->totalBayar = $setelahDiskon + $pajakRp;
        return $this->totalBayar;
    }

    // Method hitung kembalian
    public function hitungKembalian() {
        return $this->uangDibayar - $this->hitungTotalAkhir();
    }
}

// ================== OBJECT 1 ==================
$belanja1 = new Belajar();
$belanja1->namaPembeli = "Miftah";
$belanja1->namaBarang = "Sampo";
$belanja1->hargaBarang = 9000;
$belanja1->jumlahBarang = 2;
$belanja1->diskon = 0.1;
$belanja1->uangDibayar = 20000;

// ================== OBJECT 2 ==================
$belanja2 = new Belajar();
$belanja2->namaPembeli = "Ana";
$belanja2->namaBarang = "Mie";
$belanja2->hargaBarang = 5000;
$belanja2->jumlahBarang = 3;
$belanja2->diskon = 0.2;
$belanja2->uangDibayar = 20000;

// ================== OUTPUT ==================
echo "<pre>";
echo "===== DATA BELANJA 1 =====\n";
echo "Nama Pembeli : " . $belanja1->namaPembeli . "\n";
echo "Subtotal     : Rp " . $belanja1->totalHarga() . "\n";
echo "Total Akhir  : Rp " . $belanja1->hitungTotalAkhir() . "\n";
echo "Uang Dibayar : Rp " . $belanja1->uangDibayar . "\n";
echo "Kembalian    : Rp " . $belanja1->hitungKembalian() . "\n\n";

echo "===== DATA BELANJA 2 =====\n";
echo "Nama Pembeli : " . $belanja2->namaPembeli . "\n";
echo "Subtotal     : Rp " . $belanja2->totalHarga() . "\n";
echo "Total Akhir  : Rp " . $belanja2->hitungTotalAkhir() . "\n";
echo "Uang Dibayar : Rp " . $belanja2->uangDibayar . "\n";
echo "Kembalian    : Rp " . $belanja2->hitungKembalian() . "\n";
echo "</pre>";

?>
