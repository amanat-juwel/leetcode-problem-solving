<?php
//https://leetcode.com/problems/two-sum/submissions/

class Solution {

    /**
     * @param String $moves
     * @return Boolean
     */
    function judgeCircle($moves) {
    	$strLen = strLen($moves);
    	$flag = 0;
    	$R = [1,0];
    	$U = [0,1];
    	$L = [-1,0];
    	$D = [0,-1];
        
        $x = 0;
        $y = 0;

        for($i=0; $i<$strLen; $i++){
        	if($moves[$i] == 'R'){
        		$x += $R[0];
        		$y += $R[1];
        	}
        	elseif($moves[$i] == 'U'){
        		$x += $U[0];
        		$y += $U[1];	
        	}
        	elseif($moves[$i] == 'L'){
        		$x += $L[0];
        		$Y += $L[1];
        	}
        	elseif($moves[$i] == 'D'){
        		$x += $D[0];
        		$y += $D[1];
        	}
        }

        return ($x == 0 && $y == 0) ? true : false;
    }
}


$obj = new Solution;
var_dump($obj->judgeCircle("RRDD")); 
   
?>