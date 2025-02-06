<?php 
$level = 3;

switch($level){
    case 1: 
        echo "Pelajar HTML";
        break;
    case 2: 
        echo "Pelajar CSS";
        break;
    case 3: 
        echo "Pelajar Javascript";
        break;
    case 4 :
        echo "Pelajar PHP";
        break;
    default: 
        echo "Kamu bukan programmer";
}

//keterangan :
//ada 5 pilihan dalam kondisi di atas. Pilihan default
// akan dipilih apabila nilai variabel $level tidak ada dalam pilihan case
?>