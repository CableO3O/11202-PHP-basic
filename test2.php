<?php
// $n=30;
// for ($i=1; $i<=$n ; $i=$i+1) { 
//     echo $i;
//     echo',';
// }
// $a=100;
// $j=0;
// $flag=true;
// for ($i=2; $i<=($a/2) ; $i++) { 
//     ($a % $i);
//     if (($a%$i)==0) {
//         $flag=false;
//         break;
//     }
//   }
//     if ( $flag==true) {
//        echo $a.'是質數';
//     }
//     else{
//         echo $a.'不是質數'; 
//     }
    $n=100;
    $count=0;
    for($j=2;$j<=$n;$j++){
        $flag=true;
        
        for($i=2;$i<=($j/2);$i++){
            $count++;
            //echo "$j 除以 $i 餘數 ". ($j % $i);
            if(($j % $i) == 0){
                $flag=false;
              //  echo "<br>";
                break;
            }
            //echo "<br>";
        }
        
        if($flag==true){
            echo $j ;
            echo ",";
        }else{
            //echo $j . "不是質數";
        }
    }
    echo "<br>";
    echo "一共執行了".$count."次的程式內容";