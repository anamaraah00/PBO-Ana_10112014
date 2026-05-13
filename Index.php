<?php
// VIEW
require_once "KendaraanController.php";

$controller = new KendaraanController();
$listKendaraan = $controller->index();

echo "<h2>DATA KENDARAAN</h2>";

foreach ($listKendaraan as $k) {
    printf("Merek : %s <br/>", $k->GetMerek());
    printf("Jumlah Roda : %s <br/>", $k->GetJumlahRoda());
    printf("Harga : %s <br/>", number_format($k->GetHarga(), 0, ',', '.'));
    printf("Warna : %s <br/>", $k->GetWarna());
    printf("Bahan Bakar : %s <br/><br/>", $k->GetBhnBakar());
}
?>