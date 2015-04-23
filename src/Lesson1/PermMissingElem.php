<?php

// 100% Solution
function solution($A) {   
    $size = count($A);
    $expectedSum = ($size + 2) * ($size + 1) / 2;
    $currentSum = array_sum($A);
    return intval($expectedSum - $currentSum);
}