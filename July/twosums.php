<?php
$nums  =[2,7,11,15];
$target = 9;
twoSum($nums,$target);
print_r(twoSum($nums,$target));
function twoSum($nums, $target) {
        
    for($i=0;$i< (sizeof($nums));$i++){
        for($j=$i + 1;$j< sizeof($nums);$j++){
            if($nums[$j] == $target -$nums[$i]){
                return[$i,$j];
            }
      }
    }
}