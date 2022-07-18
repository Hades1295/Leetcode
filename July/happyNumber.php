<?php 

$n=19;
print_r(isHappy($n));
function isHappy($n) {
    $sum = $n;
    $pows = [];
    do{ 
        $n = str_split($sum);
        $sum = 0;
        $len = count($n);
        for($i = 0; $i < $len; $i++){
            $sum += pow($n[$i],2);
        }
        if($pows[$sum] == true)  return false;
        $pows[$sum] = true;
    }while($sum!=1);
    return true;
}    