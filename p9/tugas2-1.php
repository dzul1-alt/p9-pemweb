<!DOCTYPE html>
<html>
<head>
    <title>Input Jumlah Uang</title>
</head>
<body>
    <h1>Hitung Jumlah Pecahan Uang</h1>

    <form method="post" action="proses_pecahan.php">
        <label for="jumlah_uang">Masukkan Jumlah Uang (Rp.):</label>
        <input type="text" id="jumlah_uang" name="jumlah_uang" required>
        <br><br>
        <input type="submit" name="submit" value="Hitung Pecahan">
        <input type="reset" name="reset" value="Reset">
    </form>

    <p>
        *Pecahan yang tersedia: Rp. 100.000, Rp. 50.000, Rp. 20.000, Rp. 5.000, Rp. 100, dan Rp. 50.
    </p>
</body>
</html>