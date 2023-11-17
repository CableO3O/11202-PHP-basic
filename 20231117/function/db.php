<?php
function all($data_sheet = null, $where = '')
{   
    $dsn = 'mysql:host=localhost;charset=utf8;dbname=school';
    $pdo = new PDO($dsn, 'root', '');
    $sql="select * from `$data_sheet`";

    if (isset($data_sheet) && !empty($data_sheet)) {

        if (is_array($where)) {
            
            if (!empty($where)) {
                foreach ($where as $col => $value) {
                    $tmp[]="`$col`='$value'";
                }
                $sql .=" where ".join(" && ",$tmp);
            }


        } else {
            $sql .="  $where";
        }
        $rows = $pdo->query($sql)->fetchAll();
        return $rows;
    } else {
        echo "錯誤:沒有指定的資料表名稱";
    }
}
function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$rows = all('students', "");

dd($rows);
