<?php

// 50% Solution 0% Performance
/* Performance tests
-----------
big_values 
A = 100, B=123M+, K=2	>6.000 s	TIMEOUT ERROR 
running time: >6.00 sec., time limit: 0.10 sec.

-----------
big_values2 
A = 101, B = 123M+, K = 10K	>6.000 s	TIMEOUT ERROR 
running time: >6.00 sec., time limit: 0.10 sec.

-----------
big_values3 
A = 0, B = MAXINT, K in {1,MAXINT}	>6.000 s	TIMEOUT ERROR 
running time: >6.00 sec., time limit: 0.10 sec.

-----------
big_values4 
A, B, K in {1,MAXINT}	>6.000 s	TIMEOUT ERROR 
running time: >6.00 sec., time limit: 0.10 sec.
*/
function solution($A, $B, $K) {
    $count = 0;
    // iterate the range from $A to $B inclusive
    for($i = $A; $i <= $B; $i++){
        // use modulus operator to know if divisible by $K
        if(($i % $K) == 0) $count++;
    }
    
    return $count;
}