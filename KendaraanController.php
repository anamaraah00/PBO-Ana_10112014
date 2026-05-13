<?php
// CONTROLLER
require_once "Kendaraan.php";

class KendaraanController {
    public function index() {
        // Membuat data kendaraan seperti di gambar
        $dataKendaraan = [
            new Kendaraan("Yamaha Mio", 2, 10000000, "Merah", "Premium"),
            new Kendaraan("Toyota Yaris", 4, 160000000, "Merah", "Premium"),
            new Kendaraan("Honda Scoopy", 2, 13000000, "Putih", "Premium"),
            new Kendaraan("Isuzu Panther", 4, 170000000, "Merah", "Solar")
        ];
        
        return $dataKendaraan;
    }
}
?>