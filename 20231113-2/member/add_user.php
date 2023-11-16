<?php
session_start();
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
$acc=htmlspecialchars(trim($_POST['acc']));
$pw=htmlspecialchars(trim($_POST['pw']));
$name=htmlspecialchars(trim($_POST['name']));
$email=htmlspecialchars(trim($_POST['email']));
$address=htmlspecialchars(trim($_POST['address']));
$checksql="select * from `user` where `acc`='$acc' || `email`='$email'";

$checkuser=$pdo->query($checksql)->fetchColumn();

if ($checkuser) {
    header("location:reg.php?error=已有重複帳戶或電子郵件註冊帳號，請輸入其他資料");
}else{
$sql="insert into `user`(`acc`,`pw`,`name`,`email`,`address`)
                   values('{$acc}','{$pw}','{$name}','{$email}','{$address}')" ;
$pdo->exec($sql);

header("location:index.php");
}