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