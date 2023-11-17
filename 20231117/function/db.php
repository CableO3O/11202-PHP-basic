<?php
function all($data_sheet = null, $where = '',$other='')
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
            $sql .=" $other";
        // fetchAll(PDO::FETCH_ASSOC)讓出來的資料只有標籤
        // fetchAll(PDO::FETCH_NUM)讓出來的資料只有索引

        $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
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

$rows = all('students',['dept'=>'1'],"order by id desc");

dd($rows);
