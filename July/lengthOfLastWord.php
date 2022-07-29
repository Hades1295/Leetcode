<?php

$s = "   fly me   to   the moon  ";
print_r(lengthOfLastWord($s));
function lengthOfLastWord($s) {
    $s = preg_replace('/[ ]+/', ' ', $s);
    var_dump($s);
    $ar = explode(' ', $s);
    $c = count($ar);
    if ($c == 0) return 0;
    return strlen($ar[$c-1]) ?: strlen($ar[$c-2]);
}