<?php 
$l1 = [2,4,3];
$l2 = [5,6,4];
 $add = addTwoNumbers($l1,$l2);
 print_r($add);
function addTwoNumbers($l1, $l2) {
    $carry = 0;
    $l3 = [];
    for($i=0;$i<sizeof($l1);$i++){
        if ($l1[$i] + $l2[$i] > '9'){
        $l3[$i] = $l1[$i] + $l2[$i]; 
        $num =str_split($l3[$i]); 
        $carry ++;   
        $l3[$i] = (int)$num[1];
        }else{
        $l3[$i] = $l1[$i] + $l2[$i]+ $carry ;
        }

    }
    return $l3;
}           
  

