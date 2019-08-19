<?php

class Solution {
   /**
    * @param String $IP
    * @return String
    */
   function validIPAddress($IP) {
       $count = strlen($IP);
       //validate ipv4
       if(count(explode('.',$IP)) > 1){
           $ex = explode('.',$IP);
           $flag = 1;
           foreach($ex as $data){
               if($data > 255 || ($data[0]=='0' && isset($data[1]) &&$data == 0) || ($data[0]=='0' && $data != 0) || !ctype_digit($data) || count($ex) > 4 || count($ex) < 4){
                   $flag = 0;
               }
           }
           if($flag == 1){
               return "IPv4";
           }
           return "Neither";
       }
       //validate ipv6
       elseif(count(explode(':',$IP)) > 1){
           $ex = explode(':',$IP);
           $flag = 1;
           foreach($ex as $data){
               if(strlen($data) > 4 || strlen($data) == 0 || !ctype_xdigit($data) || count($ex)>8  || count($ex)<8){
                   $flag = 0;
               }
           }
           if($flag == 1){
               return "IPv6";
           }
           return "Neither";
       }
       //neither
       else{
           return "Neither";
       }
   }
}
$obj = new Solution;
echo $obj->validIPAddress("192.0.0.1");
   

?>