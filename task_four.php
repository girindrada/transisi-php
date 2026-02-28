<?php

function nestedForLoop() {
    $number = 1;

    for ($i = 0; $i < 8; $i++) {
        for ($j = 0; $j < 8; $j++) {
            // echo $number . " ";
            echo str_pad($number, 4, " ", STR_PAD_LEFT);
            $number++;
        }
        echo "\n";
    }
}

echo nestedForLoop() . "\n";