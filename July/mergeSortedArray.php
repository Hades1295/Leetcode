<?php 
$nums1 = [1,2,3,0,0,0];
$m = 3;
$nums2= [2,5,6];
$n = 3;

print_r(merge($nums1, $m, $nums2, $n));exit;
function unSetArray($arrayNum,$l)
{
    $array = [];
    if (sizeof($arrayNum) != $l) {
        for ($i=0; $i < $l ; $i++) { 
            $array[] = $arrayNum[$i];  
        }return $array;
    }
    if ($l == 0) {
        return [];
    }
    if (sizeof($arrayNum) == $l) {
        return $arrayNum;
    }
}
function merge($nums1, $m, $nums2, $n) {
     $num1 = unSetArray($nums1,$m);
     $num2 = unSetArray($nums2,$n);
    $mergedArray = array_merge($num1,$num2);//exit;
    sort($mergedArray);
    // for ($i=0; $i < count($mergedArray) ; $i++) { 
    //     if ($mergedArray[$i] > $mergedArray[$i+1] ) {
    //        $temp  = $mergedArray[$i+1];
    //        $mergedArray[$i+1] = $mergedArray[$i];
    //        $mergedArray[$i] = $temp; 
    //     }
    // }
    return $mergedArray;
}

