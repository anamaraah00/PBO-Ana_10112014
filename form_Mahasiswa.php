
<html>
<head>
    <title>Form Nilai Mahasiswa</title>
</head>
<body>

<h2>Form Input Nilai Mahasiswa</h2>

<form method="POST" action="proses_mahasiswa.php">
    <?php for ($i = 0; $i < 3; $i++) { ?>
        <fieldset>
            <legend>Mahasiswa <?php echo $i + 1; ?></legend>
            Nama: <input type="text" name="nama[]" required><br><br>
            Kelas: <input type="text" name="kelas[]" required><br><br>
            Nilai: <input type="number" name="nilai[]" min="0" max="100" required><br><br>
        </fieldset>
        <br>
    <?php } ?>
    <button type="submit">Proses</button>
</form>

</body>
</html>