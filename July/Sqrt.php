<?php
$x = 8;
print_r(mySqrt($x));
function mySqrt($x) {
    $x =  sqrt($x);
      return  floor($x);
}