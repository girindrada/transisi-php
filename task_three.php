<?php

$string = "Jakarta adalah ibukota negara Republik Indonesia";

function unigram($string){
    $words = explode(" ", $string);
    // var_dump($words);

    return implode(", ", $words);
}

function bigram($string){
    $words = explode(" ", $string);
    $bigrams = [];

    // Loop loncat 2
    for ($i = 0; $i < count($words); $i += 2) {
        if (isset($words[$i + 1])) {
            $bigrams[] = $words[$i] . " " . $words[$i + 1];
        } else {
            $bigrams[] = $words[$i];
        }
    }

    return implode(", ", $bigrams);
}

function trigram($string){
    $words = explode(" ", $string);
    $trigrams = [];

    // Loop loncat 3
    for ($i = 0; $i < count($words); $i += 3) {
        if (isset($words[$i + 2])) {
            $trigrams[] = $words[$i] . " " . $words[$i + 1] . " " . $words[$i + 2];
        } else {
            $trigrams[] = $words[$i];
        }
    }   
    
    return implode(", ", $trigrams);
}

echo unigram($string) . "\n";
echo bigram($string) . "\n";
echo trigram($string) . "\n";