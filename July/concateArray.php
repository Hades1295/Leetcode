<?php
$nums = [1,2,1];
print_r(getConcatenation($nums));
function getConcatenation($nums) {
        $num1 = [];
        $num1 = $nums;
        return $nums = array_merge($nums,$num1);
         
}