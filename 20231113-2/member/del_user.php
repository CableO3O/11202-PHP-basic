<?php

include_once "./include/connect.php";

$sql="delete from `user` where `id`='{$_POST['id']}'";


$pdo->exec($sql);

unset($_SESSION['user']);

header("location:index.php");