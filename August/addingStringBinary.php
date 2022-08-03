<?php
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
