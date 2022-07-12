<?php
$nums = [3,2,2,3];
$val =3;
$a = removeElement($nums, $val);
print_r($a);
function removeElement(&$nums, $val) {
    for($i=0;$i<=sizeof($nums);$i++){
        if($val == $nums[$i]){
            unset($nums[$i]);
        }
    }
    return $nums;
} 

