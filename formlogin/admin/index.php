<?php 
    // Must be the first statement—no whitespace before!
    session_start();
    if (!isset($_SESSION['status']) || $_SESSION['status'] !== "login") {
        header("location:../index.php?pesan=belum_login");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin </title>
</head>
<body>
   <h2>Ini adalah halaman dashboard admin</h2>

   <!-- Menu admin -->
    <a href="index.php">DASHBOARD</a>
    ||
    <!-- logot -->
    <a href="logout.php">LOGOUT</a>

    <p>Halo, <b><?php echo $_SESSION['username']?></b></p>
</body>
</html>