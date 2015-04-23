<?php

// 100% Solution
function solution($A) {
    // write your code in PHP5.5
    $minimalDifference = 0;
    $length = count($A);
    // know the initial sums
    $sumA = $A[0];
    $sumB = 0;
    for($i = 1; $i < $length; $i++){
        $sumB += $A[$i];
    }
    $minimalDifference = abs($sumB - $sumA);
    
    for($i = 1; $i < $length - 1; $i++){
        // sum to A and substract to B
        $sumA += $A[$i];
        $sumB -= $A[$i];
        $diff = abs($sumB - $sumA);
        // is it left than the initial?
        if($diff < $minimalDifference){
            $minimalDifference = $diff;
        }
    }
    
    return $minimalDifference;
}