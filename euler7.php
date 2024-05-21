<?php

//my codes
function Prime($x)
{
    global $newI;

    $newI = [];

    for ($i = 1; $i <= $x; $i++) {
        if ($x % $i == 0) {
            $newI[] = $i;
        }
    }
    if (count($newI) < 3) {
        return $x;
    } else {
        return false;
    }
}

$primers = [];
$a = 2;

while (count($primers) < 10002) {
    if (Prime($a)) {
        $primers[] = $a;
    }
    $a++;
}

echo end($primers);

//chat gpt codes

// function Prime($x)
// {  
//     for ($i = 2; $i <= sqrt($x); $i++) {
//         if ($x % $i == 0) {
//             return false; // اگر عددی به جز 1 و خودش داشته باشد، عدد اول نیست
//         }
//     }
//     return true; // اگر عددی به جز 1 و خودش نداشت، عدد اول است
// }

// $primers = [];
// $a = 2; // از عدد 2 شروع کنید چون 0 و 1 اعداد اول نیستند

// while (count($primers) < 1000) {
//     if (Prime($a)) {
//         $primers[] = $a;
//     }
//     $a++;
// }

// echo end($primers);
