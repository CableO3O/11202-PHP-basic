<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_COOKIE['login'])&&!empty($_COOKIE['login'])) {
        echo"<h1>登入成功<h1>";
        echo "<a href='index.php'>回登入頁</a>";
        echo "<a href='logout.php'>登出</a>";

    }else{
        setcookie("error","沒有登入相關驗證，非法登入".time());
        header("location:index.php");
    }
    ?>
</body>
</html>