<?php 
$haystack = "hello"; $needle = "ll";

print_r(strString($haystack, $needle));
    function strString($haystack, $needle) {
    return strpos($haystack, $needle);          
    }
