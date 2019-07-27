<?php
//https://leetcode.com/problems/two-sum/submissions/

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $arr = [];
		$len = strlen($s);
		$start_par = ['(','{','['];
		$end_par = [')','}',']'];
		// validate
		if($len%2!=0){
			return false;
		}
		// validation passed
		for($i=0; $i<$len; $i++){
		
			// push if valid parenthesis
			if(in_array($s[$i],$start_par)){
				
				array_push($arr,$s[$i]);
				
			}
			// check for first element
			elseif(in_array($s[$i],$end_par)){
				// wrong parenthesis
				if(count($arr)==0){
					return false;
				}
				// valid
				else{
					// check last open parenthesis element matches current close parenthesis
					$flag = false;
					if($s[$i]==')'){
						if($arr[count($arr)-1] == '('){
							$flag = true;
						}
					}
					elseif($s[$i]=='}'){
						if($arr[count($arr)-1] == '{'){
							$flag = true;
						}
					}
					elseif($s[$i]==']'){
						if($arr[count($arr)-1] == '['){
							$flag = true;
						}
					}
					
					if($flag){
						array_pop($arr);
					}
				}
				
			}
		}
		
		if(count($arr)>0){
			return false;
		}
		return true;
    }
}

$str = "{([])]";
$obj = new Solution;
$res = $obj->isValid($str);
echo var_dump($res); 
   

?>