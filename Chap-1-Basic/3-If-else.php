<?php
$firstNumber = 10;
$secondNumber = 19;
if ($firstNumber > $secondNumber) {
    echo ('firstNumber lớn hơn secondNumber');} 
else {
    echo ('secondNumber lớn hơn firstNumber');}
echo ('<br /> -------------------------------------------- End Ex1. <br />');
$firstNumber = 2;
$secondNumber = 9;
$thirdNumber = 4;

$max = $firstNumber;
if ($max < $secondNumber) {
    $max = $secondNumber;
}
if ($max < $thirdNumber) {
    $max = $thirdNumber;
}
echo ("Số lớn nhất trong 3 số $firstNumber, $secondNumber, $thirdNumber là: $max");
echo ('<br /> -------------------------------------------- End Ex2. <br />');
$Coin = null;
$Coin = rand(0,1);

if($Coin == 0){
    echo("Sấp");
echo ('<br /> -------------------------------------------- End Ex3. <br />');
}
else {
    echo("Ngửa");
echo ('<br /> -------------------------------------------- End Ex3. <br />');
}
const FIRST_LEVEL = 15000; // 1km
const SECOND_LEVEL = 12000; // 1km đến 5km
const THIRD_LEVEL = 90000; // 6km đến 140km
const FOURTH_LEVEL = 150000; // 141km đến 200km
const FIFTH_LEVEL = 20/100; // 201km đến 500km

$numberKm = 400; // Khai báo số km sẽ đi
$amount = 0;

if($numberKm <= 1){
    $amount = $numberKm * FIRST_LEVEL;
}
else if ($numberKm <= 5){
    $amount = 1 * FIRST_LEVEL + ($numberKm - 1) * SECOND_LEVEL;
}
else if ($numberKm <= 140){
    $amount = 1 * FIRST_LEVEL + 4 * SECOND_LEVEL + ($numberKm - 5) * THIRD_LEVEL;
}
else if ($numberKm <= 200){
    $amount = 1 * FIRST_LEVEL + 4 * SECOND_LEVEL + 134 * THIRD_LEVEL + ($numberKm - 139) * FOURTH_LEVEL;
}
else {
    $amount = (1 * FIRST_LEVEL + 4 * SECOND_LEVEL + 134 * THIRD_LEVEL + ($numberKm - 139) * FOURTH_LEVEL) * FIFTH_LEVEL;
}
$amount = number_format($amount); // định dạng lại số tiền theo chuẩn 500000 = 500,000

echo("Số tiền khách phải trả khi đi $numberKm km là: $amount đ");
echo('<br /> -------------------------------------------- End Ex4. <br />');
