<?php
$n =2;
$a = fib($n);
 echo "=".$a;
 function fib($n) {
    $n1=1; 
    $n2=0; 
    for($i=1;$i<=$n;$i++){
    $temp=$n1+$n2;  
    $n1=$n2;  
    $n2=$temp; 
    }
    return $temp;
}
