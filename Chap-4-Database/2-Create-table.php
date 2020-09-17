<?php
function dbConnect($servername, $username, $password, $dbname){
    $connect = new mysqli($servername,$username,$password,$dbname);
    return $connect;    
}

$DB  = dbConnect('localhost','root','','laptrinhnotkho'); 
    $sql = "CREATE TABLE posts (
           id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
           title VARCHAR(255),
           description VARCHAR(255),
           thumbnail VARCHAR(255),
           content TEXT)";
    if($DB->query($sql)){
        echo('Create table success');
    }
    else{
        echo ('Error !');
    };