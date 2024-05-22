<?php

for ($i = 1; $i < 32; $i++) {
    $sqrs[] = $i ** 2;
}

$newSqrs = $sqrs;
// echo json_encode($newSqrs);

$sum = 0;

while (true) {
    $first = rand(0, 30);
    $second = rand(0, 30);
    $third = rand(0, 30);

    $yek = $newSqrs[$first];
    $do = $newSqrs[$second];
    $se = $newSqrs[$third];
    $sum = $yek + $do + $se;
    if ($sum == 1000) {
        echo "<br>";
        echo "sum is ".$sum;
        echo "<br>";
        echo $yek ." the number is ".sqrt($yek);
        echo "<br>";
        echo $do." the number is ".sqrt($do);
        echo "<br>";
        echo $se." the number is ".sqrt($se);
        echo "<br>";
        break;
    }
}
