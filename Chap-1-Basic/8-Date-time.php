<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$now = new DateTime();
print_r($now);
echo('<br />');
echo($now->format('d - m - Y h:i'));
$interval = new DateInterval('P30D');
echo('<br />');
echo($now->sub($interval)->format('d - m - Y h:i'));
echo('<br />');
$date = new DateTime();
$date->setDate(2020,4, 29);
print_r($date);

echo('<br />');
echo(date('d - m -y',strtotime('3 OCtober 2020')));