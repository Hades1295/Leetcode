<?php

$nums = [1,3,5,6]; $target = 1;
    print_r(searchInsert($target, $nums));
    function searchInsert($target, $nums) {
        if (array_search($target,$nums)) {
            return array_search($target,$nums);
        }else {
            return false;
        }
    }