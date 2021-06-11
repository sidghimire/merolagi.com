<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
//Global Imports
$image = $_POST['image'];

$deleteImg = "DELETE FROM `realestate_images` WHERE imageName='" . $image . "'";
$deleteImg = mysqli_query($conn2, $deleteImg);
unlink("/res/database/estateImages/". $image);