<?php
$dividend = 100; // 被除数
$divisor = 2;  // 除数

$remainder = $dividend % $divisor; // 使用取模运算符计算余数

if ($remainder==1) {
     echo $dividend."為奇數";
}
else {
    echo $dividend."為偶數";
}
?>