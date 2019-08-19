<?php


class Solution {
   /**
    * @param Integer $x
    * @return Integer
    */
   function reverse($x) {
            if($x > 0){
                $rev = strrev($x);
            }else{
                $rev = strrev(abs($x));
                $rev=$rev*(-1);
            }
            
            for($i=0;$i<strlen(abs($rev));$i++){
                if($rev[$i]==0){
                   $rev = ltrim($rev, $rev[$i]);
                }
            }
            if($rev >= -2147483648 && $rev <= 2147483647){
                return $rev;
            }else{
                return 0;
            }
        
   }
}
$obj=new Solution;
$x=123;
$obj->reverse($x); 
   

?>