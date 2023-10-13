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
for($i=0;$i<=5;$i++){
    for($j=0;$j<$i;$j++){
        echo"*";
    }
    echo"<br>";
}


?>
<h1>星星倒直角三角形</h1>
<?php
for($i=4;$i>=0;$i--){
    for($j=0;$j<=$i;$j++){
        echo"*";
    }
    echo"<br>";
}