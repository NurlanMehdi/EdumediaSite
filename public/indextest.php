<?php

$a = 'hello & world';
$word = explode(' ',$a);
$newtring = '';
foreach ($word as $w){
    $newtring = $newtring . $w;
}
$newtring = str_replace("&", "",$newtring);
var_dump($newtring);
?>
