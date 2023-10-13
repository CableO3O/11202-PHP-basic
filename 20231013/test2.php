<style>
    table,
    tr,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
</style>
<h2>九九乘法表</h2>

<table>
    <tr>
        <td>
        </td>
        <?php
        for ($i = 1; $i <= 9; $i++) {
            echo '<td>';
            echo $i;
            echo '</td>';
        }
        ?>
    </tr>
    <?php

    for ($i = 1; $i <= 9; $i++) {
        echo '<tr>';
        echo '<td>' . $i . '</td>';
        for ($j = 1; $j <= 9; $j++) {

            echo '<td>';
            echo $j * $i;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>