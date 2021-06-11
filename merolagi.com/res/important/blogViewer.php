<?php

$getIp = $_SERVER['REMOTE_ADDR'];

$checkIp = "SELECT * FROM `blog_visitors` WHERE `ip`='" . $getIp . "' and `page`=" . $productId;
$checkIp = mysqli_query($conn5, $checkIp);
if (mysqli_num_rows($checkIp) == 0) {
    $insertIp = "INSERT INTO `blog_visitors`(`page`, `ip`, `createdDate`) VALUES ('" . $productId . "','" . $getIp . "','" . date("Y/m/d") . "')";
    $insertIp = mysqli_query($conn5, $insertIp);
    $addViewer = "UPDATE `blog` SET `visitors`=`visitors`+1 WHERE `id`=" . $productId;
    $addViewer = mysqli_query($conn5, $addViewer);
}

$addViewer = "UPDATE `blog` SET `views`=`views`+1 WHERE `id`=" . $productId;
$addViewer = mysqli_query($conn5, $addViewer);
