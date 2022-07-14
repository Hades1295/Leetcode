<?php

$nums = [1,3,5,6]; $target = 7;
    print_r(searchInsert($target, $nums));
    function searchInsert($nums, $target) {
        foreach ($nums as $key => $value) {
            if ($value >= $target) {
                return $key;
                break;
            }
            if (end($nums)< $target) {
                return end($key);
            }
        }
      }