<?php

function reverse($x)
{
    $strInt = strval($x);
    $strReverse = strrev($strInt);
    $intReverse = intval($strReverse);
    return $intReverse;
}

function multiple()
{
    $palindromes = [];
    for ($i = 100; $i < 1000; $i++) {
        for ($j = 100; $j < 1000; $j++) {
            $mul = $i * $j;
            if ($mul == reverse($mul)) {
                $palindromes[] = $mul;
            }
        }
    }
    return $palindromes;
}

$palindrome_numbers = multiple();
echo max($palindrome_numbers);
