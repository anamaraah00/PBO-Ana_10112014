<?php
class Employee {
    public $nama;
    public $gaji;
    public $lamaKerja;

    public function __construct($nama, $gaji, $lamaKerja){
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->lamaKerja = $lamaKerja;
    }

    public function hitungGaji(){
        return $this->gaji;
    }
}

class PegawaiMingguan extends Employee {
    public $hargaBarang;
    public $stok;
    public $terjual;

    public function __construct($nama, $gaji, $lamaKerja, $hargaBarang, $stok, $terjual){
        parent::__construct($nama, $gaji, $lamaKerja);
        $this->hargaBarang = $hargaBarang;
        $this->stok = $stok;
        $this->terjual = $terjual;
    }

    public function hitungGaji(){
        $persen = ($this->terjual / $this->stok) * 100;

        if($persen > 70){
            $bonus = 0.10 * $this->hargaBarang * $this->terjual;
        } else {
            $bonus = 0.03 * $this->hargaBarang * $this->terjual;
        }

        return $this->gaji + $bonus;
    }
}

// DATA
$pm1 = new PegawaiMingguan("Gina", 3000000, 2, 50000, 100, 80);
$pm2 = new PegawaiMingguan("Hadi", 3000000, 2, 50000, 100, 50);
$pm3 = new PegawaiMingguan("Intan", 3000000, 2, 50000, 100, 90);

// OUTPUT
echo "<h3>Data Pegawai Mingguan</h3>";

$pegawai = [$pm1, $pm2, $pm3];

foreach($pegawai as $pm){
    echo "Nama: $pm->nama <br>";
    echo "Gaji: Rp " . number_format($pm->hitungGaji(),0,",",".");
    echo "<hr>";
}
?>