<?php

function bubbleSort($list)
{
    $sorted = false;
    $length = count($list);
    $round = 0;

    while(!$sorted) {
        $sorted = true;
        echo implode(" ", $list) . PHP_EOL;
        for($i=0; $i<($length-1-$round); $i++) {
            if ($list[$i] > $list[$i+1]) {
                $aux = $list[$i+1];
                $list[$i+1] = $list[$i];
                $list[$i] = $aux;

                $sorted = false;
            }
        }
        $round++;
    }
}

$arr = [5,7,3,9,1,2,8,0];

bubbleSort($arr);