<?php
date_default_timezone_set('Asia/Tokyo');
$time = intval(date('H'));
if(4 <= $time && $time <= 10){
    echo "今",$time,"台です。 おはようございます";
}elseif(10 <= $time && $time <= 19){
    echo "今",$time,"台です。 こんにちは";
}else{
    echo "今",$time,"台です。 こんばんは";
}
?>