<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengolahan Form</title>
</head>
<body>
    <form action="" method="post" name="input">
        Nama : <input type="text" name="nama"><br>
        <input type="submit" name="Input" value="Input">
    </form>
</body>
</html>
<?php
if (isset($_POST['Input'])){
    $nama = $_POST['nama'];
    echo "Nama Anda : <b>$nama</b>";
}