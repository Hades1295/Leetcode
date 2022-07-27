<?php
$s =  ["h","e","l","l","o"];
print_r(reverseString($s));
function reverseString($s) {
    $size = count($s);
    $array = [];
       for($i=$size-1; $i>=0; $i--){
           $array[] =  $s[$i] ;
    }
    return $array;
    }           