<?php
if (isset($_POST['pilih'])){
    $film = $_POST['kartun'];
    echo "Film Kartun Faovrit Anda adalah :
    <b><font color='blue'>$film</font></b>";
}