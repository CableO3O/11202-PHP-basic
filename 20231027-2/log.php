<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_GET['login']==1) {
        echo"<h1>登入成功<h1>";
        echo "<a href='index.php?login=1'>回登入頁</a>";
    }else{
        header("location:index.php");
    }
    ?>
</body>
</html>