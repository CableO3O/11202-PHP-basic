<?php
$score=51;
echo "我的成績" . $score;
echo "<br>";
echo "判斷為:";

if($score>=60){
    echo "及格";
}
else{
    echo"不及格";
}
echo "<br>";
if ($score>=90 && $score<=100) {
    $level="A";
}
if ($score>=80 && $score<=89) {
    $level="B";
}
if ($score>=70 && $score<=79) {
    $level="C";
}
if ($score>=60 && $score<=69) {
    $level="D";
}
if ($score>=0 && $score<=59) {
    $level="E";
}

echo "成績等級為:".$level;
echo "<br>";
switch ($level) {
    case 'A':
        echo "表現優良，值得肯定";
        break;
    case 'B':
        echo "表現不錯";
        break;
    case 'C':
        echo "再加油";
        break;
    case 'D':
        echo "還需再努力";
        break;
    default:
        echo"可憐阿";
        break;
}
echo "<br>";
for($i=0 ; $i<10 ; $i=$i*2+1){
    echo $i;
    echo "<br>";
}
$q=0;
while($q<=60){
    echo $q;
    $q=$q+10;
    echo "<br>";
}
$scr=[60,22,72,10,80];

foreach($scr as $idx => $val){
    echo '第' . $idx+1 . '位同學的成績為' . $val . '<br>';
}


