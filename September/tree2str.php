<?php

// Given the root of a binary tree, construct a string consisting of parenthesis and integers from a binary tree with the preorder traversal way, and return it.

// Omit all the empty parenthesis pairs that do not affect the one-to-one mapping relationship between the string and the original binary tree.
$root = [1,2,3,4];
print_r(tree2str($root));
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
function tree2str($t) {
    
    return $this->preOrder($t);
}

function preOrder($root){
    
    if( $root == null )
        return '';
    
    $str .= $root->val;
    
    if( $root->left != null or $root->right != null ){
        $str .= '(';
            $str .= $this->preOrder($root->left);
        $str .= ')';
    }
    
    if( $root->right != null){
        $str .= '(';
        $str .= $this->preOrder($root->right);
        $str .= ')';
    }
    return $str;
}