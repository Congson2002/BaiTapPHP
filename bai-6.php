<?php
$company = array( array("ORACLE","INTEL","IBM"),
array("ASUS", "SAMSUNG","MICROSOFT"),
array("HTC", "LENOVO","HP")
);
for ($row = 0; $row < 3; $row++){
   for($col = 0; $col < 3; $col++){
       echo "|".$company[$row][$col];
   }
echo "<br>"; 
}
?> 