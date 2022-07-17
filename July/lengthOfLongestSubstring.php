<?php
$s = "abcabcbb";
print_r(lengthOfLongestSubstring($s));
function lengthOfLongestSubstring($s) {
        $Strcount = '';
        $maxcount = 0;
        $subString= str_split($s);
        for ($i=0; $i < count($subString); $i++) { 
            $string =  $subString[$i];
            if (strpos($Strcount,$string)=== false) {
              $Strcount .=  $string;
              $maxcount = max([$maxcount,strlen($Strcount)]);
            }else{
              $Strcount = substr($Strcount,strpos($Strcount,$string)+1);
              $Strcount .=  $string;
            }
     
        }
        return $maxcount;    
}