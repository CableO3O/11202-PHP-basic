<?php

$array=[5,8,3,4,6,9,1];
if(in_array(11,$array)){
    echo"數字有在陣列中";
}else{
    echo"數字不在陣列中";
}

$tmp=array_keys($array);


echo"<pre>";
print_r($tmp);
echo"</pre>";

sort($array);

echo"<pre>";
print_r($array);
echo"</pre>";

rsort($array);

echo"<pre>";
print_r($array);
echo"</pre>";

$string = "apple,banana,cherry,date";
$fruits = explode(",", $string);

foreach ($fruits as $fruit) {
    echo $fruit . " ";
}

$fruits = array("apple", "banana", "cherry", "date");
$fruitString = implode(", ", $fruits);

echo $fruitString;
