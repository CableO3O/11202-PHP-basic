<h2>利用陣列產生威力彩</h2>

<?php
// $num = [];
// for ($i = 0; $i < 6; $i++) {
//     $tmp = rand(1, 38);
//     if ( !in_array($tmp, $num)) {
//         $num[] = $tmp;
//     } 
// }

// foreach ($num as $n) {
//     echo $n . ",";
// }
$num = [];
while(count($num)<6){
    $tmp = rand(1, 38);
    if ( !in_array($tmp, $num)) {
        $num[] = $tmp;
    } 
}

foreach ($num as $n) {
    echo $n . ",";
}
