<?php
$path     = './File.txt';
$contents = file_get_contents($path);
$file     = fopen($path, 'r');
$contents = fread($file, filesize($path));
fclose($file);

$contents = file($path);

$path     = './Contacts.csv';
$file     = fopen($path,'r');
$contents = fgetcsv($file);

$file = 'File.txt';
if (file_exists($file)) {
    //  header('Content-Description: File Transfer');
//  header('Content-Type: application/octet-stream');
//  header('Content-Disposition: attachment; filename="'.basename($file).'"');
//  header('Expires: 0');
//  header('Cache-Control: must-revalidate');
//  header('Pragma: public');
//  header('Content-Length: ' . filesize($file));
//  readfile($file);
//  exit;
}