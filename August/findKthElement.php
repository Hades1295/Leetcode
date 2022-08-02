<?php
//  <!-- Given an n x n matrix where each of the rows and columns is sorted in ascending order, return the kth smallest element in the matrix.

//  Note that it is the kth smallest element in the sorted order, not the kth distinct element.
 
//  You must find a solution with a memory complexity better than O(n2).
 
 
//  Input: matrix = [[1,5,9],[10,11,13],[12,13,15]], k = 8
//  Output: 13
//  Explanation: The elements in the matrix are [1,5,9,10,11,12,13,13,15], and the 8th smallest number is 13 -->
$matrix = [[1,5,9],[10,11,13],[12,13,15]]; 
$k = 8;
print_r(kthSmallest($matrix,$k));
function array_flatten($array) { 
    if (!is_array($array)) { 
      return FALSE; 
    } 
    $result = array(); 
    foreach ($array as $key => $value) { 
      if (is_array($value)) { 
        $result = array_merge($result, array_flatten($value)); 
      } 
      else { 
        $result[$key] = $value; 
      } 
    } 
     return $result; 
  } 

  function kthSmallest($matrix, $k) {
 $result =  array_flatten($matrix);
    sort($result);
    print_r($result);
    return $result[$k-1];
}