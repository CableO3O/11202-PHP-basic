<h2>找出500年的閏年</h2>
<?php
$year=[];
for($i=2023;$i<2523;$i++){
    $year[]=$i;
}
foreach($year as $idx=>$value){
    if(($value%4==0 && $value%100!=0) || $value%400==0){
        echo $value."是閏年";
        echo"<br>";
     }
}