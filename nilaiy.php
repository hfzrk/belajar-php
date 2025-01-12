<?php
$nilai = '50';

if ($nilai >= 85 && $nilai <= 100) {
    $grade = "A";
} 
 elseif ($nilai >= 75 && $nilai <= 84) {
    $grade = "B";
} elseif ($nilai >= 60 && $nilai <= 74) {
    $grade = "C";
} elseif ($nilai >= 50 && $nilai <= 59) {
    $grade = "D";
} elseif ($nilai >= 0 && $nilai <= 49) {
    $grade = "E";
}else{
    $grade =  "lmao kamu gagal";
}

echo "Nilai anda : $nilai <br>";
echo "Grade : $grade";
?>

