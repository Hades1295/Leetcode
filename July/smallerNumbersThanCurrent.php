<?php
$nums = [8,1,2,2,3];
print_r(smallerNumbersThanCurrent($nums));
function smallerNumbersThanCurrent($nums) {
    $count =  sizeof($nums);
    $array = [];
    $n = 0;
        for ($i=0; $i < $count ; $i++) { 
            for ($j=0; $j < $count; $j++) { 
                if ($nums[$i] > $nums[$j] && $i !== $j) {
                        $n +=1;
                }
            }
            $array[$i] = $n;
            $n = 0;
        }
        return $array;
}
