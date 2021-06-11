<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
//Global Imports

$email = $_POST['email'];

$uploadEmail = "INSERT INTO `corporate_employer_list`( `email`, `uploadedDate`) VALUES ('" . $email . "','" . date("Y/m/d") . "')";
$uploadEmail = mysqli_query($conn4, $uploadEmail);
?>
