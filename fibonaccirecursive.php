<?php
$n = 5;
$fib1 = fib($n);
print_r($fib1);
 function fib($n) {
    if (! ($n >= 0 && $n <= 30)) {
        return;
        }
        
        if ($n == 1 || $n == 0) {
        return $n;
        }
        
        return fib($n - 1) + fib($n - 2);
        }
