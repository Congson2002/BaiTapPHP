<?php
$myYear = 2002;
$currentYear = date('2020');
$myAge = $currentYear - $myYear;
echo ('Tuổi của tôi là: ' . $myAge . ' tuổi');
echo ('<br /> ------------------------------------------ <br />');
$height = 10;
$length = 15;
$width = 5;
$bottom = 12;
$radius = 6;
$diagonalLine1 = 8;
$diagonalLine2 = 6;
$area = $length * $width;
echo ('Diện tích hình chữ nhật có chiều dài '.$length.'cm và chiều rộng '.$width.'cm là: ' . $area . ' cm^2');
echo ('<br />');
$perimeter = ($length + $width) * 2;
echo ('Chu vi hình chữ nhật là: ' . $perimeter . 'cm');
echo ('<br />');
$area = ($radius*$radius);
echo ('Diện tích hình tròn là: ' . $area . 'picm^2'); 
echo ('<br />');
$area = 1/2 * $height * $bottom;
echo ('Diện tích hình tam giác có chiều cao '.$height.'cm và đáy '.$bottom.'cm là: ' . $area . 'cm^2');
echo ('<br />');
$area = 1/2 * ($diagonalLine1 * $diagonalLine2);
echo ('Diện tích hình thoi là: ' . $area . 'cm^2');
echo ('<br /> ------------------------------------------ <br />');
$firstNumber = 4;
$secondNumber = 8;
echo ("Số thứ nhất = $firstNumber và số thứ hai = $secondNumber <br />");

$temp = $firstNumber;
$firstNumber = $secondNumber;
$secondNumber = $temp;
echo ("Kết quả sau khi hoán vị là: Số thứ nhất = $firstNumber, số thứ hai = $secondNumber");
echo ('<br />');
$firstNumber = 8;
$secondNumber =10;
echo ("Số thứ nhất = $firstNumber và số thứ hai = $secondNumber <br />");

$firstNumber = $firstNumber + $secondNumber;  //60
$secondNumber = $firstNumber - $secondNumber; //6
$firstNumber = $firstNumber - $secondNumber; //10
echo ("Kết quả sau khi hoán vị là: Số thứ nhất = $firstNumber, số thứ hai = $secondNumber");
