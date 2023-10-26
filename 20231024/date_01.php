<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table{
            border-collapse: collapse;
            border:3px double #999;

        }

        td{
            border:1px solid #999;
            padding:5px 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php 
echo "<h3>";
echo date("西元Y年m月");
echo "</h3>";
// 年
$thisMonth=date("Y");
// 本年本月1日
$thisFirstDay=date("Y-m-1");
// 指定日子為星期幾
$thisFirstDate=date('w',strtotime($thisFirstDay));
// 當前月份的天數
$thisMonthDays=date("t");
// 當前月份最後一天日期
$thisLastDay=date("Y-m-$thisMonthDays");
// 當前月份週數，ceil(無條件進位)
$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);
// 在看月曆時，如果前面有空白，該空白日期(本月1日-1日的星期)
$firstCell=date("Y-m-d",strtotime("-$thisFirstDate days",strtotime($thisFirstDay)));
echo $firstCell;
echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";
for($i=0;$i<$weeks;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        $addDays=7*$i+$j;
        $thisCellDate=strtotime("+$addDays days",strtotime($firstCell));
        // 給六日上css
        if(date('w',$thisCellDate)==0 || date('w',$thisCellDate)==6){
            echo "<td style='background:pink'>";

        }else{
            echo "<td>";
        }
        // 如果月份相同才echo
        if(date("m",$thisCellDate)==date("m",strtotime($thisFirstDay))){
            echo date("Y-m-d",$thisCellDate);
        }
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>    
<?php 
echo "<h3>";
echo date("西元Y年m月");
echo "</h3>";
$thisMonth=date("Y");
$thisFirstDay=date("Y-m-1");
$thisFirstDate=date('w',strtotime($thisFirstDay));
$thisMonthDays=date("t");
$thisLastDay=date("Y-m-$thisMonthDays");
$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);

echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";
for($i=0;$i<$weeks;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        echo "<td>";
        $tmp=7*($i+1)-(6-$j)-$thisFirstDate;
        if($tmp>0 && $tmp<=$thisMonthDays){
            echo $tmp;
        }
        
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
    <h3>西元2023年10月</h3>
<table>
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>
    <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
    </tr>
    <tr>
        <td>8</td>
        <td>9</td>
        <td>10</td>
        <td>11</td>
        <td>12</td>
        <td>13</td>
        <td>14</td>
    </tr>
    <tr>
        <td>15</td>
        <td>16</td>
        <td>17</td>
        <td>18</td>
        <td>19</td>
        <td>20</td>
        <td>21</td>
    </tr>
    <tr>
        <td>22</td>
        <td>23</td>
        <td>24</td>
        <td>25</td>
        <td>26</td>
        <td>27</td>
        <td>28</td>
    </tr>
    <tr>
        <td>29</td>
        <td>30</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
</body>
</html>