<?php
//https://leetcode.com/problems/two-sum/submissions/

class Solution {

    /**
     * @param String $J
     * @param String $S
     * @return Integer
     */
    function numJewelsInStones($J, $S) {
        $count = 0;
        for($i=0; $i<strlen($J); $i++){
            for($k=0; $k<strlen($S); $k++){
               if($J[$i]==$S[$k]){
                   $count++;
               } 
            }
        }
        return $count;
    }
}

$obj = new Solution;
echo $obj->numJewelsInStones('aA', 'aAAbbbb');

?>