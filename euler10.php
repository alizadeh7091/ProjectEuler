<?php

function Prime($x) {
    if ($x <= 1) {
        return false;
    }
    if ($x == 2) {
        return true;
    }
    if ($x % 2 == 0) {
        return false;
    }
    for ($i = 3; $i <= sqrt($x); $i += 2) {
        if ($x % $i == 0) {
            return false;
        }
    }
    return true;
}
// echo Prime(13);

for ($i=2; $i < (2000000); $i++) { 
    if (Prime($i)) {
        $primers[] = $i;
    }
}

$sum = 0 ;
foreach ($primers as $item) {
    $sum += $item;
}
echo $sum;
