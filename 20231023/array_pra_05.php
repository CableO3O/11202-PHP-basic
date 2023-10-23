<h2>反轉陣列</h2>
<?php
$a=[2,4,6,1,8];

echo"<pre>";
print_r($a);
echo"</pre>";


for ($i=0; $i < floor(count($a)/2); $i++) { 
    $tmp=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$tmp;
}
echo"<pre>";
print_r($a);
echo"</pre>";
// 內建函式
echo"<pre>";
print_r(array_reverse($a));
echo"</pre>";
