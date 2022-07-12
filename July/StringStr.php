<?php 
$haystack = "hello"; $needle = "ll";

function strStr($haystack, $needle) {
    $strPos  = strpos($haystack, $needle);
      return $strPos !== false ? $strPos : -1;

  }
