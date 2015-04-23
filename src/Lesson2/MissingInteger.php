<?php

// 100% Solution
function solution($A) {
    // initial value, will move to the right if it's found in a temporal array
    $minimalValue = 1;
    // array map, used to know which values already been found and which minimal is next
    $values = array();
    $length = count($A);
    for($i = 0; $i < $length; $i++){
    	// first time value?
        if(!isset($values[$A[$i]])){
            // set it as found so minimal can move up
            $values[$A[$i]] = true;
        }
        if($A[$i] == $minimalValue){
            // same as minimal? must go up and find next valid value
            $newMinimal = $minimalValue + 1;
            // loop until a new minimal is found
            while(true){
                if(!isset($values[$newMinimal])){
                    // if no index is found then we have our new minimal value
                    $minimalValue = $newMinimal;
                    break;
                }else{
                	// to the right until an empty slot is found
                    $newMinimal++;
                }
            }
        }
    }
    return $minimalValue;
}