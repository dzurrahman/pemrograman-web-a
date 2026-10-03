<?php
    declare(strict_types=1);

    $nilai = 82;

    if($nilai >=85) {
        $huruf = "A";
    } else if($nilai >= 75) {
        $huruf = "B";
    } else if($nilai >= 65) {
        $huruf = "C";
    } else if($nilai >= 55) {
        $huruf = "D";
    } else {
        $huruf = "E";
    }

    echo "Nilai $nilai -> huruf mutu $huruf<br>";

    $n = 90;
    if ($n >= 50) { 
        $salah = 'D'; 
    } elseif ($n >= 85) { 
        $salah = 'A'; 
    } else { 
        $salah = 'E';
    }
    echo "Urutan salah menghasilkan: $salah (seharusnya A)<br>";

?>