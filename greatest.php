<?php
/*Greatest of 3 Numbers*/
// $a = 100;
// $b =20;
// $c= 30;

// if ($a > $b && $a > $c) {
//     echo "A is Greatest";exit;
// }
// if ($b > $a && $b > $c) {
//     echo "B is Greatest";exit;
// }
// if ($c > $a && $c > $b) {
//     echo "C is Greatest";exit;
// }

// exit;

/*Greatest in an array */ 
// $a = array('1','10','72','3','54');

// var_dump($a);exit;
$numbers = array(0,10,80,67,60,89,91,56,45,30,95,83);
$length = count($numbers);
$max = $numbers[0];
for($i=1;$i<$length;$i++)
{
if($numbers[$i]>$max)
{
$max = $numbers[$i];
}
}
Echo "the biggest number in the array is ".$max;exit;
