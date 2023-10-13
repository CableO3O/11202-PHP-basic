<style>
    table,
    tr,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }

    tr,
    td {
        width: 40px;
        height: 40px;
    }
</style>
<h1>奇怪的99乘法表</h1>
<?php
echo '<table>';
for ($i = 0; $i < 10; $i++) {
    if ($i == 0) {
        echo "<tr style='background:#eee'>";
    } else {
        echo "<tr>";
    }
    for ($j = 0; $j < 10; $j++) {
        if ($j == 0) {
            echo "<td style='background:#eee'>";
        } else {
            echo "<td>";
        }
        if ($i == 0 && $j == 0) {
            echo '';
        } else
            if ($i == 0) {
            echo $j;
        } else
            if ($j == 0) {
            echo $i;
        }else if($i<$j){
            echo '';
        } else {
            echo $i * $j;
        }
        echo '</td>';
    }
    echo '</tr>';
}
?>
</table>