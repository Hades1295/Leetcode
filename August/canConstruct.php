<?php

// Given two strings ransomNote and magazine, return true if ransomNote can be constructed by using the letters from magazine and false otherwise.

// Each letter in magazine can only be used once in ransomNote.

 

// Example 1:

// Input: ransomNote = "a", magazine = "b"
// Output: false
// Example 2:

// Input: ransomNote = "aa", magazine = "ab"
// Output: false
// Example 3:

// Input: ransomNote = "aa", magazine = "aab"
// Output: true
class Solution {
	function canConstruct($ransomNote, $magazine) {
        $ransomNoteLetters = array_count_values(str_split($ransomNote));
        $magazineLetters = array_count_values(str_split($magazine));
        
        foreach ($ransomNoteLetters as $letter => $occurence) {
            if ($occurence > $magazineLetters[$letter]) {
                return false;
            }
        }
        
        return true;
    }
}