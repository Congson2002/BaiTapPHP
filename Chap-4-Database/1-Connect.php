<?php
function dbConnect($servername, $username, $password, $dbname){
    $connect = new mysqli($servername,$username,$password,$dbname);
    return $connect;
}
if(dbConnect('localhost','root','','laptrinhnotkho')){
    echo('Kết nối database thành công');
}

