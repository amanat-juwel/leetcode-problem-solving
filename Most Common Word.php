<?php
//819. Most Common Word

class Solution {
   /**
    * @param String $paragraph
    * @param String[] $banned
    * @return String
    */
   function mostCommonWord($paragraph, $banned) {
       $paragraph = str_replace(',',' ',$paragraph);
       $text =  strtolower(preg_replace("#[[:punct:]]#", "", $paragraph));
       $data = explode(' ', $text);
       $raw = [];
       foreach($data as $singleData){
           if($singleData != ""){
               array_push($raw,$singleData);
           }
       }
       $arr = [];
       foreach($raw as $singleData){
           if(count($banned) > 0){
               $flag = 0;
               foreach($banned as $ban){
                   if($singleData == $ban){
                       $flag = 1;
                       break;
                   }
               }
               if($flag==0){
                   array_push($arr,$singleData);
               }
           }
           else{
               array_push($arr,$singleData);
           }
       }
       $vals = array_count_values($arr);
       $index = '';
       $val = 0;
       foreach($vals as $key=>$i){
           if($i>$val){
               $index = $key;
               $val = $i;
           }
       }
       return $index;
   }
}
$paragraph = "a.";
$banned = [];
$obj = new Solution;
$obj->mostCommonWord($paragraph, $banned);
   

?>