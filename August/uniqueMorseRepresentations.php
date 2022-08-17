<?php
// International Morse Code defines a standard encoding where each letter is mapped to a series of dots and dashes, as follows:
// 'a' maps to ".-",
// 'b' maps to "-...",
// 'c' maps to "-.-.", and so on.
// // For convenience, the full table for the 26 letters of the English alphabet is given below:
//     $morse = [".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.."];
// Given an array of strings words where each word can be written as a concatenation of the Morse code of each letter.
// For example, "cab" can be written as "-.-..--...", which is the concatenation of "-.-.", ".-", and "-...". We will call such a concatenation the transformation of a word.
// Return the number of different transformations among all words we have.
// Input: words = ["gin","zen","gig","msg"]
// Output: 2
// Explanation: The transformation of each word is:
// "gin" -> "--...-."
// "zen" -> "--...-."
// "gig" -> "--...--."
// "msg" -> "--...--."
// There are 2 different transformations: "--...-." and "--...--.".
// Input: words = ["a"]
// Output: 1
    $words = ["gin","zen","gig","msg"];
        print_r(uniqueMorseRepresentations($words));
        function uniqueMorseRepresentations($words) {
            $morse = [".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.."];
                $replaced = [];
                $chars = [];
                foreach ($words as $word) {
                    $chars = str_split($word);
                    $s = '';
                    foreach ($chars as $char) {
                        $s.=$morse[ord($char)-97];   
                    }
                    $replaced[]=$s; 
           
                }
                return count(array_unique($replaced));
        }