<?php
//https://leetcode.com/problems/two-sum/submissions/

class Solution {

    /**
     * @param String $address
     * @return String
     */
    function defangIPaddr($address) {
        return str_replace('.', '[.]', $address);
    } 
}

$address = "1.1.1.1";

$obj = new Solution;
return var_dump($obj->defangIPaddr($address)); 
   

?>