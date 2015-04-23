<?php

// 100% Solution
function solution($A) {
    // write your code in PHP5.5
    sort($A);
    $length = count($A);
    for($i = 0; $i < $length; $i++){
        if($i + 1 != $A[$i] ) return 0;
    }
    return 1;
}