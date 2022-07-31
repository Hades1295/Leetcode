<?php

// You are given a string s and an integer array indices of the same length. 
// The string s will be shuffled such that the character at the ith position moves to indices[i] in the shuffled string.
// Input: s = "codeleet", indices = [4,5,6,7,0,2,1,3]
// Output: "leetcode"
// Explanation: As sh


$s = "codeleet";
$indices = [4,5,6,7,0,2,1,3];
print_r(restoreString($s, $indices));
function restoreString($s, $indices) {
    $res = $s;
    $l = strlen($s);
    for ($i = 0; $i < $l; $i++) {
        $res[$indices[$i]] = $s[$i];
    }
    return $res;
}