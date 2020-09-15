<?php
echo "Kết quả in ra: ";
$i ="apple";
switch ($i) {
    case "banana":
        echo "i is banana";
        break;
    case "orange":
        echo "i is orange";
        break;
    case "mango":
        echo "i is mango"; 
        break;
    case "apple":
        echo "i is apple ";
        break;
}

echo "Day la ket qua tinh giai thua cua 5: ";

$result=1;
$i = 5;
do {
    $result*=$i;
    $i--;
} while ($i > 0);
 
echo $result;

echo "Kết quả";
for ($x = 0; $x <=10; $x++) {
    echo "The number is: $x <br>";
}
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
?>