<?php

function plusMinus($arr) {
    $n = count($arr);
    
    // Inisialisasi variabel untuk menghitung jumlah positif, negatif, dan nol
    $positive = $negative = $zero = 0;

    // Iterasi array untuk menghitung jumlah elemen positif, negatif, dan nol
    foreach ($arr as $value) {
        if ($value > 0) {
            $positive++;
        } elseif ($value < 0) {
            $negative++;
        } else {
            $zero++;
        }
    }

    // Hitung rasio dan tampilkan dengan 6 digit desimal
    $ratioPositive = number_format($positive / $n, 6);
    $ratioNegative = number_format($negative / $n, 6);
    $ratioZero = number_format($zero / $n, 6);

    // Tampilkan hasilnya
    echo $ratioPositive . "\n";
    echo $ratioNegative . "\n";
    echo $ratioZero . "\n";
}

$arr = [1, 1, 0, -1, -1];
plusMinus($arr);

?>
