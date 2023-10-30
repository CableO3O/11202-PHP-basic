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
    if (isset($_SESSION['login'])&&!empty($_SESSION['login'])) {
        echo"<h1>登入成功<h1>";
        echo "<a href='index.php'>回登入頁</a>";
        echo "<a href='logout.php'>登出</a>";

    }else{
        $_SESSION['error']="沒有登入相關驗證，非法登入";
        header("location:index.php");
    }
    ?>
</body>
</html>