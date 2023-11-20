<?php
include_once "./include/connect.php";
$acc = htmlspecialchars(trim($_POST['acc']));
$pw = htmlspecialchars(trim($_POST['pw']));
$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$address = htmlspecialchars(trim($_POST['address']));
$id = htmlspecialchars(trim($_POST['id']));
$sql="update `user` set `acc`='{$acc}',
                        `pw`='{$pw}',
                        `name`='{$name}',
                        `email`='{$email}',
                        `address`='{$address}'
                  where `id`='{$id}'";
if($pdo->exec($sql)>0){
    $_SESSION['msg']="更新成功";
}else{
    $_SESSION['msg']="資料無異動";
}
header("location:member.php");
