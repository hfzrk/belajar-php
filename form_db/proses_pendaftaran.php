<?php
include("config.php");

// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar'])){
    //ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    //buat query dengan tabel data_siswa dan field kelamin, asal_sekolah
    $sql = "INSERT INTO data_siswa (nama, alamat, kelamin, agama, asal_sekolah) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    
    // execute the query
    $query = mysqli_query($connnect, $sql);

    // cek apakah query simpan berhasil?
    if($query){
        //kalo berhasil alihkan ke index.php status=sukses
        header('Location: list_siswa.php?status=sukses');
    } else{
        //kalo gagal alihkan ke index.php status=gagal
        header('Location: index.php?status=gagal');
    }
} else{
    die("Akses dilarang...");
}