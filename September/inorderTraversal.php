<?php
// Given the root of a binary tree, return the inorder traversal of its nodes' values.
// Example 1:


// Input: root = [1,null,2,3]
// Output: [1,3,2]
// Example 2:

// Input: root = []
// Output: []
// Example 3:

// Input: root = [1]
// Output: [1]

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
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    var $arr=[];
    function inorderTraversal($root) {
        $arr=[];
        if ($root == null) 
        return [];     
        $this->inorderTraversal($root->left);
        array_push($this->arr,$root->val);
        $this->inorderTraversal($root->right);
       
        return $this->arr;   
    }
}