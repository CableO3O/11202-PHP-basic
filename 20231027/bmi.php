<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>計算bmi</title>
</head>

<body>
    <h1>計算bmi</h1>
    <?php
    if (!isset($_GET["bmi"])) {

        if (isset($_GET["m"])) {
            echo "<span style='color:red'>" . $_GET['m'] . "</span>";
        }

    ?>
        <!-- action="calc.php"將資料傳到 calc.php-->
        <form action="calc.php" method="get">
            <div>
                <label for="height">身高(公尺):</label>
                <input type="text" name="height" id="height">
            </div>
            <div>
                <label for="weight">體重(公斤):</label>
                <input type="text" name="weight" id="weight">
            </div>
            <!-- 體重(公斤)/身高(公尺)平方 -->
            <div>
                <input type="submit" value="計算BMI ">
                <input type="reset" value="重置">
            </div>
        </form>
    <?php
    } else {
        echo "身高:" . $_GET["h"] . "公尺";
        echo "<br>";
        echo "體重:" . $_GET["w"] . "公斤";
        echo "<br>";
        echo  "BMI:" . $_GET["bmi"];
    }
    ?>
</body>
</html>