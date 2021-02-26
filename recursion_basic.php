<?php

function countDown($num)
{
    echo $num . PHP_EOL;

    if ($num>0){
        countDown($num-1);
    }
}

countDown(5);