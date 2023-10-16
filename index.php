<?php
require "fonksiyon.php";
$uri =$_SERVER["REQUEST_URI"];
if($uri=="/"){
    require "controllers/index.php";
}
elseif($uri=="/about.php"){
    require "controllers/about.php";
}
else if($uri=="/contact"){
    require "controllers/contact.php";
}
?>