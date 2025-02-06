<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat Kalulator Sederhana Dengan PHP</title>
</head>
<?php
if (isset($_POST['hitung'])){
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $operasi = $_POST['operasi'];
    switch ($operasi){
        case "tambah":
            $hasil = $bil1 + $bil2;
            break;
        case "kurang":
            $hasil = $bil1 - $bil2;
            break;
        case "kali":
            $hasil = $bil1 * $bil2;
            break;
        case "bagi":
            $hasil = $bil1 / $bil2;
            break;
    }
}
?>
<body>
<div class="kalulator">
    <h2 class="judul">KALULATOR</h2>
    <form method="post" action="index.php">
        <label>
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Bilangan 1">
            <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Bilangan 2">
            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" name="hitung" class="tombol" value="Hitung">
            <?php if(isset($_POST['hitung'])) {
                echo "<input type='text' value='$hasil' class='bil'>";
            }else{
                echo "<input type='text' value='0' class='bil'>";
            }?>
        </label>
    </form>
</div>
</body>
</html>

