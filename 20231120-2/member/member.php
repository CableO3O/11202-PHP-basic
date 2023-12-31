<?php include_once "./include/connect.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <header class="nav">
        <div class="nav-item col-4"></div>
        <div class="nav-item col-4">
            <ul class='d-flex justify-content-evenly'>
                <li>1</li>
                <li>2</li>
                <li>3</li>
            </ul>
        </div>
        <div class="nav-item col-4">
            <?php
            if (isset($_SESSION['user'])) {
                echo "歡迎光臨" . $_SESSION['user'];
                echo "<a href='./api/logout.php' class='btn btn-info mx-2'>登出</a>";
                echo "<a href='member.php' class='btn btn-success mx-2'>會員中心</a>";
            } else {
            ?>
                <a href="reg.php" class="btn btn-primary mx-2">註冊</a>
                <a href="login_form.php" class="btn btn-success mx-2">登入</a>
            <?php
            }
            ?>
        </div>
    </header>
    <div class="container">
        <h1>使用者資料</h1>
        <?php
        if (isset($_SESSION['msg'])) {
            echo "<div class='alert alert-warning text-center col-6 m-auto'>";
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            echo "</div>";
        }


        // $sql = "select * from user where `acc`='{$_SESSION['user']}'";
        // $user = $pdo->query($sql)->fetch();
        $user =find('user',['acc'=>"{$_SESSION['user']}"]);
        ?>
        <form action="./api/update.php" method="post" class="col-4 m-auto">
            <div class="input-group my-1">
                <label class="col-4 input-group-text">帳號:</label>
                <input class="form-control" type="text" name="acc" id="acc" value="<?= $user['acc']; ?>">
            </div>
            <div class="input-group my-1">
                <label class="col-4 input-group-text">密碼:</label>
                <input class="form-control" type="text" name="pw" id="pw" value="<?= $user['pw']; ?>">
            </div>
            <div class="input-group my-1">
                <label class="col-4 input-group-text">電子郵件:</label>
                <input class="form-control" type="text" name="email" id="email" value="<?= $user['email']; ?>">
            </div>
            <div class="input-group my-1">
                <label class="col-4 input-group-text">姓名:</label>
                <input class="form-control" type="text" name="name" id="name" value="<?= $user['name']; ?>">
            </div>
            <div class="input-group my-1">
                <label class="col-4 input-group-text">居住地:</label>
                <input class="form-control" type="text" name="address" id="address" value="<?= $user['address']; ?>">
            </div>

            <div>
                <input type="hidden" name="id" id="id" value="<?= $user['id']; ?>">
                <input class="btn btn-primary mx-3" type="submit" value="更新">
                <input class="btn btn-warning mx-3" type="reset" value="重置">
            </div>
        </form>
        <form action="./api/del_user.php" method='post'>
            <input type="hidden" name="id" value="<?= $user['id']; ?>">
            <input class="btn btn-danger mx-2" type="submit" value="讓我消失吧">
        </form>
    </div>
</body>

</html>