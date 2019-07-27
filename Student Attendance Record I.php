<?php
//https://leetcode.com/problems/two-sum/submissions/

class Solution {
   /**
    * @param String $s
    * @return Boolean
    */
   function checkRecord($s) {
       $countA = 0;
       $countL = 0;
       $flag = 0;
       $value = true;
       for($i=0; $i < strlen($s); $i++){
           if($s[$i] == 'A'){
               $countA++;
               $countL = 0;
               if($countA > 1){
                   $value = false;
                   break;
               }
           }
           elseif($s[$i] === 'P'){
               $countL = 0;
           }
           else{
               $countL++;
               if($countL > 2){
                   $value = false;
                   break;
               }
           }
       }
       return $value;
   }
}
$obj = new Solution;
$obj->checkRecord("PPALLL");
 
?>