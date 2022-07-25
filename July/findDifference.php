<?php

$s = "abcd"; 
$t = "abcde";
print_r(findTheDifference($s, $t));
function findTheDifference($s, $t) {
        $t_arr = str_split($t);
        for($i = 0; $i < strlen($s); $i++){
            $key = array_search($s[$i], $t_arr);
            unset($t_arr[$key]);
        }
        return end($t_arr);
  }