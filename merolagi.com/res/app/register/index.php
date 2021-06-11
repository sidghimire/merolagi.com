<?php
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
$json = file_get_contents('php://input');
 
$obj = json_decode($json,true);
$email = $obj['email'];
$password = $obj['password'];


$query = "INSERT INTO `employer_login`( `email`, `password`) VALUES ('".$email."','".$password."')";
$query = mysqli_query($conn1, $query);
$arr = array('result' => 'ok');
echo json_encode($arr);
