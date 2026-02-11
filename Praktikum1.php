<?php

class KalkulatorSuhu {

    // Property
    public $suhu; // suhu dalam Celsius

    // Constructor (opsional, supaya langsung isi nilai)
    public function __construct($suhu) {
        $this->suhu = $suhu;
    }

    // Method Celsius ke Fahrenheit
    public function cToF() {
        return ($this->suhu * 9/5) + 32;
    }

    // Method Celsius ke Kelvin
    public function cToK() {
        return $this->suhu + 273.15;
    }
}

// ================== PEMAKAIAN ==================
$kalkulator = new KalkulatorSuhu(30); // contoh suhu 30°C

echo "<pre>";
echo "Suhu Celsius  : " . $kalkulator->suhu . " °C\n";
echo "Ke Fahrenheit : " . $kalkulator->cToF() . " °F\n";
echo "Ke Kelvin     : " . $kalkulator->cToK() . " K\n";
echo "</pre>";

?>
