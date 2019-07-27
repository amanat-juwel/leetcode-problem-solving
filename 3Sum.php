<?php
//https://leetcode.com/problems/two-sum/submissions/

/*
Given an array nums of n integers, are there elements a, b, c in nums such that a + b + c = 0? Find all unique triplets in the array which gives the sum of zero.

Note:

The solution set must not contain duplicate triplets.

Example:

Given array nums = [-1, 0, 1, 2, -1, -4],

A solution set is:
[
  [-1, 0, 1],
  [-1, -1, 2]
]
*/
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        $arr = [];
		$count = count($nums);
		for($i=0; $i<$count; $i++){
			for($j=0; $j<$count; $j++){
				for($k=0; $k<$count; $k++){
					if($i==$j || $i==$k || $j==$k){
						continue;
					}
					elseif($j==$k){
						continue;
					}
					else{
						if($nums[$i]+$nums[$j]+$nums[$k] == 0){
							//$val = '['.$nums[$i].','.$nums[$j].','.$nums[$k].']';
							$val = [$nums[$i],$nums[$j],$nums[$k]];
							array_push($arr,$val);							
						}
					}
				}
			}
		}
		return $arr;
    }
}

$nums = [-1, 0, 1, 2, -1, -4];
$obj = new Solution;
$res = $obj->threeSum($nums);

for($i=0; $i<count($res); $i++){
	$tictac = true;
	for($j=0; $j<3; $j++){
		if($res[$i][$j] == asdsa){
			$tictac = false;
		}
	}
	if($tictac){
		echo var_dump($res[$i])."<br>";
	}
	
}
 
?>