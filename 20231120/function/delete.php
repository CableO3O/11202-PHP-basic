<?php
//              選擇資料表    刪除條件                             
$delete=delete("dept",['code'=>'507']);

dd($delete);

function delete($table,$id){
    $dsn = 'mysql:host=localhost;charset=utf8;dbname=school';
    $pdo = new PDO($dsn, 'root', '');
    $sql="delete from `$table` where ";

    if (is_array($id)) {
        foreach($id as $col=>$value){
        $tmp[]="`$col`='$value'";}

        $sql .=join(" && ", $tmp);
    }

    else if(is_numeric($id)) {
        $sql .="`id`='$id'";
    }else{
        echo "錯誤:刪除的資料型態必須是數字或陣列";
    }
    echo $sql;
    return $pdo->exec($sql);
}


function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}