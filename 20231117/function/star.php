<h1>星星函式</h1>
<style>
    * {
        font-family: 'Courier New', Courier, monospace;
        /* line-height:改行高 */
        /* line-height: 10px; */
    }
</style>
<?php
stars('正三角形', 10);
stars('菱形', 10);
stars('矩形', 10);
stars('矩形對角線', 10);
function stars($sharp, $size)
{
    switch ($sharp) {
        case '正三角形':
            equilateral_triangle($size);
            break;
        case '菱形':
            diamond($size);
            break;
        case '矩形':
            rectangle($size);
            break;
        case '矩形對角線':
            rectangle_cross($size);
            break;
    }
}
function equilateral_triangle($size)
{
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < (($size - 1) - $i); $j++) {
            echo "&nbsp";
        }
        for ($k = 0; $k < ($i * 2 + 1); $k++) {
            echo "*";
        }
        echo "<br>";
    }
}
function diamond($size)
{
    $mid = floor(($size * 2 - 1) / 2);
    $tmp = 0;
    for ($i = 0; $i < ($size * 2 - 1); $i++) {
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
}
function rectangle($size)
{
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            if ($i == 0 || $i == ($size - 1)) {
                echo "*";
            } else if ($j == 0 || $j == ($size - 1)) {
                echo "*";
            } else {
                echo "&nbsp";
            }
        }
        echo "<br>";
    }
}
function rectangle_cross($size){
for ($i = 0; $i < $size; $i++) {

    for ($j = 0; $j < $size; $j++) {
        if ($i == 0 || $i == ($size-1)) {
            echo "*";
        } else if ($j == 0 || $j == ($size-1 )) {
            echo "*";
        }else if($i==$j || $i+$j==($size-1)){
            // span行內標籤
            echo "<span style='color:red'>*</span>";
        }
        else{
            echo "&nbsp";
        }
    }
    echo "<br>";
}
}
?>