<?php
$nums1 = [1,2,2,1];
$nums2 = [2,2];
print_r(intersection($nums1, $nums2));
function intersection($nums1, $nums2) {
    $result=array_intersect($nums1,$nums2);   
    return array_unique($result);
   }