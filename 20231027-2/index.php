<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入檢查</title>
</head>
<body>    
    <?php
          if (isset($_GET["m"])) {
            echo "<span style='color:red'>" . $_GET["m"] . "</span>";
        }
        if(isset($_GET["login"])&&$_GET["login"]==1){
            echo "你已成功登入，歡迎你";
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