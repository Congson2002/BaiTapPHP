<?php
echo ('<h4> Bài Tập: Mảng</h4>');
$casts = [
    'SonTung MTP',
    'Jack',
    'Binz',
    'Ho Ngoc Ha',
];
echo ('<pre>');
print_r($casts);
echo ('</pre>');
echo ('<br /> -------------------------------------------- End Ex1. <br />');
$profile = [
    'name' => 'Lê Công Sơn',
    'birth' => '20/06/2002',
    'job' => 'Information Technology'
];
echo ('<pre>');
print_r($profile);
echo ('</pre>');
echo ('<br /> -------------------------------------------- End Ex2. <br />');
$posts = [
    [
        'title' => 'Gác Lại Âu Lo - Da LAB ft.Miu Le [Official MV]',
        'url' => 'https://youtu.be/ECxVfrwwTp0',
        'created_at' => '25 thg 7, 2020',
        'author' => 'Da LAB'
    ],
    [
        'title' => 'SƠN TÙNG M-TP|CÓ CHẮC YÊU LÀ ĐÂY|OFFICIAL MUSIC VIDEO',
        'url' => 'https://youtu.be/6t-MjBazs3o',
        'created_at' => '5 thg 7, 2020',
        'author' => 'SƠN TÙNG M-TP'
    ],
];
echo ('<pre>');
print_r($posts);
echo ('</pre>');
echo ('<br /> -------------------------------------------- End Ex3. <br />');
$posts [] = [
    'title' => 'Chờ Anh Nhé - Hoàng Dũng ft.Hoàng Rob || lyrics',
    'url' => 'https://www.youtube.com/watch?v=kErpTLz39Ls', 
    'created_at' => '15 thg 12, 2018',
    'author' => 'Hoàng Dũng'
];

echo ('<pre>');
print_r($posts);
echo ('</pre>');
echo ('<br /> -------------------------------------------- End Ex4.1. <br />');
array_unshift($posts,[
    'title' => 'Có Chàng Trai Viết Lên Cây - Phan Mạnh Quỳnh | MẮT BIẾC OST 1',
    'url' => 'https://www.youtube.com/watch?v=0VC6euBtKkk',
    'created_at' => '11 thg 12, 2019',
    'author' => 'Phan Mạnh Quỳnh'
]);

echo('<pre>');
print_r($posts);
echo('</pre>');
echo ('<br /> -------------------------------------------- End Ex4.1.2. <br />');
$posts[4]['author'] = 'Hoàng Dũng ft. Hoàng Rob';

echo ('<pre>');
print_r($posts);
echo ('</pre>');
echo ('<br /> -------------------------------------------- End Ex4.2. <br />');
unset($posts[4]);
echo ('<pre>');
print_r($posts);
echo ('</pre>');
echo ('<br /> -------------------------------------------- End Ex4.3 <br />');
$number = [1,2,3,4,5];

$pos = 3;
$val = 22;

array_splice($number,$pos,0,$val);

echo ('<pre>');
print_r($number);
echo ('</pre>');
echo ('<br /> -------------------------------------------- End Ex5. <br />');
$products = [
    [
        'name' => 'Bphone-2019',
        'price' => 1000000,
    ],
    [
        'name' => 'Vsmart-Live',
        'price' => 3790000,
    ],
    [
        'name' => 'Vsmart-Active',
        'price' => 4890000,
    ],
];
echo ('<pre>');
print_r($products);
echo ('</pre>');
echo ('<br /> -------------------------------------------- End Ex6. <br />');
echo ('<pre>');
print_r(reset($products));
echo ('</pre>');
echo ('<br /> -------------------------------------------- End Ex6.1. <br />');
$color = ['Bphone' => 'yellow' , 'Vsmart-Live' => 'blue' ,'Vsmart-Active' => 'red' ];
echo ('<pre>');
print_r($color);
echo ('</pre>');
echo ('<br /> -------------------------------------------- End Ex6.2. <br />');

$key = array_search('blue', $color);
echo$key;
echo ('<br /> -------------------------------------------- End Ex6.2.1. <br />');