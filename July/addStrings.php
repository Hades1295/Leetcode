<?php
$num1 = "11"; $num2 = "123";
print_r(addStrings($num1, $num2));
function addStrings($num1, $num2) {
    $add =  bcadd($num1 ,$num2);
       return $add;      
   }
