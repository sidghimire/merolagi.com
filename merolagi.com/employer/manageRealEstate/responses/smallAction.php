<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
include $_SERVER['DOCUMENT_ROOT'] . "/res/important/employerSession.php";
//Global Imports

if (isset($_POST['completed'])) {
    $productId = $_GET['productId'];
    $transactionId = $_GET['transactionId'];

    $currency = mysqli_escape_string($conn3, $_POST['currency']);
    $price = mysqli_escape_string($conn3, $_POST['price']);
    $comment = mysqli_escape_string($conn3, $_POST['comment']);

    $addTransaction = "INSERT INTO `transaction_realestate_complete`( `currency`, `price`, `comments`, `transactionId`, `transactionDate`) VALUES ('" . $currency . "','" . $price . "','" . $comment . "','" . $transactionId . "','" . date("Y/m/d") . "')";
    $addTransaction = mysqli_query($conn3, $addTransaction);
    header("Location: index.php?productId=".$productId);
}
