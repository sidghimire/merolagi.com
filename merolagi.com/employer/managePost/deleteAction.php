<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
//Global Imports
$productId = $_GET['productId'];
if (isset($_POST['trashProduct'])) {
    $sql = "UPDATE `product_info` SET `display`='off' WHERE `productUniqueId`='" . $productId . "'";
    $sql = mysqli_query($conn2, $sql);
    header("Location: index.php");
}
if (isset($_POST['trashService'])) {
    $sql = "UPDATE `service_info` SET `display`='off' WHERE `productUniqueId`='" . $productId . "'";
    $sql = mysqli_query($conn2, $sql);
    header("Location: index.php");
}
if (isset($_POST['trashEstate'])) {
    $sql = "UPDATE `realestate_info` SET `display`='off' WHERE `productUniqueId`='" . $productId . "'";
    $sql = mysqli_query($conn2, $sql);
    header("Location: index.php");
}
