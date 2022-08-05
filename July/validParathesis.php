<?php


// Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.

// An input string is valid if:

// Open brackets must be closed by the same type of brackets.
// Open brackets must be closed in the correct order.
 

// Example 1:

// Input: s = "()"
// Output: true
// Example 2:

// Input: s = "()[]{}"
// Output: true
// Example 3:

// Input: s = "(]"
// Output: false
 
    function isValid($s) {
        if(!strlen($s)){
            return true;
        }
        $parentheses_array = str_split($s);
        $stack = [];
        foreach($parentheses_array as $parenthes){
            if($parenthes == '(' 
              || $parenthes == '['
              || $parenthes == '{'){
                $stack[] = $parenthes;
            }
            else{
                $prev = array_pop($stack);
                if(( $prev== '(' && $parenthes == ')')
                   || ($prev == '[' && $parenthes == ']')
                   || ($prev == '{' && $parenthes == '}')
                   ){
                    continue;
                }
                return false;
            }
        }
        // var_dump(count($stack));
        if(count($stack)){
            return false;
        }
        else{
            return true;
        }
    }