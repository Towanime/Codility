<?php

function solution($A) {
    // keep track of pairs
    $pairs = 0;
    // cars going east, when found with a car going west this value will add to pairs
    $eastCars = 0;
    $length = count($A);
    for($i = 0; $i < $length; $i++){
        if($A[$i] == 1){ // going west, sum the current ones going east
            $pairs += $eastCars;
        }else{
            $eastCars++;
        }
        if($pairs > 1000000000) return -1; // kill it
    }
    return $pairs;
}