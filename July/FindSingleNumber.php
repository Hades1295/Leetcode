<?php 
$nums = [2,2,1,2];
print_r(singleNumber($nums));
function singleNumber($nums) {
    $array_count_values = array_count_values($nums);
    foreach ($array_count_values as $key => $value) {
        if ($value == 1) {
         return $key;   
        }
    }
}