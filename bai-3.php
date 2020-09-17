<?php
$y = 10;
function assign_y () {
$y = 0;
print "\$y inside function is  $y.";
echo ('<br />');
}
assign_y();
print "\$y outside of function is $y.";
echo ('<br /> ---------------------------------- End Vd1. <br />');
function multiply ($value) {
    $value = $value * 10;
    return $value;
}
$retval = multiply  (50);
echo ('Kết quả in ra: ');
echo ('<br />');
Print "Return value is $retval\n";
echo ('<br /> ---------------------------------- End Vd2. <br />');
$a = 15;
function add () {
GLOBAL $a;
$a++;
echo ('Kết quả in ra: ');
print "value of a is $a";
}
add ();
echo ('<br /> ---------------------------------- End Vd3. <br />');
echo ('Kết quả in ra: ');
echo ('<br />');
function keep_track() {
    STATIC $count = 0;
    $count++;
    print $count;
    print "
";
}
keep_track();
echo ('<br />');
keep_track();
echo ('<br />');
keep_track();
echo ('<br /> ----------------------------------- End Vd4. <br />');
?>  