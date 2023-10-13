<style>
    table,tr,td{
        border: 3px solid black;
        border-collapse: collapse;
    }
</style>
<h2>九九乘法表</h2>
<?php
echo '<table>';

for ($i = 1; $i <= 9; $i++) {
    
    for ($j = 1; $j <= 9; $j++) {
        echo '<td>';
        echo  $i . 'X' . $j . '=' . ($j * $i) ;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>