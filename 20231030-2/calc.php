<?php
date_default_timezone_set("Asia/Taipei");
if ($_POST["account"] == "admin" && $_POST["password"] == "1234"){

   setcookie("login","cable",time()+300);

            header("location:log.php");
        } 
        else 
        {
            setcookie("error","登入失敗，請輸入帳號密碼",time()+5);
            header("location:index.php");
        }
