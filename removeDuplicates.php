<?php
$nums = [1,1,2];
print_r(removeDuplicates($nums));

function removeDuplicates(&$nums) {
    $num = "";
    for ($i=0; $i < sizeof($nums) ; $i++) { 
        if ($num !== $nums[$i]) {
            $num = $nums[$i];
        }else {
            unset($nums[$i]);
        }
        
    }return count($nums);
}