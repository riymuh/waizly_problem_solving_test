<?php

function timeConversion($s) {
    // Pisahkan jam, menit, dan detik dari string input
    list($hour, $minute, $second) = sscanf($s, "%d:%d:%d%s");

    // Periksa apakah waktu adalah AM atau PM
    $isPM = ($s[strlen($s) - 2] === 'P');

    // Konversi ke format 24 jam
    if ($isPM && $hour != 12) {
        $hour += 12;
    } elseif (!$isPM && $hour == 12) {
        $hour = 0;
    }

    // Format hasil konversi dengan memastikan dua digit pada jam, menit, dan detik
    $result = sprintf("%02d:%02d:%02d", $hour, $minute, $second);

    return $result;
}

$time1 = '12:01:00PM';
$time2 = '12:01:00AM';

echo timeConversion($time1) . "\n"; // Output: 12:01:00
echo timeConversion($time2) . "\n"; // Output: 00:01:00

?>
