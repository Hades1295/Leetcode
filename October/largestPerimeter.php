<?php
// Given an integer array nums, return the largest perimeter of a triangle with a non-zero area, formed from three of these lengths. If it is impossible to form any triangle of a non-zero area, return 0.

 

// Example 1:

// Input: nums = [2,1,2]
// Output: 5
// Example 2:

// Input: nums = [1,2,1]
// Output: 0
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function largestPerimeter($nums) {
        sort($nums);                 //sort the array
    
        for($i=(sizeof($nums)-3); $i>=0; $i--){            //traverse from n-3 to 0
            if($nums[$i]+$nums[$i+1] > $nums[$i+2]) {         //if at any instant a + b > c, return perimenter (a+b+c)
                return  $nums[$i]+$nums[$i+1]+$nums[$i+2];    // a=nums[i], b=nums[i+1], c=nums[i+2];
            }
        }
        return 0;                                       //else return 0
    }

