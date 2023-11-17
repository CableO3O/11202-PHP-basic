<h1>自訂函式</h1>
<?php
// 自訂函式
$c=20;
function sum($a,$b){
    global $c;
    $sum=$a+$b+$c;
    echo "輸入:".$a."、".$b;
    echo "<br>";
    return $sum;
}
$sum=sum(10,20);
echo "總和是:".$sum;
echo "<hr>";
$sum=sum(17,22);
echo "總和是:".$sum;
echo "<hr>";

echo "總和是:".sum(56,77);
?>

<h1>不定參數的用法</h1>
<?php
function sum2(...$arg){
    $sum=0;
    foreach ($arg as $num) {
        if (is_numeric($num)) {
            $sum +=$num;
        }
    }
    return $sum;
}

echo sum2(12,36,89);
?>
