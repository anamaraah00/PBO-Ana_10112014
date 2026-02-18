<html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Form Produk Pinjaman</title>
</head>
<body>
    <h2>Input Data Pinjaman</h2>
    <form method="POST" action="proses_produk.php">
        <label>Besaran Pinjaman (Rp):</label><br>
        <input type="number" name="pinjaman" required><br><br>

        <label>Besar Bunga (%):</label><br>
        <input type="number" name="bunga" step="0.01" required><br><br>

        <label>Lama Angsuran (bulan):</label><br>
        <input type="number" name="lama_angsuran" required><br><br>

        <label>Keterlambatan Angsuran (hari):</label><br>
        <input type="number" name="keterlambatan" value="0" required><br><br>

        <input type="submit" value="Hitung">
    </form>
</body>
</html>
