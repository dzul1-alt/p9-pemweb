<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Saldo Majemuk</title>
</head>
<body>
    <h1>Hasil Saldo Akhir Tabungan (Bunga Majemuk)</h1>

    <?php

        $saldoAwal = $_POST['saldo_awal'];
        $bungaPersen = $_POST['bunga_persen'];
        $bulan = $_POST['bulan'];

        $bungaDesimal = $bungaPersen / 100;

        $saldoAkhir = $saldoAwal * pow((1 + $bungaDesimal), $bulan);

        $totalBunga = $saldoAkhir - $saldoAwal;

        $saldoAwalFormatted = number_format($saldoAwal, 0, ',', '.');
        $saldoAkhirFormatted = number_format($saldoAkhir, 2, ',', '.');
        $totalBungaFormatted = number_format($totalBunga, 2, ',', '.');


        echo "<h2>Data Input:</h2>";
        echo "<ul>";
        echo "<li>Saldo Awal: Rp. **$saldoAwalFormatted**</li>";
        echo "<li>Bunga Perbulan: **$bungaPersen**%</li>";
        echo "<li>Lama Menabung: **$bulan** Bulan</li>";
        echo "</ul>";

        echo "<h2>Hasil Perhitungan:</h2>";
        echo "<p>Total Bunga Majemuk yang didapat: Rp. **$totalBungaFormatted**</p>";
        echo "<h3>Saldo Akhir setelah $bulan bulan adalah: **Rp. $saldoAkhirFormatted**</h3>";
    ?>

    <p>
        *Jika dimasukkan nilai dari soal sebelumnya (Rp. 1.000.000, 0.25%, 11 Bulan), hasilnya adalah Rp. **1.027.876,82**.
    </p>

</body>
</html>