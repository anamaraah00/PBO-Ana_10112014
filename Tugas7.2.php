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

class Programmer extends Employee {

    public function hitungGaji(){
        if($this->lamaKerja < 1){
            return $this->gaji;
        } elseif($this->lamaKerja <= 10){
            $bonus = 0.01 * $this->lamaKerja * $this->gaji;
        } else {
            $bonus = 0.02 * $this->lamaKerja * $this->gaji;
        }

        return $this->gaji + $bonus;
    }
}

// DATA
$p1 = new Programmer("Andi", 5000000, 0.5);
$p2 = new Programmer("Budi", 5000000, 5);
$p3 = new Programmer("Citra", 5000000, 12);

// OUTPUT
echo "<h3>Data Programmer</h3>";

$programmer = [$p1, $p2, $p3];

foreach($programmer as $p){
    echo "Nama: $p->nama <br>";
    echo "Gaji: Rp " . number_format($p->hitungGaji(),0,",",".");
    echo "<hr>";
}
?>