<?php
$num = 0;
$counter = 0;
while($num < 40){
    $rand = rand(1,6); //サイコロ
    $num += $rand; //出た目を足していく
    $counter++; //ループ回数
    if($num < 40){
        echo $counter,"回目=",$rand; //n回目の表示
        echo '</br>';
    } else{
        echo $counter,"回目=",$rand;
        echo '</br>';
        echo "合計",$counter,"回でゴールしました"; //合計４０を超えた際の表示
    }
}
?>