<?php
include("config.php");

if (isset($_POST['simpan'])) {
    $id      = $_POST['id'];
    $nama    = $_POST['nama'];
    $alamat  = $_POST['alamat'];
    // Fix: use the correct POST key for gender
    $kelamin = $_POST['jenis_kelamin'];
    $agama   = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];

    // Fix: update the table name to "data_siswa" and add missing comma
    $sql = "UPDATE data_siswa SET 
                nama         = '$nama',
                alamat       = '$alamat',
                kelamin      = '$kelamin',
                agama        = '$agama',
                asal_sekolah = '$asal_sekolah'
            WHERE id=$id";

    $query = mysqli_query($connnect, $sql);

    if ($query) {
        header("Location: list_siswa.php");
    } else {
        echo "Gagal menyimpan data.";
    }
} else {
    die("akses dilarang");
}
?>
