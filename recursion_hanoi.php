<?php
/**
 * Hanoi Tower problem
 */

function hanoi($pzs, $source, $dest, $aux)
{
    if ($pzs > 0) {
        hanoi($pzs-1, $source, $aux, $dest);
        echo "Moving from $source -> $dest" . PHP_EOL;
        hanoi($pzs-1, $aux, $dest, $source);
    }
}

hanoi(4, "P1", "P3", "P2");