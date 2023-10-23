<?php
$sum=0;
for ($i=1; $i<= 100 ; $i++) { 
    echo '當$i='.$i.','.'$sum+$i='.$sum+$i;
    $sum+=$i;
    echo '<br>';
}
echo "1加到100的答案是".$sum;