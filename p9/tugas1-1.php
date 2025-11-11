<!DOCTYPE html>
<html>
<head>
    <title>Input Saldo Tabungan Majemuk</title>
</head>
<body>
    <h1>Hitung Saldo Akhir Tabungan (Bunga Majemuk)</h1>

    <form method="post" action="proses_tabungan_majemuk.php">
        <table>
            <tr>
                <td>Saldo Awal (Rp.)</td>
                <td>:</td>
                <td><input type="text" name="saldo_awal" required></td>
            </tr>
            <tr>
                <td>Bunga Perbulan (%)</td>
                <td>:</td>
                <td><input type="text" name="bunga_persen" required></td>
            </tr>
            <tr>
                <td>Lama Menabung (Bulan)</td>
                <td>:</td>
                <td><input type="text" name="bulan" required></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Hitung Saldo">
        <input type="reset" name="reset" value="Reset">
    </form>

    <p>
        *Catatan: Perhitungan ini menggunakan rumus **Bunga Majemuk**.
    </p>
</body>
</html>