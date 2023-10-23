<h2>字串取代</h2>

將”aaddw1123”改成”*********”
<br>
<?php
$s = "aaddw112bgsaetrh3";
$t = str_replace(["a", "w", 1], "*", $s);
echo $t;
echo "<br>";
echo str_repeat("*", mb_strlen($s));
?>


<h2>字串分割</h2>

將”this,is,a,book”依”,”切割後成為陣列

<?php
$a = "this,is,a,book";
$b = explode(",", $a);
echo "<pre>";
print_r($b);
echo "</pre>";

?>


<h2>字串組合</h2>

將上例陣列重新組合成“this is a book”
<br>

<?php
echo join(" ", $b);
?>


<h2>子字串取用</h2>

將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”
<br>
<?php
$c="The reason why a great man is great is that he resolves to be a great man";
echo mb_substr($c,0,10);
echo "...";
echo "<br>";

$cc="今天天氣有點糟糕真是不太好";
echo mb_substr($cc,0,10);
echo "...";
echo "<br>";

?>
<h2>尋找字串與HTML、css整合應用</h2>
<ul>
    <li>給定一個句子，將指定的關鍵字放大</li>
    <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
    <li>請將上句中的 “程式設計” 放大字型或變色.</li>
</ul>
<?php
$e="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$f="程式設計";
echo str_replace($f,"<span style='font-size:20px;color:red'>$f</span>",$e);

?>