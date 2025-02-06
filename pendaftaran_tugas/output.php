<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
$nama = $_POST['nama'];
$panggilan = $_POST['panggilan'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$sekolah = $_POST['sekolah'];
$nilai = $_POST['nilai'];
$ttl = "$tanggal $bulan $tahun";

?>
<body>
<h1 class="judul">Pendaftaran Siswa Baru</h1>
<h2 class="judul">Terimakasih <?php echo $nama ?> udah ngisi</h2>
<div class="form-container">
    <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <div><?php echo $nama?></div>
    </div>
    <div class="form-group">
        <label for="panggilan">Nama Panggilan</label>
        <div><?php echo $panggilan?></div>
    </div>
    <div class="form-group">
        <label for="tempat">Tempat Lahir</label>
        <div><?php echo $tempat?></div>
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal Lahir</label>
        <div><?php echo $ttl?></div>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat Rumah</label>
        <div><?php echo $alamat?></div>
    </div>
    <div class="form-group">
        <label>Jenis Kelamin</label>
        <div><?php echo $gender?></div>
    </div>
    <div class="form-group">
        <label for="sekolah">Asal Sekolah</label>
        <div><?php echo $sekolah?></div>
    </div>
    <div class="form-group">
        <label for="nilai">Nilai UAN</label>
        <div><?php echo $nilai?></div>
    </div>
</div>
</body>
</html>
