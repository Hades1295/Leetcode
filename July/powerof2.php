<?php
$n =16;
print_r(isPowerOfTwo($n));
   function isPowerOfTwo($n) {
if ($n == 0)
    return 0;
while ($n != 1)
{
    if ($n % 2 != 0)
        return 0;
    $n = $n / 2;
}
return 1;
}