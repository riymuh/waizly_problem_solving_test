<?php

function miniMaxSum($arr) {
    // Urutkan array untuk memudahkan perhitungan
    sort($arr);

    // Hitung minimum sum dengan mengabaikan elemen terakhir
    $minSum = array_sum(array_slice($arr, 0, 4));

    // Hitung maximum sum dengan mengabaikan elemen pertama
    $maxSum = array_sum(array_slice($arr, 1));

    // Tampilkan hasilnya
    echo $minSum . ' ' . $maxSum;
}

$arr = [1, 3, 5, 7, 9];
miniMaxSum($arr);

?>
