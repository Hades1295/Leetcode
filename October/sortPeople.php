<?php

// You are given an array of strings names, and an array heights that consists of distinct positive integers. Both arrays are of length n.

// For each index i, names[i] and heights[i] denote the name and height of the ith person.

// Return names sorted in descending order by the people's heights.

 

// Example 1:

// Input: names = ["Mary","John","Emma"], heights = [180,165,170]
// Output: ["Mary","Emma","John"]
// Explanation: Mary is the tallest, followed by Emma and John.
// Example 2:

// Input: names = ["Alice","Bob","Bob"], heights = [155,185,150]
// Output: ["Bob","Alice","Bob"]
// Explanation: The first Bob is the tallest, followed by Alice and the second Bob.

$names = ["Mary","John","Emma"]; 
$heights = [180,165,170];
print_r(sortPeople($names, $heights));
function sortPeople($names, $heights) {
        $temp = [];
        for ($i=0; $i < sizeof($heights); $i++) { 
            $temp[$heights[$i]] =$names[$i]; 
        }
        krsort($temp);
        return $temp;
}