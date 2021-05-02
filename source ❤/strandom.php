<?php

// فونكشن لسترينق عشوائي
function random($len){

    $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $total = strlen($char)-1;
    $text = "";

    for ($i=0; $i<$len; $i++){
        $text = $text.$char[rand(0, $total)];
    }
    return $text;
}

$string = random(3)."_Fz"; // عدد الاسترينق 

?>