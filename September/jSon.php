<?php

$json  = array(0 => array("value1", "value2", "nikita"),
         1 => array("value1", "value2", "value3", "mandaliya"),
         2 => array("value1", "value2", "flutter"));
        print_r(jsonRun($json)); 
        function jsonRun($json)
        {        
            for ($i=0; $i < count($json)  ; $i++) { 
                for ($j=0; $j < count($json[$i]); $j++) { 
                    if ($json[$i][$j] == 'nikita'  || $json[$i][$j]== 'mandaliya' || $json[$i][$j]== 'flutter') {
                        $temp[] =  $json[$i][$j];
                }
            }
            return implode(" ",$temp);
            }
        }    
