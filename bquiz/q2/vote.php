<?php include_once "db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我要投票</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>
    <main class="container">
        <?php
        $ques = $Que->find($_GET['id']);
        ?>
        <fieldset>
            <legend>目前位置 : 首頁 > 問卷調查 ><?= $ques['text']; ?></legend>
            <form action="" method="post">
                <h2 class="text-center"><?= $ques['text']; ?></h2>
                <?php
                $allques = $Que->all(['subject_id' => $_GET['id']]);
                foreach ($allques as $allidx => $allque) {
                ?>
                    <ul class="list-group col-6 mx-auto">
                        <li class="list-group-item list-group-item-action">
                            <input type="radio" name="allque" id="" value="<?= $allque['id']; ?>"><?= $allque['text']; ?>
                        </li>
                    </ul>
                <?php
                }
                ?>
                <input type="submit" value="我要投票" class="btn btn-primary d-block mx-auto mt-3">
            </form>
        </fieldset>
    </main>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>

</html>