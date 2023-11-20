<?php
//              選擇資料表    欄位新增內容                             
$insert=insert("dept",['code'=>'507','name'=>'圖書館系']);

dd($insert);

function insert($table,$values){
    $dsn = 'mysql:host=localhost;charset=utf8;dbname=school';
    $pdo = new PDO($dsn, 'root', '');
    $sql="insert into `$table`";

    if (!empty($values)) {
        
        $cols ="(`" .join("`,`",array_keys($values))."`)";
        $vals ="('" .join("','",$values)."')";
        $sql=$sql . $cols ." values ".$vals;

        }
    else{
        echo "錯誤:缺少新增的欄位資料陣列";
    }

    return $pdo->exec($sql);
}


function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}