<?php 
$matematika = 60.9;
$wawancara = "";

if ($matematika >60){
    echo "Lolos tes, dengan predikat ";

    if(strtoupper($wawancara) == "A"){
        echo "Sangat memuaskan";
    }
    else if (strtoupper($wawancara) == "B"){
        echo "Memuaskan";
    } else{
        echo "b aja";
    }
}else{
    echo "Tidak Lolos";
}
?>