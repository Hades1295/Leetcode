<?php
// Given a binary search tree (BST), find the lowest common ancestor (LCA) node of two given nodes in the BST.

// According to the definition of LCA on Wikipedia: “The lowest common ancestor is defined between two nodes p and q as the lowest node in T that has both p and q as descendants (where we allow a node to be a descendant of itself).”

// Input: root = [6,2,8,0,4,7,9,null,null,3,5], p = 2, q = 8
// Output: 6
// Explanation: The LCA of nodes 2 and 8 is 6. 
$root = [6,2,8,0,4,7,9,null,null,3,5]; $p = 2; $q = 8;
function lowestCommonAncestor($root, $lower, $higher) {
    if (!$root) return null;    
    if ($lower->val > $higher->val){ [$lower, $higher] = [$higher, $lower];}
    if ($root->val >= $lower->val && $root->val <= $higher->val) {
        return $root;
     } else if ($higher->val < $root->val) {
        return $this->lowestCommonAncestor($root->left, $lower, $higher); 
     } else if ($lower->val > $root->val) {
        return $this->lowestCommonAncestor($root->right, $lower, $higher); 
     }
    }
