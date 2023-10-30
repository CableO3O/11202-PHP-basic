<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入檢查</title>
</head>
<body>    
    <?php
        session_start();
          if (isset($_SESSION["error"])) {
            echo "<span style='color:red'>" . $_SESSION["error"] . "</span>";
            unset($_SESSION["error"]);
        }
        if(isset($_SESSION['login'])&&!empty($_SESSION['login'])){
            echo $_SESSION['login']."你已成功登入，歡迎你";
            echo "<a href='logout.php'>登出</a>";
        }else{
    ?>
    <h1>輸入帳號、密碼</h1>
    
    <form action="calc.php" method="post">
        <label for="account">帳號:</label>
        <input type="text" name="account" id="account">
        <br>
        <label for="password">密碼:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="登入">
        <input type="reset" value="重新輸入">
    </form>
<?php 
        }
        ?>
</body>
</html>