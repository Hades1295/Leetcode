<?php 

 $s ='LVIII';
 print_r(romanToInt($s));
function romanToInt($s) {
    $roman = $s;
     $result = 0;
     $romans = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ); 
        foreach ($romans as $key => $value) {
            var_dump(strpos($roman, $key));
            while (strpos($roman, $key) === 0) {
                $result += $value;
                $roman = substr($roman, strlen($key));
            }
        }
        return $result;
}


