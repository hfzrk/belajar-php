<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// memeriksa apakah username yang diisi adalah "admin", dan pass yang diisi adalah admin123
if ($username == "admin" && $password == "admin123"){
    //buat session username dan session status. session username isi user dan session status berisi string "login"
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";

    //setelah session dibuat alihkan ke dashboard
    header("location:./admin/");
    exit();
} else {
    //jika username dan password tidak sesuai, alihkan ke halaman index.php dengan parameter pesan=gagal
    header("location:index.php?pesan=gagal");
    exit();
}