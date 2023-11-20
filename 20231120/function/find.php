<?php
// 條件搜索但只會有一筆資料
$row=find('students',['dept'=>'3']);

dd($row);

function pdo($db){
    $dsn = "mysql:host=localhost;charset=utf8;dbname=$db";
    $pdo = new PDO($dsn, 'root', '');
    return $pdo;

}

function find($table,$id){
    $pdo = pdo('school');
    $sql="select * from `$table`";

    if (is_array($id)) {
        include "./include/foreach_id.php";

        $sql .=" where " .join(" && ", $tmp);
    }

    else if(is_numeric($id)) {
        $sql .=" where `id`='$id'";
    }else{
        echo "錯誤:參數的資料型態必須是數字或陣列";
    }

    $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $row;

}


function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

