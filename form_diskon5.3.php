<!DOCTYPE html>
<html>
<head>
    <title>Form Belanja</title>
</head>
<body>

<h2>Program Diskon Belanja</h2>

<form action="proses.php" method="post">
    
    Nama Pembeli : <br>
    <input type="text" name="nama" required>
    <br><br>

    Total Belanja : <br>
    <input type="number" name="belanja" required>
    <br><br>

    Kartu Member : <br>
    <select name="member">
        <option value="ya">Memiliki</option>
        <option value="tidak">Tidak Memiliki</option>
    </select>
    <br><br>

    <button type="submit">Proses</button>

</form>

</body>
</html>