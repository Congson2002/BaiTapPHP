<?php
$y = 10;
function assign_y () {
$y = 0;
print "\$y inside function is  $y.
";
}
assign_y();
print "\$y outside of function is $y.
";
echo "Kết quả in ra: "; 
function multiply ($value) {
    $value = $value * 10;
    return $value;
}
$retval = multiply  (50);
Print "Return value is $retval\n";
?>  