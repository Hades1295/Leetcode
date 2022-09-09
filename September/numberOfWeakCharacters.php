<?php 

// You are playing a game that contains multiple characters, and each of the characters has two main properties: attack and defense. You are given a 2D integer array properties where properties[i] = [attacki, defensei] represents the properties of the ith character in the game.

// A character is said to be weak if any other character has both attack and defense levels strictly greater than this character's attack and defense levels. More formally, a character i is said to be weak if there exists another character j where attackj > attacki and defensej > defensei.

// Return the number of weak characters.
// Example 1:

// Input: properties = [[5,5],[6,3],[3,6]]
// Output: 0
// Explanation: No character has strictly greater attack and defense than the other.
// Example 2:

// Input: properties = [[2,2],[3,3]]
// Output: 1
// Explanation: The first character is weak because the second character has a strictly greater attack and defense.
// Example 3:

// Input: properties = [[1,5],[10,4],[4,3]]
// Output: 1
// Explanation: The third character is weak because the second character has a strictly greater attack and defense.

class Solution {

    /**
     * @param Integer[][] $properties
     * @return Integer
     */
     function numberOfWeakCharacters($properties) {
        usort($properties, function($i, $j) {
            if ($i[0] === $j[0]) {
                return $i[1] - $j[1];
            }
            
            return $j[0] - $i[0];
        });
        
        $res = 0;
        $max = 0;
        foreach ($properties as $property) {
            ($property[1] < $max) && $res++;
            $max = max($max, $property[1]);
        }
        return $res;
    }
}