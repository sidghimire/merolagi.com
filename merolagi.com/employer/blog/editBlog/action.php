<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
//Global Imports
$getId = $_GET['blog'];
$checkAcc = 'SELECT * FROM `blog` WHERE `blogUniqueId`="' . $getId . '" and `userId`="' . $_SESSION['employerId'] . '"';
$checkAcc = mysqli_query($conn5, $checkAcc);
if (mysqli_num_rows($checkAcc)==0) {
    header("Location: /");
}
?>

<?php
if (isset($_POST['publish'])) {
    $blogId = $_GET['blog'];
    $blogTitle = mysqli_escape_string($conn5, $_POST['blogTitle']);
    $category = mysqli_escape_string($conn5, $_POST['category']);
    $metaDescription = mysqli_escape_string($conn5, $_POST['metaDescription']);
    $metaKeyword = mysqli_escape_string($conn5, $_POST['metaKeyword']);
    $blogContent = mysqli_escape_string($conn5, $_POST['blogContent']);
    if ($_FILES['coverPhoto']['name'] != "") {
        $targetDirectory = "/res/database/blog/";
        $imageName = $_FILES['coverPhoto']['name'];
        $imageSize = $_FILES['coverPhoto']['size'];
        $imageTemp = $_FILES['coverPhoto']['tmp_name'];
        $a = true;

        $selectNameImage = $imageName;
        $extensionTemp = explode(".", $selectNameImage);
        $extension = end($extensionTemp);

        while ($a == true) {
            $uniqueImageId = uniqid(md5(time()));
            $checkUniqueImageExists = "SELECT id FROM `blog` where `coverPhoto`='" . $uniqueImageId . "'";
            $checkUniqueImageExists = mysqli_query($conn5, $checkUniqueImageExists);
            if (mysqli_num_rows($checkUniqueImageExists) != 0) {
                $a = true;
            } else {
                $a = false;
            }
        }
        $newFileName = $uniqueImageId . "." . $extension;
        $sqlImageUpload = "UPDATE `blog` SET `blogTitle`='{$blogTitle}',`category`='{$category}',`blogContent`='{$blogContent}',`coverPhoto`='{$newFileName}',`metaDescription`='{$metaDescription}',`metaKeyword`='{$metaKeyword}' WHERE `blogUniqueId`='" . $blogId . "'";
        $sqlImageUpload = mysqli_query($conn5, $sqlImageUpload);
        move_uploaded_file($imageTemp, $_SERVER['DOCUMENT_ROOT'] . $targetDirectory . $newFileName);
        compress_image($targetDirectory . $newFileName, $targetDirectory, 20, $newFileName);
    } else {
        $sqlImageUpload = "UPDATE `blog` SET `blogTitle`='{$blogTitle}',`category`='{$category}',`blogContent`='{$blogContent}',`metaDescription`='{$metaDescription}',`metaKeyword`='{$metaKeyword}' WHERE `blogUniqueId`='" . $blogId . "'";
        $sqlImageUpload = mysqli_query($conn5, $sqlImageUpload);
    }
    $getId = "SELECT id FROM `blog` WHERE `blogUniqueId`='{$blogId}'";
    $getId = mysqli_query($conn5, $getId);
    $getId = mysqli_fetch_assoc($getId);
    header("Location: /blog/" . $getId['id'] . "");
} else {
    header("Location: index.php");
}
function compress_image($source_url, $destination_url, $quality, $newFileName)
{
    $destination_url = substr($destination_url, 1);
    $info = getimagesize($_SERVER['DOCUMENT_ROOT'] . $source_url);
    if ($info['mime'] == 'image/jpeg') {
        $image = imagecreatefromjpeg($_SERVER['DOCUMENT_ROOT'] . $source_url);
    } elseif ($info['mime'] == 'image/png') {
        $image = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] . $source_url);
    } elseif ($info['mime'] == 'image/jpg') {
        $image = imagecreatefromjpeg($_SERVER['DOCUMENT_ROOT'] . $source_url);
    }
    imagejpeg($image, $_SERVER['DOCUMENT_ROOT'] . $destination_url . $newFileName, $quality);
}
?>