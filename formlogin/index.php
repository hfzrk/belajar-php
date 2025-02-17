<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang di <a href="http://smkn2mgl.sch.id">SMK Negeri 2 Magelang</a></h1>
    <h2>Silahkan Login</h2>

    <form action="cek_login.php" method="post">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="LOGIN">
    </form>
<?php
 //memeriksa apakah ada parameter pesan pada url
    if (isset ($_GET['pesan'])) {
        //jika ada, periksa apakah isi parameter pesan adalah "gagal"
        if ($_GET['pesan'] == "gagal") {
            echo "<b>Username atau Password salah!</b><br><br>";
        }
        //jika isi parameter pesan adalah "logout"
        elseif ($_GET['pesan'] == "logout") {
            echo "<b>Anda telah berhasil logout!</b><br><br>";
        }
        //jika isi parameter pesan adalah "belum_login"
        elseif ($_GET['pesan'] == "belum_login") {
            echo "<b>Anda harus login untuk masuk ke dashboard</b><br><br>";
        }
    }
?>


</body>
</html>