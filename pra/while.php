<?php
$i=1;
$sum=0;
while ($i <= 100) {
    echo '當$i='.$i.'時,';
    echo '$sum+$i='.$sum+$i;
    echo '<br>';
    $sum+=$i;
    $i++;   
}
?>
