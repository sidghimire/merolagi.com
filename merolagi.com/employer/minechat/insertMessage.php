<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
include $_SERVER['DOCUMENT_ROOT'] . "/res/important/employerSession.php";
//Global Imports

$message = $_POST['message'];
$sentBy = $_POST['sentBy'];
$sendTo = $_POST['sendTo'];
$transactionId = $_POST['transactionId'];
$sqlInsertMessage = "INSERT INTO `employer_message`(`transactionId`, `sentBy`, `sentTo`, `message`, `createdTime`, `createdDate`) VALUES ('" . $transactionId . "','" . $sentBy . "','" . $sendTo . "','" . $message . "','" . date("h:i:s") . "','" . date("d/M/Y/D") . "')";
$sqlInsertMessage = mysqli_query($conn5, $sqlInsertMessage);
if($sqlInsertMessage){
    echo "success";
}else{
    echo "Fail";
}