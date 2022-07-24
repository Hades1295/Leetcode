<?php
$n =15;
print_r(fizzBuzz($n));

function fizzBuzz($n) {
    $num = [];
    for ($i=1; $i <= $n ; $i++) { 
        if($i % 3 == 0 && $i % 5 == 0 ){
            $num[$i] = "FizzBuzz";
        }elseif($i % 3 == 0 ){
            $num[$i]  =  "Fizz";
        }
        elseif($i % 5 == 0){
            $num[$i] = "Buzz";
        }
        else{
            $num[$i] = "$i";
        }
        
    }
    return $num;
}