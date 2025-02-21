<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fix: Use the correct table name "data_siswa"
    $sql = "DELETE FROM data_siswa WHERE id=$id";
    $query = mysqli_query($connnect, $sql);

    if ($query) {
        header('Location: list_siswa.php');
    } else {
        die("Gagal menghapus...");
    }
} else {
    die("Akses dilarang...");
}
?>