<?php
function checkEmpty($input)
{
    if (empty($input) || $input == null) {
        return true;
    }
}

function checkNumber($input)
{
    if (is_numeric($input)) {
        return true;
    }
}

function checkPhone($input)
{
    if(!is_numeric($input)){
        return false;
    }
    if(strlen($input) > 13 || strlen($input) < 10){
        return false;
    }
    return true;
}

function checkEmail($input){
    return filter_var($input, FILTER_VALIDATE_EMAIL);
}

if (isset($_POST['submit'])) { 
    $erros    = [];
    $fullname = $_POST['fullname'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $gender   = $_POST['gender'] ?? null; 

    if (checkEmpty($fullname)) {
        $erros['fullname'] = ['fullname empty'];
    };
    if (checkEmpty($email)) {
        $erros['email'] = ['email empty'];
    };
    if (checkEmpty($phone)) {
        $erros['phone'] = ['phone empty'];
    };
    if (checkEmpty($gender)) {
        $erros['gender'] = ['gender empty'];
    };
    if (checkNumber($fullname)) {
        $erros['fullname'][] = 'fullname fatal';
    };
    if (!checkPhone($phone)) {
        $erros['fullname'][] = 'Số điện thoại không đúng định dạng';
    }
    if (!checkEmail($email)) {
        $erros['email'][] = 'Email không đúng định dạng';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <style>
        label {
            display: inline-block;
            width: 100px;
        }
    </style>
<head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <?php if(isset($erros)): ?> 
    <ul>
        <?php foreach($erros as $erros): ?>
        <li><?php print_r($erros) ?></li>
        <?php endforeach ?>
    </ul>
    <?php endif ?>
    <div>

            <label for="">Họ và Tên</label>
            <input type="text" name="fullname">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="phone">
        </div>
        <div>
            <label for="">Số điện thoại</label>
            <input type="text" name="phone">
        </div>
        <div>
            <label for="">Giới tính</label>
            Nam <input type="radio" name="gender">
            Nữ <input type="radio" name="gemder">
        </div>
        <div>
            <input type="submit" value="Xác Nhận" name="submit"> 
        </div>
    </form>
</body>