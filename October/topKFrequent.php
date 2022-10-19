<?php
// Given an array of strings words and an integer k, return the k most frequent strings.

// Return the answer sorted by the frequency from highest to lowest. Sort the words with the same frequency by their lexicographical order.

 

// Example 1:

// Input: words = ["i","love","leetcode","i","love","coding"], k = 2
// Output: ["i","love"]
// Explanation: "i" and "love" are the two most frequent words.
// Note that "i" comes before "love" due to a lower alphabetical order.
// Example 2:

// Input: words = ["the","day","is","sunny","the","the","the","sunny","is","is"], k = 4
// Output: ["the","is","sunny","day"]
// Explanation: "the", "is", "sunny" and "day" are the four most frequent words, with the number of occurrence being 4, 3, 2 and 1 respectively.
        
        // Time: O(nlogn)
        // Space O(n)
        
        $storage = [];
        // Using hash table to store counter.
        for ($i = 0; $i < count($words); $i++) {
            $storage[$words[$i]] = $storage[$words[$i]] ?? 0;
            $storage[$words[$i]]++;
        }
        
        // O(nlogn)
        // Sort the the hash table based on the counter number.
        arsort($storage);
        
        // O(nlogn)
        // Sort the hashed table where value is equal.
        uksort($storage, function($a, $b) use ($storage) {
            if ($storage[$a] == $storage[$b]) {
                return $a <=> $b;
            }
            return 0;
        });
        
        // Return subset first $k element in sorted array.
        return array_slice(array_keys($storage), 0, $k);