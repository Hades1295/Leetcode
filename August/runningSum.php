<?php
// Given an array nums. We define a running sum of an array as runningSum[i] = sum(nums[0]…nums[i]).

// Return the running sum of nums.

// Example 1:

// Input: nums = [1,2,3,4]
// Output: [1,3,6,10]
// Explanation: Running sum is obtained as follows: [1, 1+2, 1+2+3, 1+2+3+4].
// Example 2:

// Input: nums = [1,1,1,1,1]
// Output: [1,2,3,4,5]
// Explanation: Running sum is obtained as follows: [1, 1+1, 1+1+1, 1+1+1+1, 1+1+1+1+1].
// Example 3:

// Input: nums = [3,1,2,10,1]
// Output: [3,4,6,16,17]
    $nums = [1,2,3,4];
    print_r(runningSum($nums));
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $temp = $nums;
        $arrSize = sizeof($nums);
      for ($i=0; $i < $arrSize ; $i++) { 
             
            $temp[$i] = $nums[$i]+ $temp[$i-1] ;
      }  
      return $temp;
    }