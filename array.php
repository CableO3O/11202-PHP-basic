<?php
$a=[];
// []中沒有輸入值代表從0開始宣告
$a[]=10;
$a[]=30;
$a[]='泰山';
$a[]='新莊';
echo "<pre>";
print_r($a);
echo "<pre>";

echo$a[1];
echo$a[3];
echo'<hr>';
$b=[];
$b['姓名']='黃冠諭';
$b['tel']='0912345678';
$b['地址']='新莊';
$b['血型']='O型';

echo "<pre>";
print_r($b);
echo "<pre>";

echo$b['姓名'];
echo$b['血型'];
echo'<hr>';


$c=[];
$c['name']='黃冠諭';
$c['興趣']=['打電動','看電影','吃飯'];

echo "<pre>";
print_r($c);
echo "<pre>";

echo$c['name'];
echo$c['興趣'][0];
echo$c['興趣'][1];
echo'<hr>';

$d=[];
$d=[
    0=>"a",
    1=>"b",
    2=>"c",
    3=>"d"
];
echo"<pre>";
print_r($d);
echo"<pre>";
echo$d[0];
