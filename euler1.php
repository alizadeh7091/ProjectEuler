<?php
function zarib($n)
{
    if (($n % 3 == 0) || ($n % 5 == 0)) {
        return $n;
    } else {
        return false;
    }
}

// echo(zarib(4));
$sum = 0;
for ($i = 1; $i < 10; $i++) {
    // echo zarib($i);
    if (zarib($i)) {
        $sum = $sum + $i;
        echo ($sum);
        echo ("<pre>");
    }
}
// echo ("<pre>");
    // echo($i);
