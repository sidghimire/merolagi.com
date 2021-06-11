<?php
//Global Imports

include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
//Global Imports

$_SESSION['employerId']=null;
$_SESSION['employerEmail']=null;
    unset($_COOKIE['cookieEmail']);
    unset($_COOKIE['cookieId']);
setcookie("cookieEmail", "", time()-(86400*30*365),"/");

setcookie("cookieId", "", time()-(86400*30*365),"/");


header("Location: /login");
?>