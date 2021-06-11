<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
//Global Imports
$blogId = $_GET['blog'];
$checkAcc = 'SELECT * FROM `blog` WHERE `blogUniqueId`="' . $blogId . '" and `userId`="' . $_SESSION['employerId'] . '"';
$checkAcc = mysqli_query($conn5, $checkAcc);
if (mysqli_num_rows($checkAcc)==0) {
    header("Location: /");
}
$sql1 = 'UPDATE `blog` SET `status`="Delete" WHERE `blogUniqueId`="' . $blogId . '"';
$sql1 = mysqli_query($conn5, $sql1);
header("Location: /employer/blog/");
