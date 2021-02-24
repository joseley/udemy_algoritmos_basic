<?php

function selectionSort($arr)
{
    $length = count($arr);
    for($i=0; $i<($length-1); $i++) {
        echo implode(" ", $arr) . PHP_EOL;
        $minPos = $i;
        for($j=($i+1); $j<$length; $j++) {
            if($arr[$j] < $arr[$minPos]) {
                $minPos = $j;
            }
        }

        if ($minPos != $i) {
            $aux = $arr[$minPos];
            $arr[$minPos] = $arr[$i];
            $arr[$i] = $aux;
        }
    }
}

$arr = [5,7,3,9,1,2,8,0];

selectionSort($arr);