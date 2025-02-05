<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = nl2br($_POST['pesan']);

echo "<h1 style='color:red'>halo $nama ini datamu <3</h1>";
//Nama
if (!empty($nama)) {
    echo "<h1>Nama : $nama</h1>";
} else {
    echo "<h1>Nama: Nama lo siapa</h1>";
}
//Check Email kosong somehow
if (!empty($email)) {
    echo "<h1>Email : $email</h1>";
} else {
    echo "<h1>Email: lah kok bisa tanpa email</h1>";
}
//cek pesan kosong nga
if (!empty($pesan)) {
    echo "<h1>Pesan : $pesan</h1>";
} else {
    echo "<h1>Pesan: Pesanmu mana</h1>";
}