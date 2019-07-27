<?php
//https://leetcode.com/problems/two-sum/submissions/
/*
Given a string s consists of upper/lower-case alphabets and empty space characters ' ', return the length of last word in the string.

If the last word does not exist, return 0.

Note: A word is defined as a character sequence consists of non-space characters only.

Example:

Input: "Hello World"
Output: 5
*/
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $x = explode(' ',trim($s));
           return strlen($x[count($x)-1]); 
        
    }
}

$ob = new Solution();
$ob->lengthOfLastWord("a");
 
?>