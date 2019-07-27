<?php
//https://leetcode.com/problems/two-sum/submissions/

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $count = count($nums);
		for($i=0; $i<$count; $i++){
			for($j=$i+1; $j<$count; $j++){
				if($nums[$i]+$nums[$j]==$target){
					return array($i,$j);
				}
			}
		}
    }   
}

$nums = [2,7,11,15];
$target = 9;

$obj = new Solution;
return var_dump($obj->twoSum($nums, $target)); 
   

?>