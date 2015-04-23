<?php

// 100% Solution
function solution($X, $A) {
    // write your code in PHP5.5
    $leaves = array();
    
    // travel array until $X is found and count($leaves) == $X
    $length = count($A);
    for($i = 0; $i < $length; $i++){
        $leaves[$A[$i]] = 1;
        $countLeaves = count($leaves);
        if($countLeaves == $X) return $i;
    }
    
    return -1;
}