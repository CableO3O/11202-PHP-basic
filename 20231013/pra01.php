<h1>星星直角三角形</h1>
<?php

// echo"*<br>";
//     echo"*";
//     echo"<br>";
// echo"**<br>";
//     echo"*";
//     echo"*";
//     echo"<br>";
// echo"***<br>";
//     echo"*";
//     echo"*";
//     echo"*";
//     echo"<br>";
// echo"****<br>";
//     echo"*";
//     echo"*";
//     echo"*";
//     echo"*";
//     echo"<br>";
// echo"*****<br>";
//     echo"*";
//     echo"*";
//     echo"*";
//     echo"*";
//     echo"*";
//     echo"<br>";
// $i  $j
// 1   1
// 2   2 
// 3   3
// 4   4
// 5   5
$amount=10;


for ($i = 0; $i <= $amount; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


?>
<h1>星星倒直角三角形</h1>
<?php
for ($i = $amount; $i >= 0; $i--) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>
<!-- 因為瀏覽器預設自行空白與字形寬度不同，所以要改字形 -->
<style>
    * {
        font-family: 'Courier New', Courier, monospace;
        /* line-height:改行高 */
        line-height: 10px;
    }
</style>

<h1>星星倒三角形</h1>
<?php
// 第1排決定共幾排星星
for ($i = $amount; $i >= 0; $i--) {
    //  第2排決定每排打幾個空排
    for ($j = 0; $j < ($amount - $i); $j++) {
        echo "&nbsp";
    }
    // 第3排決定每排打幾個星星
    for ($k = 0; $k < ($i * 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>
<h1>星星菱形</h1>
<?php
$mid=floor(($amount*2-1)/2);
for ($i = 0; $i <($amount*2-1); $i++) {
// floor()無條件捨去、ceil無條件進位、ronud四捨五入
    if ($i <= $mid) {
        $tmp = $i;
    } else {
        $tmp--;
    }

    for ($j = 0; $j < ($mid - $tmp); $j++) {
        echo "&nbsp";
    }

    for ($k = 0; $k < ($tmp * 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}

?>
<h1>星星矩形</h1>
<?php
for ($i = 0; $i < $amount; $i++) {

    for ($j = 0; $j < $amount; $j++) {
        if ($i == 0 || $i == ($amount-1)) {
            echo "*";
        } else if ($j == 0 || $j == ($amount-1)) {
            echo "*";
        } else {
            echo "&nbsp";
        }
    }
    echo "<br>";
}
?>
<!-- $j 0123456 
    $i 0*******
       1*     *
       2*     *
       3*     *
       4*     *
       5*     *
       6******* 
    -->
<h1>星星矩形大魔王</h1>
<?php
for ($i = 0; $i < $amount; $i++) {

    for ($j = 0; $j < $amount; $j++) {
        if ($i == 0 || $i == ($amount-1)) {
            echo "*";
        } else if ($j == 0 || $j == ($amount-1 )) {
            echo "*";
        }else if($i==$j || $i+$j==($amount-1)){
            // span行內標籤
            echo "<span style='color:red'>*</span>";
        }
        else{
            echo "&nbsp";
        }
    }
    echo "<br>";
}
?>
<h1>空心正三角形</h1>
<?php
for ($i = 0; $i <= $amount; $i++) {
    for ($j = 0; $j < $amount-$i; $j++) {
        echo "&nbsp";
    }
    $count=$i*2+1;
    for ($k = 0; $k < $count; $k++) {
        if ($k == 0 || $k==$count-1 || $i==$amount) {
            echo"*";
        }else{
            echo "&nbsp";
        }
    }
    echo "<br>";
}
?>
<h1>星星正三角形</h1>
<?php
// 第1排決定共幾排星星
for ($i = 0; $i < $amount; $i++) {
    //  第2排決定每排打幾個空排
    for ($j = 0; $j < (($amount-1) - $i); $j++) {
        echo "&nbsp";
    }
    // 第3排決定每排打幾個星星
    for ($k = 0; $k < ($i * 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>