<?php
//https://leetcode.com/problems/two-sum/submissions/

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $s));
        if($s == strtolower(strrev($s))){
        	return true;
        }
        return false;
    }
}

$s = "A man, a plan, a canal: Panama";
$obj = new Solution;
return var_dump($obj->isPalindrome($s)); 

 
?>