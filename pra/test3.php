<!DOCTYPE html>
<html>
<head>
    <title>99乘法表</title>
    <style>
        table,tr,td,th{
            border: 1px black solid;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h2>99乘法表</h2>
    <table >
        <tr>
            <th>
            <?php
            for ($i = 1; $i <= 9; $i++) {
                echo "<th>$i</th>";
            }
            ?>
            </th>
        </tr>
        <?php
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            echo "<th>$i</th>"; 
            for ($j = 1; $j <= 9; $j++) {
                $result = $i * $j;
                echo "<td>$i x $j = $result </td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>