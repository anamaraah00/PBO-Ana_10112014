<?php

$nama = $_POST['nama'];
$belanja = $_POST['belanja'];
$member = $_POST['member'];

$diskon = 0;

if($member == "ya"){

    if($belanja >= 100000){
        $diskon = 0.10 * $belanja;
    }else{
        $diskon = 0.05 * $belanja;
    }

}else{

    if($belanja >= 100000){
        $diskon = 0.05 * $belanja;
    }else{
        $diskon = 0;
    }

}

$total_bayar = $belanja - $diskon;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body>

<h2>Hasil Perhitungan Belanja</h2>

Nama Pembeli : <?php echo $nama; ?> <br>
Total Belanja : Rp <?php echo number_format($belanja); ?> <br>
Status Member : <?php echo $member; ?> <br>
Diskon : Rp <?php echo number_format($diskon); ?> <br>
Total Bayar : Rp <?php echo number_format($total_bayar); ?> <br>

</body>
</html>