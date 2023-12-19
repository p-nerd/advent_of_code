<?php

$file = file_get_contents(__DIR__ . "/input.txt");
$file = trim($file);
$lines = explode("\n", $file);

$sum = 0;

foreach ($lines as $line) {
    $first_digit = "0";
    for ($i = 0; $i < strlen($line); $i++) {
        $c = $line[$i];
        if ('0' <= $c && $c <= '9') {
            $first_digit = $c;
            break;
        }
    }

    $last_digit = "0";
    for ($i = strlen($line)-1; $i >= 0; $i--) {
        $c = $line[$i];
        if ('0' <= $c && $c <= '9') {
            $last_digit = $c;
            break;
        }
    }

    $num = $first_digit . $last_digit;

    $sum  += intval($num);
}

echo $sum . "\n";
