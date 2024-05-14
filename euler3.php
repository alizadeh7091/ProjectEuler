<?php

$n = 600851475143;
function checkِDivisiblity($n)
{
    $factors = [];
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            echo ("<pre>");
            // echo (($i));
            array_push($factors, $i);
        }
    }
    return ($factors);
    // print_r($factors);
}
$arr = (checkِDivisiblity($n));

foreach ($arr as $key) {
    // $primes = [];
    (checkِDivisiblity($key));
    if (count(checkِDivisiblity($key)) <= 2) {
        // echo (gettype($key));
        $primes = array($key);
        
        // array_push($primes, $key);
    }
}
print_r($primes);


