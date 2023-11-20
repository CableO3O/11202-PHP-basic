<?php
//          選擇資料表         條件                                變化欄位
$up=update("students",['dept'=>2,'status_code'=>'001'],['dept'=>'99','name'=>'張明珠']);

dd($up);

function update($table,$id,$cols){
    include "./include/connect.php";
    $sql="update `$table` set ";

    if (!empty($cols)) {
        foreach($cols as $col=>$value){
            $tmp[]="`$col`='$value'";
        }
    }else{
        echo "錯誤:缺少要編輯的欄位資料陣列";
    }

    $sql .= join(",",$tmp);
    $tmp=[];
    if (is_array($id)) {
        include "./include/foreach_id.php";

        $sql .=" where " .join(" && ", $tmp);
    }

    else if(is_numeric($id)) {
        $sql .=" where `id`='$id'";
    }else{
        echo "錯誤:參數的資料型態必須是數字或陣列";
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