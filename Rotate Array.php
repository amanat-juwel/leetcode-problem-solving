<?php
//https://leetcode.com/problems/two-sum/submissions/

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate($nums, $k) {
        $count = count($nums)-1;
        $srl = 0;
        $myArray = [];
        for($i=$count; $i>=0; $i--){
            $srl++;
            if($srl > $k){
                break;
            }
            array_push($myArray , $nums[$i]);
        }

        $myArray = array_reverse($myArray);

        for($j=0; $j<=$count-$k; $j++){

            array_push($myArray , $nums[$j]);
        }

        return $myArray ;
    }   
}

$nums = [1,2,3,4,5,6,7];
$k = 3;

$obj = new Solution;
var_dump($obj->rotate($nums, $k)); 
   

?>