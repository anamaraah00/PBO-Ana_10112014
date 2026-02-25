<?php
class kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan; 

    function statusHarga()
    {
        if ($this->harga > 50000000)
            return 'Mahal';
        else
            return 'Murah';
    }

    function statusBBM()
    {
        if ($this->bahanBakar == "Premium")
            return "Boros";
        else
            return "Irit";
    }

    function hargaBekas()
    {
        $tahunSekarang = date("2026");
        $umur = $tahunSekarang - $this->tahunPembuatan;

        $hargaBekas = $this->harga - ($this->harga * 0.10 * $umur);

        if ($hargaBekas < 0)
            $hargaBekas = 0;

        return $hargaBekas;
    }
}

$objekKendaraan1 = new kendaraan();
$objekKendaraan1->merek = "Yamaha MIO";
$objekKendaraan1->jumlahRoda = "2";
$objekKendaraan1->warna = "Pink";
$objekKendaraan1->harga = 10000000;
$objekKendaraan1->bahanBakar = "Premium";
$objekKendaraan1->tahunPembuatan = 2020;

$objekKendaraan2 = new kendaraan();
$objekKendaraan2->merek = "Toyota Avanza";
$objekKendaraan2->jumlahRoda = "4";
$objekKendaraan2->warna = "Biru";
$objekKendaraan2->harga = 100000000;
$objekKendaraan2->bahanBakar = "Pertalite";
$objekKendaraan2->tahunPembuatan = 2018;

echo "<pre>";
echo "========== Kendaraan 1 ==========\n";
echo "Merek: " . $objekKendaraan1->merek;
echo "<br>";
echo "Nominal Harga: " . $objekKendaraan1->harga;
echo "<br>";
echo "Tahun Pembuatan: " . $objekKendaraan1->tahunPembuatan; 
echo "<br>";
echo "Jumlah Roda: " . $objekKendaraan1->jumlahRoda;
echo "<br>";
echo "Warna: " . $objekKendaraan1->warna;
echo "<br>";
echo "Status Harga Kendaraan: " . $objekKendaraan1->statusHarga();
echo "<br>";
echo "Status BBM: " . $objekKendaraan1->statusBBM();
echo "<br>";
echo "Harga Bekas: " . $objekKendaraan1->hargaBekas();


echo "<pre>";
echo "========== Kendaraan 2 ==========\n";
echo "Merek: " . $objekKendaraan2->merek;
echo "<br>";
echo "Nominal Harga: " . $objekKendaraan2->harga;
echo "<br>";
echo "Tahun Pembuatan: " . $objekKendaraan2->tahunPembuatan; 
echo "<br>";
echo "Jumlah Roda: " . $objekKendaraan2->jumlahRoda;
echo "<br>";
echo "Warna: " . $objekKendaraan2->warna;
echo "<br>";
echo "Status Harga Kendaraan: " . $objekKendaraan2->statusHarga();
echo "<br>";
echo "Status BBM: " . $objekKendaraan2->statusBBM();
echo "<br>";
echo "Harga Bekas: " . $objekKendaraan2->hargaBekas();

?>