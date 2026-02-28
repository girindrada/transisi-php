<?php

$string = "TranSISI";

function isIncludeLowercase($string) {
    $count = 0;
    
    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];

        if($char === strtolower($char)) {
            $count++;
        }
    }

    $result = $string . " mengandung " . $count . " huruf kecil.";

    return $result;
}

echo isIncludeLowercase($string) . "\n";
