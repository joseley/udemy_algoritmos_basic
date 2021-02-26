<?php

function insertionSort($arr)
{
    $length = count($arr);
    echo implode(" ", $arr) . PHP_EOL;
    for($i=1; $i<$length; $i++) {
        $aux = $arr[$i];
        for($j=($i-1); ($j>=0 && $arr[$j] > $aux); $j--) {
            $arr[$j+1] = $arr[$j];
            $arr[$j] = $aux;
        }
        echo implode(" ", $arr) . PHP_EOL;
    }
}

$arr = [5,7,3,9,1,2,8,0];

insertionSort($arr);
