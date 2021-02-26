<?php

function factorial($num)
{
    if ($num > 1) {
        return $num * factorial($num-1);
    }

    return 1;
}

$numbers = [6,5,4,3];

foreach($numbers as $num) {
    echo "!$num: " . factorial($num) . PHP_EOL;
}
