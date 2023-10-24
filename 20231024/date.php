<h1>時間與日期</h1>
<?php
date_default_timezone_set("Asia/Taipei");
echo date("Y-m-d M n m W H:i:s A L");
?>
<h1>strtotime</h1>
<?php
echo strtotime("now");
$time=strtotime("now");
echo "<br>";
echo date("Y-m-d H:i:s",$time);
?>
<h1>2個日期差異</h1>
<?php
$date1="2023-10-24";
$date2="2023-11-15";
$diff=(strtotime($date2)-strtotime($date1))/(60*60*24);
echo $diff . "天";
?>
<h1>距離下一次生日</h1>
<?php
$date="1998-05-26";
$br=strtotime($date);
$diff=strtotime(date("Y")."-".date("m-d",$br));
$today=strtotime("now");
if($diff>$today){
    $day=($diff-$today)/(60*60*24);
}else{
    $diff=strtotime("+1 year",$diff);
    $day=($diff-$today)/(60*60*24);
}

echo "距離下一次生日:".date("Y-m-d",$diff)."還有".floor($day)."天";
?>
<h1>時間格式化參數</h1>
<?php
echo date("Y/m/d");
echo"<br>";
echo date("m月d日 l");
echo"<br>";
echo date("Y-m-d H:i:s");
echo"<br>";
echo date("Y-n-j H:i:s");
echo"<br>";
echo "今天是西元".date("Y年m月d日 l");
if(date("N")>6){
    echo "假日";
}else{
    echo "上班日";
}