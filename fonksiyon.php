<?php
function dd($deger){
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";
    die();
 }
 function urlIs($deger){
    return $_SERVER["REQUEST_URI"]==$deger;
 }
 ?>