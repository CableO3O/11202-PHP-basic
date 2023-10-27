<?php
// $_GET取得傳過來的值
// $_GET是1個陣列後面要用[]
if(!empty($_GET))
{
    if ($_GET["weight"]!=""&&$_GET["height"]!="") 
    {        
        $weight=$_GET["weight"];
        // 簡化寫法
        // $weight=$_GET["weight"]??"沒有體重資料";
    
        $height=$_GET["height"];
        // 簡化寫法
        // $height=$_GET["height"]??"沒有身高資料";
            $bmi=round($weight/($height*$height),2);
            header("location:bmi.php?w=$weight&h=$height&bmi=$bmi");
    }else
    {
        header("location:bmi.php?m=請輸入身高及體重");
    }
}else{
    header("location:bmi.php?m=請輸入身高及體重");
}    

    // echo "身高:".$height."公尺";
    // echo"<br>";
    // echo "體重:".$weight."公斤";
    // echo"<br>";
    // echo  "BMI:".$bmi;
