<?php

$n = 3;
print_r(isPowerOfTwo($n));
            function isPowerOfTwo($n) {
            $number = $n;
            if($n%2 != 0){
                return "false";
            }
            if($n == 1){
                return "true";
            }
            for ($i=0; $i < $number; $i++) { 
            if($n == 2){
                return "true";
            }
            if ($n%2 == 0) {
                $divisor = $n/2;
                $n = $divisor;
                    if($n == 1){
                        return "true";
                }
            }else{
                return "false";
            }
            }
            return "true";
            }