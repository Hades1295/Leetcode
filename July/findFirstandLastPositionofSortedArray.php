<?php

$nums = [5,7,7,8,8,10]; $target = 8;
print_r(searchRange($nums, $target));
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target) {
        $first = $last = -1;
        foreach ($nums as $key => $value) {
            if ($value === $target ) {
                if ($first === -1) {
                    $first = $key;
                }
                $last =$key;
             
            }
        }
        return [$first,$last];
    }