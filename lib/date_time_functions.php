<?php 
  function formateDateTime($date){
     return date('j M Y g:i A', strtotime($date));//j=Day, F=Month, Y=Year,  g:i a' g=Hour,i=minute, a=AM/PM
   }

   function formateTime($date){
   	return date('g:i A');
   }
 ?>