<?php
$n = 100;
$total = 0;

for ($i = 1; $i <= $n; $i++) {
    $total += $i;
}

echo ("Kết quả của biểu thức s = 1 + 2 + 3 + ... + $n là: $total");
echo ('<br /> -------------------------------------------- End Ex1. <br />');
$n = 10;
$total = 0;
for ($i = 1; $i <=$n; $i++) {
    $multiply = 1;
for ($j = 1; $j <= $i; $j++) {
    $multiply *= $j;
    }
    $total += $multiply;
}
echo ("<p> Kết quả của biểu thức S = 1 +1*2 + 1*2*3 + 1*2*3*4 + ... + 1*2*3*4...*$n là: $total </p>");
echo ('<br /> -------------------------------------------- End Ex2. <br />');
$n     = 10;
$total = 0;
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 1) {
        $total += $i;
    }
}
echo ("<p> Kết quả của biểu thức S = 1 + 3 + .. + $n là : $total </p>");
echo ('<br /> -------------------------------------------- End Ex3. <br />');
$n = 10;
$total = 0;
for ($i = 2; $i <= $n; $i += 2) {
    $total += $i;
}
echo ("<p> Kết quả của biểu thức S = 2 + 4 + .. + $n là : $total </p>");
echo ('<br /> -------------------------------------------- End Ex4. <br />');
$n = 5;
$total = 0;
$i = 1;
while ($i <= $n) {
    $j = 1; // giá trị khởi tạo cho vòng lặp while lồng bên trong
    $multiply = 1; // giá trị của giai thừa
while ($j <= $i) {
    $multiply *= $j;
    $j++;
    }
    $total += $multiply;
    $i++;
}
echo ("<p> Kết quả của biểu thức S = 1! + 2! + 3! + ... + $n! là: $total </p>");
echo ('<br /r> -------------------------------------------- End Ex5. <br />');
$number = 13;
$i = 2;
$isPrime = true;
while ($i < $number) {
    if ($number % $i == 0) {
        $isPrime = false;
        break;
    }
    $i++;
}

if ($isPrime) {
    echo ("<p> $number là số nguyên tố </p>");
    echo ('<br /> -------------------------------------------- End Ex6. <br />');
} else {
    echo ("<p> $number không phải là số nguyên tố </p>");
    echo ('<br /> -------------------------------------------- End Ex6. <br />');
} 
$n = 100;
$listPrime = '';
for ($i = 2; $i < $n; $i++) {
    $isPrime = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j != 0) {
            continue;
        }
        $isPrime = false;
    }
    if ($isPrime) {
        $listPrime .= "$i, ";
    }
}
echo ("<p> Các số nguyên tố trong khoảng [1, $n]: $listPrime </p>");
echo ('<br /> -------------------------------------------- End Ex7. <br />');
$height = 4; 
$width  = 7;
$i = 1; 
while($i <= $height){
    $j = 1;
    while($j <= $width - $height + $i){
        if($j + $i  <= $width - $height  + 1){
            echo('0');
        }
        else {
            echo('1');
        }
        $j ++;
    }
    echo('<br />');
    $i++;
}
echo ('<br /> -------------------------------------------- End Ex8. <br />');
$multiplicationTable = '<table><tr><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th></tr>';
for ($i = 1; $i<= 9; $i++) {
    $multiplicationTable .= '<tr>';
    for ($j =1; $j <= 9; $j++) {
        $multiplicationTable .= "<td> $j * $i = " . $i * $j . "</td>";
    }
    $multiplicationTable .= "</tr>";
}
echo("Bảng cửu chương <br />");
echo $multiplicationTable;
