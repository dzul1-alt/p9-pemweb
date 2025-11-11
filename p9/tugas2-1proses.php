<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pecahan Uang</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Hasil Perhitungan Pecahan Uang</h1>

    <?php
        // Mengambil input dari form
        $jumlahUang = $_POST['jumlah_uang'];
        $sisa = $jumlahUang; // Variabel sisa untuk menyimpan sisa uang yang belum dipecah

        // --- Menghitung jumlah masing-masing pecahan ---
        
        // Pecahan 100.000
        $pecahan100k = intval($sisa / 100000);
        $sisa = $sisa % 100000;

        // Pecahan 50.000
        $pecahan50k = intval($sisa / 50000);
        $sisa = $sisa % 50000;

        // Pecahan 20.000
        $pecahan20k = intval($sisa / 20000);
        $sisa = $sisa % 20000;

        // Pecahan 5.000
        $pecahan5k = intval($sisa / 5000);
        $sisa = $sisa % 5000;

        // Pecahan 100
        $pecahan100 = intval($sisa / 100);
        $sisa = $sisa % 100;

        // Pecahan 50
        $pecahan50 = intval($sisa / 50);
        $sisa = $sisa % 50;
        
        // --- Menampilkan hasil ---
        $jumlahUangFormatted = number_format($jumlahUang, 0, ',', '.');
        
        echo "<h2>Uang yang Diambil: Rp. **$jumlahUangFormatted**</h2>";

        echo "<table>";
        echo "<tr><th>Pecahan</th><th>Jumlah Lembar</th></tr>";
        echo "<tr><td>Rp. 100.000,-</td><td>".$pecahan100k."</td></tr>";
        echo "<tr><td>Rp. 50.000,-</td><td>".$pecahan50k."</td></tr>";
        echo "<tr><td>Rp. 20.000,-</td><td>".$pecahan20k."</td></tr>";
        echo "<tr><td>Rp. 5.000,-</td><td>".$pecahan5k."</td></tr>";
        echo "<tr><td>Rp. 100,-</td><td>".$pecahan100."</td></tr>";
        echo "<tr><td>Rp. 50,-</td><td>".$pecahan50."</td></tr>";
        echo "</table>";

        // Tampilkan sisa yang tidak dapat dipecah (jika ada)
        if ($sisa > 0) {
            echo "<p><strong>Catatan:</strong> Sisa uang sebesar Rp. **$sisa** tidak dapat dipecah dengan pecahan yang tersedia (Rp. 100 dan Rp. 50).</p>";
        } else {
             echo "<p>Semua uang berhasil dipecah dengan sempurna.</p>";
        }
    ?>

</body>
</html>