<?php
session_start();

if ($_POST["account"] == "admin" && $_POST["password"] == "1234"){

    $_SESSION["login"]=$_POST["account"];

            header("location:log.php");
        } 
        else 
        {
            $_SESSION["error"]="登入失敗，請輸入帳號密碼";
            header("location:index.php");
        }
