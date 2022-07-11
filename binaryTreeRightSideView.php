<?php 

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
    function rightSideView($root) {
        $result = [];
            
        $buf = [$root];
        while(count($buf) > 0)
        {
                $buf2 = [];
                $result[] = $buf[count($buf)-1]->val;
                foreach($buf as $node)
                {
                        if($node->left)
                                $buf2[] = $node->left;
                        if($node->right)
                                $buf2[] = $node->right;
                }
                $buf = $buf2;
        }
        return $result;
    }
}