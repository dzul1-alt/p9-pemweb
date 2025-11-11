<!DOCTYPE html>
<html>
<head>
    <title>Output Pendaftaran Mahasiswa Baru</title>
</head>
<body>
    <?php
        // Mengambil data dari form (metode POST)
        $nama = $_GET['nama'];
        $tempat_lahir = $_GET['tempat_lahir'];
        
        // Menggabungkan tanggal, bulan, dan tahun
        $tgl = $_GET['tgl'];
        $bln = $_GET['bln'];
        $thn = $_GET['thn'];
        $tanggal_lahir = "$tgl-$bln-$thn";
        
        $alamat = $_GET['alamat'];
        $jk = $_GET['jk'];
        $asal_sekolah = $_GET['asal_sekolah'];
        $nilai_uan = $_GET['nilai_uan'];
    ?>

    <h2>Terimakasih **<?php echo $nama; ?>** sudah mengisi form pendaftaran.</h2>
    <hr>
    
    <pre>
Nama Lengkap      : <?php echo $nama; ?>
Tempat Lahir      : <?php echo $tempat_lahir; ?>
Tanggal Lahir     : <?php echo $tanggal_lahir; ?>
Alamat Rumah      : <?php echo $alamat; ?>
Jenis Kelamin     : <?php echo $jk; ?>
Asal Sekolah      : <?php echo $asal_sekolah; ?>
Nilai UAN         : <?php echo $nilai_uan; ?>
    </pre>
</body>
</html>