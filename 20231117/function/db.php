<?php
$rows=all('students',"where dept='1'");

dd($rows);

function all($data_sheet=null,$where=''){
    $dsn='mysql:host=localhost;charset=utf8;dbname=school';
    $pdo=new PDO($dsn,'root','');
    
    if (isset($data_sheet) && !empty($data_sheet)) {
        $sql="select * from `$data_sheet` $where";
        $rows=$pdo->query($sql)->fetchAll();
        return $rows;
    }else{
        echo "錯誤:沒有指定的資料表名稱";
    }
}
function dd($array){
    echo"<pre>";
    print_r($array);
    echo"</pre>";
}