<?php

$a = 1;
while (true) {
    $result = check($a);
    if ($result) {
        echo "The number is: $result";
        break;
    }
    $a++;
}

function check($x)
{
    for ($i = 1; $i <= 10; $i++) {
        if ($x % $i !== 0) {
            return false;
        }
    }
    // echo $x;
    return $x;
}
