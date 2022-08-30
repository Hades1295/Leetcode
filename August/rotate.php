<?php

// You are given an n x n 2D matrix representing an image, rotate the image by 90 degrees (clockwise).

// You have to rotate the image in-place, which means you have to modify the input 2D matrix directly. DO NOT allocate another 2D matrix and do the rotation.
$matrix = [[1,2,3],[4,5,6],[7,8,9]];
print_r(rotate($matrix));
function rotate(&$matrix) {
    $matrixLength = count($matrix[0]);
    $reverseMatrix = array_reverse($matrix);
    for ($i=0; $i < $matrixLength; $i++) { 
        $j=0;
        foreach ($reverseMatrix as $value) {
            $matrix[$i][$j] = $value[$i];
            $j++;
        }
    }
    return $matrix;
    //    foreach ($matrix as $array) {
        
    //     $i = 0;
    //     $size = sizeof($array);
    //     $rotate[] = $array[$i];
    //     $i++;    
    //    }
    //    print_r(array_reverse($rotate));
}