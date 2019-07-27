<?php
//https://leetcode.com/problems/two-sum/submissions/
/*
Input: "AAB"
Output: 8
Explanation: The possible sequences are "A", "B", "AA", "AB", "BA", "AAB", "ABA", "BAA".
*/
class Solution {

    /**
     * @param String $tiles
     * @return Integer
     */
    function numTilePossibilities($tiles) {
        $array = [];
		$len = strlen($tiles);
		for($i=0; $i<$len; $i++){
			for($j=0; $j<$len; $j++){
				if($i==$j){
					if(!in_array($tiles[$i],$array)){
						array_push($array,$tiles[$i]);
					}
				}else{
					if(!in_array($tiles[$i].$tiles[$j],$array)){
						array_push($array,$tiles[$i].$tiles[$j]);
					}
				}
			}
		}

		return var_dump($array);
    }
}

$obj = new Solution;
echo $obj->numTilePossibilities('AAB');

?>