<?php 
    $kode = 0; 
    $hasil = match ($kode) { 
        0       => 'nol-int', 
        '0'     => 'nol-string', 
        default => 'lain', }; 
    echo $hasil; 
?>