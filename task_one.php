<?php 
$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";

function average($nilai) {
    $numbers = explode(" ", $nilai);
    $total = array_sum($numbers);

    return $total / count($numbers);
}

function sevenHighest($nilai) {
    $numbers = explode(" ", $nilai);
    rsort($numbers); // return true is sorted in descending
    $seven = array_slice($numbers, 0, 7);

    return implode(", ", $seven);
}

function sevenLowest($nilai) {
    $numbers = explode(" ", $nilai);
    sort($numbers); 
    $seven = array_slice($numbers, 0, 7);

    return implode(", ", $seven);
}

echo average($nilai) . "\n";
echo sevenHighest($nilai) . "\n";
echo sevenLowest($nilai) . "\n";