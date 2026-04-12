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

class Direktur extends Employee {

    public function hitungGaji(){
        $bonus = 0.5 * $this->lamaKerja * $this->gaji;
        $tunjangan = 0.1 * $this->lamaKerja * $this->gaji;

        return $this->gaji + $bonus + $tunjangan;
    }
}

// DATA
$d1 = new Direktur("Doni", 10000000, 5);
$d2 = new Direktur("Eka", 12000000, 10);
$d3 = new Direktur("Fajar", 15000000, 15);

// OUTPUT
echo "<h3>Data Direktur</h3>";

$direktur = [$d1, $d2, $d3];

foreach($direktur as $d){
    echo "Nama: $d->nama <br>";
    echo "Gaji: Rp " . number_format($d->hitungGaji(),0,",",".");
    echo "<hr>";
}
?>