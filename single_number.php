<?php
//https://leetcode.com/problems/single-number/

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
       $count = count($nums);
	    for($i=0; $i<$count; $i++){
		    $temp = $nums[$i];
		    for($j=0; $j<$count; $j++){
			    if($i!=$j){
					if($nums[$i]==$nums[$j]){
						$temp = null;
					}
				}
		    }
			
			if($temp!=null){
				return $temp;
				break;
			}
	    }
    }
}

$nums = [1,0,1];

$obj = new Solution;
return var_dump($obj->singleNumber($nums)); 
   

?>