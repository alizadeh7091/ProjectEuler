<?php
function sqr($x)
{
    $sum = 0;
    for ($i = 1; $i <= $x; $i++) {
        $j = $i ** 2;
        $sum = $sum + $j;
    }
    return $sum;
}
$sqr = sqr(100);

function sumSqr($y)
{
    $sum = 0;
    for ($i = 0; $i <= $y; $i++) {
        $sum = $i + $sum;
    }
    $newSum = $sum ** 2;
    return $newSum;
}

$sumSqr = sumSqr(100);

function differ($a,$b){
    $c = $b - $a;
    echo $c;
}
differ($sqr,$sumSqr);