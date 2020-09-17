<?php
echo "Kết quả in ra: ";
$a = 2;
$b = 2;
    if ($a > $b) {
        echo "a is bigger than b";
}   else if ($a == $b) {
        echo "a is equal to b";
}   else {
        echo "a is smaller than b";
}
echo ('<br /> ------------------------------------------ End Vd1. <br />');
echo "Kết quả in ra: ";
$i ="apple";
switch ($i) {
    case "banana":
        echo "it is banana";
        break;
    case "orange":
        echo "it is orange";
        break;
    case "mango":
        echo "it is mango"; 
        break;
    case "apple":
        echo "it is apple ";
        break;
}
echo ('<br /> ------------------------------------------ End Vd2. <br />');
echo ('Kết quả in ra: ');
echo ('<br />');
$i = 1;
while ($i <= 3) {
    $i++;
}
echo "value of variable i: ".$i."\n";
echo ('<br />');
$j = 1;
while ($j <= 3):
    $j++;
endwhile;
echo "value of variable j: ".$i;
echo ('<br /> ------------------------------------------ End Vd3. <br />');
echo "Tính giai thừa của 10: ";
echo ('<br />');
echo ('Kết quả in ra: ');
$result=1;
$i = 10;
do {
    $result*=$i;
    $i--;
} while ($i > 0);
 
echo $result;
echo ('<br /> ------------------------------------------ End Vd4. <br />');
echo "Kết quả in ra: ";
echo ('<br />');
for ($x = 0; $x <=10; $x++) {
    echo "The number is: $x <br>";
}
echo ('<br /> ------------------------------------------ End Vd5. <br />');
echo ('Kết quả in ra: ');
echo ('<br />');
$a = array('a' => 1, 'b' => '2', 'c' => '3');
 
foreach ( $a as $value ) {
echo $value, "\n";
echo ('<br /> ------------------------------------------ End Vd6. <br />');
?>