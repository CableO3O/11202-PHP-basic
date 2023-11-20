<?php
include_once "../include/connect.php";
$acc=$_POST['acc'];
$pw=$_POST['pw'];
// fetchColumn()直接確認取出的值是否符合
// if($user['acc']==$acc && $user['pw']==$pw){
    // $sql="select count(*) from user where `acc`='$acc' && `pw`='$pw'";
    // $user=$pdo->query($sql)->fetchColumn();

    $res=total('user',['acc'=>$acc,'pw'=>$pw]);
    dd($res);
if($res){
    $_SESSION['user']=$acc;
    header("location:../index.php");
}else{
    header('location:../login_form.php?error=帳號或密碼錯誤');
}