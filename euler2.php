<?php

// $n = 8;
function isEven($n)
{
    if ($n % 2 == 0) {
        return 1;
    } else {
        return 0;
    }
};

// echo isEven(8);

$first = 1;
$second = 2;
// $new = $first + $second;
// echo($new);
$sum=0;
while ($first < 4000000) {
    if (isEven($first)) {
        // echo ($first);
        // echo ("<pre>");
        $sum = $sum + $first;
        echo ($sum);
        echo ("<pre>");

    }
    $new = $first + $second;
    $first = $second;
    $second = $new;

    // echo ($first);
    // echo("<pre>");
}
// echo($first);
// echo($second);
// echo($new);
