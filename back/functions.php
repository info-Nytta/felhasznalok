<?php
function salt() {
    $cars="abcdefghijklmnopqrstuvWxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789./";
    $len=16;
    $salt="";
    for ($i=0; $i<$len; $i++)
        $salt.=$cars[rand(0,strlen($cars)-1)];
    return $salt;
}
?>