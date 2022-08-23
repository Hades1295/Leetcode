<?php

// Given an integer n, return an array ans of length n + 1 such that for each i (0 <= i <= n), ans[i] is the number of 1's in the binary representation of i.

// Input: n = 2
// Output: [0,1,1]
// Explanation:
// 0 --> 0
// 1 --> 1
// 2 --> 10
$n =5;
print_r(countBits($n));
function countBits($n) {
    for ($i=0; $i <= $n ; $i++) { 
        $temp[] =  decbin($i);
        $bits[] =  strlen(str_replace("0","", $temp[$i]));
    }
    return $bits;  
}