<?php
$cost = [1,100,1,1,1,100,1,1,100,1];
print_r(minCostClimbingStairs($cost));
function minCostClimbingStairs($cost) {
        $arraySize = sizeof($cost);
        for ($i=0; $i < $arraySize; $i++) { 
            $cost[$i] += min($cost[$i-1], $cost[$i-2]);   
            print_r($cost[$i]);echo "<----->";
        }return min($cost[$arraySize-1], $cost[$arraySize-2]);
    }