<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
//Global Imports

?>
<?php
if (isset($_POST['publish'])) {
    $blogTitle = mysqli_escape_string($conn5, $_POST['blogTitle']);
    $category = mysqli_escape_string($conn5, $_POST['category']);
    $metaDescription = mysqli_escape_string($conn5, $_POST['metaDescription']);
    $metaKeyword = mysqli_escape_string($conn5, $_POST['metaKeyword']);
    $blogContent = mysqli_escape_string($conn5, $_POST['blogContent']);
    $a = true;

    while ($a == true) {
        $uniqueProductId = uniqid(md5(time()));
        $checkUniqueIdExists = "SELECT id FROM `blog` where `blogUniqueId`='" . $uniqueProductId . "'";
        $checkUniqueIdExists = mysqli_query($conn5, $checkUniqueIdExists);
        if (mysqli_num_rows($checkUniqueIdExists) != 0) {
            $a = true;
        } else {
            $a = false;
        }
    }

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
    $sqlImageUpload = "INSERT INTO `blog`(`blogTitle`, `category`, `blogContent`, `coverPhoto`, `metaDescription`, `metaKeyword`, `userId`, `createdDate`, `status`,`blogUniqueId`) VALUES ('" . $blogTitle . "','" . $category . "','" . $blogContent . "','" . $newFileName . "','" . $metaDescription . "','" . $metaKeyword . "','" . $_SESSION['employerId'] . "','" . date("Y/m/d") . "','On','" . $uniqueProductId . "')";
    $sqlImageUpload = mysqli_query($conn5, $sqlImageUpload);
    move_uploaded_file($imageTemp, $_SERVER['DOCUMENT_ROOT'] . $targetDirectory . $newFileName);
    compress_image($targetDirectory . $newFileName, $targetDirectory, 20, $newFileName);

    $sqlDirector = "SELECT id FROM `blog` WHERE `blogUniqueId`='" . $uniqueProductId . "'";
    $sqlDirector = mysqli_query($conn5, $sqlDirector);
    $sqlDirectorData = mysqli_fetch_assoc($sqlDirector);
    header("Location: /blog/" . $sqlDirectorData['id'] . "");
} else {
    header("Location: index.php");
}
function compress_image($source_url, $destination_url, $quality, $newFileName)
{
    $destination_url = substr($destination_url, 1);
    $info = getimagesize($_SERVER['DOCUMENT_ROOT'] . $source_url);
    if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($_SERVER['DOCUMENT_ROOT'] . $source_url);
    elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] . $source_url);
    imagejpeg($image, $_SERVER['DOCUMENT_ROOT'] . $destination_url . $newFileName, $quality);
}
?>