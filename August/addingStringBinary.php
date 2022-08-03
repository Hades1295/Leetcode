<?php
// Given two binary strings a and b, return their sum as a binary string.
// Example 1:

// Input: a = "11", b = "1"
// Output: "100"
// Example 2:

// Input: a = "1010", b = "1011"
// Output: "10101"
 

// Constraints:

// 1 <= a.length, b.length <= 104
// a and b consist only of '0' or '1' characters.
// Each string does not contain leading zeros except for the zero itself.
 $a = "11";
 $b = "1";
print_r(addBinary($a, $b));
function addBinary($a, $b) 
{
$result = ""; // Initialize result
$s = 0;     // Initialize digit sum

// Traverse both strings starting
// from last characters
$i = strlen($a) - 1;
$j = strlen($b) - 1;
while ($i >= 0 || $j >=0 || $s == 1) {
    $s += (($i >= 0)? ord($a[$i]) -
                        ord('0'): 0);
    $s += (($j >= 0)? ord($b[$j]) -
                        ord('0'): 0);
    $result = chr($s % 2 + ord('0')) . $result;  
    $s = (int)($s / 2);
 
    // Move to next digits
    $i--; $j--;
}
return $result;
}                  
