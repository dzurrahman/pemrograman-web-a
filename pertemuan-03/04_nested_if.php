<?php
    declare(strict_types=1);

    $sudahLogin = true;
    $peran = "admin";

    if($sudahLogin) {
        if($peran === "admin") {
            echo "Selamat datang, Admin. Akses penuh.\n";
        } else if($peran === "operator") {
            echo "Selamat datang, Operator. Akses terbatas.\n";
        } else {
            echo "Peran tidak dikenal.\n";
        }
    } else {
        echo "Silakan login terlebih dahulu.";
    }

    $terverifikasi = true; 
    $saldo = 120000; 
    if ($sudahLogin && $terverifikasi && $saldo >= 100000) { 
        echo "Transaksi besar diizinkan.\n"; 
    }
?>