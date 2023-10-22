<?php
// Online PHP compiler to run PHP program online
// Print "Hello World!" message
function ucgen($s){ 
   
   for($i = 1; $i <= $s; $i++){
       for($j = 1; $j <= $i; $j++){
           echo "0";
           
       }
       echo "<br>";
   }
    
}
ucgen(15);
?>
