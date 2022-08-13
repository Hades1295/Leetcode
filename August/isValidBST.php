<?php
// Given the root of a binary tree, determine if it is a valid binary search tree (BST).

// A valid BST is defined as follows:

// The left subtree of a node contains only nodes with keys less than the node's key.
// The right subtree of a node contains only nodes with keys greater than the node's key.
// Both the left and right subtrees must also be binary search trees.

// Input: root = [2,1,3]
// Output: true


/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
// class Solution {

//     /**
//      * @param TreeNode $root
//      * @return Boolean
//      */
    $root = [2,1,3];
    print_r(isValidBST($root));
    function isValidBST($root, $left = null, $right = null) {
        if ($root === null) return true;
        
        if ($left !== null && $root->val <= $left->val) return false;
        if ($right !== null && $root->val >= $right->val) return false;
        
        return isValidBST($root->left, $left, $root) && isValidBST($root->right, $root, $right);
    }   
// }