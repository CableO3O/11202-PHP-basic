<!DOCTYPE html>
<html>
<head>
    <title>99乘法表</title>
</head>
<body>
    <h2>99乘法表</h2>
    <table border="1">
        <tr>
            <th></th>
            <?php
            // 打印表头行
            for ($i = 1; $i <= 9; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
        <?php
        // 打印表格内容
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            echo "<th>$i</th>"; // 行头
            for ($j = 1; $j <= 9; $j++) {
                $result = $i * $j;
                echo "<td>$result</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>