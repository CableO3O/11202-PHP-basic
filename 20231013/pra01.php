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
for ($i = 0; $i <= 5; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


?>
<h1>星星倒直角三角形</h1>
<?php
for ($i = 4; $i >= 0; $i--) {
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
    }
</style>
<h1>星星正三角形</h1>
<?php
// 第1排決定共幾排星星
for ($i = 0; $i < 5; $i++) {
    //  第2排決定每排打幾個空排
    for ($j = 0; $j < (4 - $i); $j++) {
        echo "&nbsp";
    }
    // 第3排決定每排打幾個星星
    for ($k = 0; $k < ($i * 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>
<h1>星星倒三角形</h1>
<?php
// 第1排決定共幾排星星
for ($i = 4; $i >= 0; $i--) {
    //  第2排決定每排打幾個空排
    for ($j = 0; $j < (4 - $i); $j++) {
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

for ($i = 0; $i < 9; $i++) {

    if ($i <= 4) {
        $tmp = $i;
    } else {
        $tmp--;
    }

    for ($j = 0; $j < (4 - $tmp); $j++) {
        echo "&nbsp";
    }

    for ($k = 0; $k < ($tmp * 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}

?>