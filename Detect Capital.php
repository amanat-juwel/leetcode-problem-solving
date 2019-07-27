<?php
//https://leetcode.com/problems/two-sum/submissions/

class Solution {

    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse($word) {

    	$flag = 0;
    	$type = 'lower'; 
        for ($i=0; $i < strlen($word); $i++) { 
        	if(ctype_lower($word[$i])){
        		$type = 'lower'; 
        	}
        }

        return $flag;
    }
}

$obj = new Solution;
echo $obj->detectCapitalUse('USA');

 
?>