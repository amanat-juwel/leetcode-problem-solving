<?php
/*
Input: [1,2,3]
Output: [1,2,4]
Explanation: The array represents the integer 123.

Input: [9,9,9]
Output: [1,0,0,0]
Explanation: The array represents the integer 999.
*/
class Solution {
    function plusOne($digits) {
		$length_of_digits = count($digits);
		$val = '';
		$flag = 0;
		for($i=$length_of_digits-1; $i>=0; $i--){
			if($flag == 0){
				if($digits[$i]+1 < 10){
					$flag = 1;
					$val .= $digits[$i]+1;
				}
				else{
					$val .= 0;
				}
			}
			else{
				$val .= $digits[$i];
			}
		}
		
		$val = strrev($val);
		if($val[0]==0){
			$val = '1'.$val;
		}
		$array = [];

		for($j=0; $j<strlen($val); $j++){
			array_push($array,$val[$j]);
		}
		
		return $array;

    }
}

$digits = [8,9,9,9];
$obj = new Solution;
$res = $obj->plusOne($digits);

echo var_dump($res);
 
?>