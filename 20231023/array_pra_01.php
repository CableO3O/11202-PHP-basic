<h2>利用陣列產生99乘法表</h2>
<style>
    table,tr,td{
        border: black solid 1px;
        border-collapse: collapse;
    }
</style>
<?php

$nine=[];

for ($i = 1; $i <= 9; $i++) {
    
    for ($j = 1; $j <= 9; $j++) {
        $nine[]="  $i  X  $j  =   ".($j * $i);
    }
    
};

// print_r($nine);
echo"<table>";
foreach($nine as $idx => $value){
    
    echo"<td>";
    echo $value;
    if($idx%9==8){
        echo"<tr>";
    }

    
}
echo"</table>";


echo"<table>";
foreach($nine as $idx => $value){
    
    if($idx%9==0){
        echo"<tr>
        <td>$value</td>";
    }else if($idx%9==8){
        echo"<td>$value</td>
        </tr>";
    }else{
        echo"<td>$value</td>";
    }

    
}
echo"</table>";