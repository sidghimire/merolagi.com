<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
//Global Imports

$_SESSION['userId']=null;
$_SESSION['userEmail']=null;
header("Location: /frontend/signin");

?>