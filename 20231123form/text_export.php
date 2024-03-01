<?php
include_once "db_export.php";
if (!empty($_POST)) {
    $rows = all("20240301", "where `年別` in ('" . join("','", $_POST['select']) . "')");
    $filename = date("Ymd") . rand(100000000, 999999999);
    $file = fopen("./doc/{$filename}.csv", 'w+');
    fwrite($file, "\xEF\xBB\xBF");
    $chk = false;
    foreach ($rows as $row) {
        if (!$chk) {
            $cols = array_keys($row);
            fwrite($file, join(",", $cols) . "\r\n");
            $chk = true;
        }
        fwrite($file, join(",", $row) . "\r\n");
    }
    fclose($file);
    echo "<a href='./doc/{$filename}.csv' download>檔案已匯出,請點此連結下載</a>";
}
?>
<style>
    table {
        border-collapse: collapse;
        margin: auto;
    }

    td {
        border: 1px solid black;
        padding: 5px 12px;
    }

    th {
        border: 1px solid white;
        background-color: black;
        color: white;
        padding: 5px 12px;
    }
</style>
<form action="?" method="post">
    <input type="submit" value="匯出選擇的資料">
    <table>
        <tr>
            <th><input type="checkbox" name="" id="select">勾選</th>
            <th>年別</th>
            <th>公園綠地－男</th>
            <th>公園綠地－女</th>
            <th>海洋－男</th>
            <th>海洋－女</th>
            <th>樹葬－男</th>
            <th>樹葬－女</th>
        </tr>
        <?php
        $rows = all('20240301');
        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>";
            echo "<input type='checkbox' name='select[]' value='{$row['年別']}'>";
            echo "</td>";
            foreach ($row as $value) {
                echo "<td>";
                echo $value;
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</form>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
$("#select").on("change",function(){
    if ($(this).prop('checked')) {
        $("input[name='select[]']").prop('checked',true);
    }else{
        $("input[name='select[]']").prop('checked',false);
    }
})
</script>