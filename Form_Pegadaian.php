<!DOCTYPE html>
<html>
<head>
    <title>Form Pegadaian</title>
</head>
<body>

<h2>Form Pengajuan Pinjaman Pegadaian</h2>

<form method="POST" action="proses_pegadaian.php">
    <label>Besaran Pinjaman (Rp):</label><br>
    <input type="number" name="pinjaman" required><br><br>

    <label>Bunga (%) :</label><br>
    <input type="number" step="0.01" name="bunga" required><br><br>

    <label>Lama Angsuran (Bulan) :</label><br>
    <input type="number" name="lama_angsuran" required><br><br>

    <label>Keterlambatan Angsuran (Hari) :</label><br>
    <input type="number" name="keterlambatan" value="0" required><br><br>

    <button type="submit">Hitung</button>
</form>

</body>
</html>