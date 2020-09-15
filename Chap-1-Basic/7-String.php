<?php
echo ('<h4> Bài Tập: String</h4>');
$laptrinhnotkho = 'Lecongson.vn';
echo('Số phần tử của chuỗi: '.strlen($laptrinhnotkho));
echo ('<br /> -------------------------------------------- End Ex1. <br />');
$laptrinhnotkho = 'Why oh why tell me why not me';
echo ('Số từ trong chuỗi: '.str_word_count($laptrinhnotkho).' từ');
echo ('<br /> -------------------------------------------- End Ex2. <br />');
$laptrinhnotkho = 'Lecongson.vn';
$laptrinhnotkho = substr($laptrinhnotkho,0,-3);
echo $laptrinhnotkho;
echo ('<br /> -------------------------------------------- End Ex3. <br />');