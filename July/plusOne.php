<?php

    $digits = [1,2,3];
    var_dump(plusOne($digits));
    function plusOne($digits) {
        return str_split(bcadd(1,implode($digits)));
    }