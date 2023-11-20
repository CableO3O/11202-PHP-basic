<?php
// 條件搜索但只會有一筆資料
$row=find('students',['dept'=>'1','graduate_at'=>'10']);

dd($row);

function find($table,$id){
    $dsn = 'mysql:host=localhost;charset=utf8;dbname=school';
    $pdo = new PDO($dsn, 'root', '');
    $sql="select * from `$table`";

    if (is_array($id)) {
        foreach($id as $col=>$value){
        $tmp[]="`$col`='$value'";}

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

