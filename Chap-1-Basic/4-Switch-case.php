<?php
$firsrtNumber = 30;
$secondNumber = 4;
$operator = '+'; // khai báo phép toán

switch($operator){
    case '+':
    {
        $result = $firsrtNumber + $secondNumber;
        break;
    }
    case '-':
    {
        $result = $firsrtNumber - $secondNumber;
        break;
    }
    case '*':
    {
        $result = $firsrtNumber * $secondNumber;
        break;
    }
    case '/':
    {   
        $result = $firsrtNumber / $secondNumber;
        break;
    }
    case '%':
    {
        $result = $firsrtNumber % $secondNumber;
        break;
    }
    default:
    {
        echo('Phép toán chưa được khởi tạo');
        echo('<br /> -------------------------------------------- End Ex1. <br />');
    }
}
echo("Kết quả của phép tính: $firsrtNumber $operator $secondNumber = $result");
echo ('<br /> -------------------------------------------- End Ex1. <br />');

echo('Câu hỏi : 3 * 7 = ? <br />');
echo('a. 21 <br />');
echo('b. 18 <br />');
echo('c. 4 <br />');
echo('d. 29 <br /r>');

$yourAnswer = 'a';

switch($yourAnswer){
    case 'a':{
        echo('Đáp án a là đáp án đúng');
        echo ('<br /> -------------------------------------------- End Ex2. <br />'); 
        break;
    }
    case 'b':{
        echo('Đáp án b không chính xác');
        echo ('<br /> -------------------------------------------- End Ex2. <br />');
        break;
    }
    case 'c':{
        echo('Đáp án c không chính xác');
        echo ('<br /> -------------------------------------------- End Ex2. <br />');
        break;
    }
    case 'd':{
        echo('Đáp án d không chính xác');
        echo ('<br /> -------------------------------------------- End Ex2. <br />');
        break;
    }
    default:{
        echo('Không có đáp án này');
        echo ('<br /> -------------------------------------------- End Ex2. <br />');
        break;
    }
}
