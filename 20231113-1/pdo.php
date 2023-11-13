<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');  

// $sql="select * from students";
// $rows=$pdo->query($sql)->fetchAll();


// echo "<pre>";
// print_r($rows[0][2]);
// print_r($rows[0]['parents']);
// echo "</pre>";

// $sql="insert into `classes`(`code`,`name`,`tutor`) values('111','一年十一班','安安安');";
// $pdo->query($sql);

// $sql="update `classes` set `code`='110',`name`='一年十班',`tutor`='哈哈哈' where `id`='10'";
// $pdo->query($sql);


// $sql="delete from `classes` where `id`='11'";
// $pdo->query($sql);

// 查資料用query
// 改變資料(新增、變更、刪除)用exec

$sql="delete from `classes` where `id`='10'";
$pdo->exec($sql);