<?php
if ($_POST["account"] == "admin" && $_POST["password"] == "1234"){
            header("location:log.php?login=1");
        } 
        else 
        {
            header("location:index.php?m=登入失敗，請輸入帳號密碼");
        }
