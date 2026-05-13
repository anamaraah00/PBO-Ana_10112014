<?php
// MODEL
class Kendaraan {
    private $Merek, $JumlahRoda, $Harga, $Warna, $BhnBakar;

    public function __construct($merek, $jumlahroda, $harga, $warna, $bahanbakaran) {
        $this->Merek = $merek;
        $this->JumlahRoda = $jumlahroda;
        $this->Harga = $harga;
        $this->Warna = $warna;
        $this->BhnBakar = $bahanbakaran;
    }

    // Getter
    public function GetMerek() { return $this->Merek; }
    public function GetJumlahRoda() { return $this->JumlahRoda; }
    public function GetHarga() { return $this->Harga; }
    public function GetWarna() { return $this->Warna; }
    public function GetBhnBakar() { return $this->BhnBakar; }
}
?>