<?php
// $n=30;
// for ($i=1; $i<=$n ; $i=$i+1) { 
//     echo $i;
//     echo',';
// }
$a=98;
$flag=true;
for ($i=2; $i<=($a/2) ; $i++) { 
    ($a % $i);
    if (($a%$i)==0) {
        $flag=false;
        break;
    }
  }
    if ( $flag==true) {
       echo $a.'是質數';
    }
    else{
        echo $a.'不是質數'; 
    }
