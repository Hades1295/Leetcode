<?php
$s1 ="aabcc";
$s2= "dbbca";
$s3="aadbbcbcac";
print_r(isInterleave($s1, $s2, $s3));exit;
function isInterleave($s1, $s2, $s3) {
        $l1 = strlen($s1);
        $l2 = strlen($s2);
        $l3 = strlen($s3);

        if ($l1 + $l2 != $l3)
        {
            return false;
        }

        if ($l1 == 0 && $l2 == 0) {
            return true;
        }
        $array = [];
        for ($i=0; $i <$l1 ; $i++) { 
           $array[$i] = array();
           for ($j=0; $j < $l2; $j++) { 
                if ($i ==0 && $j ==0) {
                    $array[$i][$j] = true;
                    continue;
                }
                if ($i > 0 && $array[$i-1][$j] && $s1[$i-1]==$s3[$i + $j-1]) {
                    $array[$i][$j] = true;
                    continue;
                }
                if ($j > 0 && $array[$i][$j-1] && $s2[$j-1]==$s3[$i + $j -1]) {
                    $array[$i][$j] = true;
                    continue;
                }
                $array[$i][$j]=false;
           }
        }
        return $array[$i - 1][$j - 1];

}