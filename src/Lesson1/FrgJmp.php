<?php

// 100% Solution
function solution($X, $Y, $D) {
    // get jumps ( $Y - $X ) / $D
    $jumps = ( $Y - $X ) / $D;
    // ceil and return as int
    return intval(ceil($jumps));
}