<?php 
$matematika = 69;
$wawancara = "Z";

if ($matematika >60){
    echo "Lolos tes, dengan predikat ";

    if(strtoupper($wawancara) == "A"){
        echo "Sangat memuaskan";
    }
    else if (strtoupper($wawancara) == "A"){
        echo "Memuaskan";
    } else{
        echo "b aja";
    }
}else{
    echo "Tidak Lolos";
}
?>