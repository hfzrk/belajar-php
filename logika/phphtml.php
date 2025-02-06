<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data PHP</title>
</head>
<body>
    <h1>Belajar Tipe Data PHP</h1>
    <h2>Tipe Data Integer</h2>

    <?php
    $a = 10;
    $b = 5;
    $c = $a +5;
    $d = $b + (10 *5);
    $e = $d - $c;

    // Menampilkan data dengan echo
    echo "Variable a : $a <br>";
    echo "Variable b : {$b} <br>";
    echo "Variable c : {$c} <br>";
    echo "Variable d : $d <br>";
    echo "Variable e : $e <br>";

    // Mengetahui tipe data variabel
    var_dump($e);
    echo "<br>";
    ?>

    <h2>Tipe Data Float</h2>

    <?php 
    $nilaiMatematika = 5.1;
    $nilaiIpa = 6.7;
    $nilaiBahasaIndonesia = 9.3;

    // Hitung nilai rata rata
    $rataRata = ($nilaiMatematika  + $nilaiIpa + $nilaiBahasaIndonesia) / 3;

    // Menampilkan data dengan echo
    echo "Nilai Matematika : {$nilaiMatematika} <br>";
    echo "Nilai Ipa : {$nilaiIpa} <br>";
    echo "Nilai Bahasa Indonesia : {$nilaiBahasaIndonesia} <br>";
    echo "Nilai Rata-rata : {$rataRata} <br>";
    
    // lihat tipe data dari variable $rataRata
    var_dump($rataRata);
    ?>

    <h2>Tipe Data Boolean</h2>
    <?php 

    $apakahSiswaLulus = true;
    $apakahSiswaSudahUjian = false;

    var_dump($apakahSiswaLulus);
    echo "<br>";
    var_dump($apakahSiswaSudahUjian);
    echo "<br>";
    ?>

    <h2>Tipe Data String</h2>

    <?php 
    $namaDepan = "Ibnu"; #Pakai petik 2
    $namaBelakang = 'Mamat'; #pakai petik 1

    // menggabungkan dua var dengan tanda petik 2
    $namaLengkap = "{$namaDepan} {$namaBelakang}";

    // anda juga bisa menggabungkan string dengan menggunakan tanda titik (.)
    $namaLengkap2 = $namaDepan . " " . $namaBelakang;

    // kita bisa memasukkan var lain jika menggunakan tanda petik 2
    echo "Nama Depan: {$namaDepan} <br>";
    /* ada pun jika pakai tanda petik satu, kita tidak bisa memasukkan variabel
    di dalam string akan tetapi menggabungkannya dengan operator titik (.)
    */
    echo 'Nama Belakang:'. $namaBelakang .'<br>';

    echo $namaLengkap . '<br>';
    ?>

    <h2>Tipe Data Array</h2>
<?php 

$listMahasiswa = ["Muhammad Ibnu", "Mamat", "Mamato", "Mamatzzz"];
echo $listMahasiswa[0];

?>
</body>
</html>