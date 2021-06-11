<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
//Global Imports
?>
<?php
if (isset($_POST['sellBtn'])) {
    $estateTitle = mysqli_escape_string($conn2, $_POST['estateTitle']);
    $category = mysqli_escape_string($conn2, $_POST['category']);
    $estateDescription = mysqli_escape_string($conn2, $_POST['estateDescription']);
    $currency = mysqli_escape_string($conn2, $_POST['currency']);
    $price = mysqli_escape_string($conn2, $_POST['price']);
    $latitude = mysqli_escape_string($conn2, $_POST['latitude']);
    $longitude = mysqli_escape_string($conn2, $_POST['longitude']);
    $address = mysqli_escape_string($conn2, $_POST['address']);
    $phone = mysqli_escape_string($conn2, $_POST['phone']);
    $deadline = mysqli_escape_string($conn2, $_POST['deadline']);
    
    $a = true;
    while ($a == true) {
        $uniqueProductId = uniqid(md5(time()));
        $checkUniqueIdExists = "SELECT id FROM `product_info` where `productUniqueId`='" . $uniqueProductId . "'";
        $checkUniqueIdExistsProduct = mysqli_query($conn2, $checkUniqueIdExists);
        $checkUniqueIdExists = "SELECT id FROM `service_info` where `productUniqueId`='" . $uniqueProductId . "'";
        $checkUniqueIdExistsService = mysqli_query($conn2, $checkUniqueIdExists);
        $checkUniqueIdExists = "SELECT id FROM `realestate_info` where `productUniqueId`='" . $uniqueProductId . "'";
        $checkUniqueIdExistsRealEstate = mysqli_query($conn2, $checkUniqueIdExists);

        if (mysqli_num_rows($checkUniqueIdExistsProduct) != 0 && mysqli_num_rows($checkUniqueIdExistsService) != 0&& mysqli_num_rows($checkUniqueIdExistsRealEstate) != 0) {
            $a = true;
        } else {
            $a = false;
        }
    }
    if ($latitude == "") {
        $latitude = 27.6922368;
    }
    if ($longitude == "") {
        $longitude = 85.3344256;
    }
    if ($address == "") {
        $address = "Kathmandu";
    }
    $sqlUploadInfo = "INSERT INTO `realestate_info`(`employerUniqueId`, `estateTitle`, `category`, `estateDescription`, `currency`, `price`, `phoneNo`, `latitude`, `longitude`, `address`, `deadline`, `createdDate`, `productUniqueId`) VALUES ('" . $_SESSION['employerId'] . "','" . $estateTitle . "','" . $category . "','" . $estateDescription . "','" . $currency . "','" . $price . "','" . $phone . "','" . $latitude . "','" . $longitude . "','" . $address . "','" . $deadline . "','" . date("Y/m/d") . "','" . $uniqueProductId . "')";
    $sqlUploadInfo = mysqli_query($conn2, $sqlUploadInfo);
    $featurePost = $_POST['productDetailLabel'];
    $valuePost = $_POST['productDetailValue'];
    for ($i = 0; $i < sizeof($featurePost); $i++) {
        $feature = mysqli_escape_string($conn2, $featurePost[$i]);
        $value = mysqli_escape_string($conn2, $valuePost[$i]);
        $sqlFeatureUpload = "INSERT INTO `realestate_features`(`employerUniqueId`, `productUniqueId`, `productFeature`, `productFeatureValue`, `createdDate`) VALUES ('" . $_SESSION['employerId'] . "','" . $uniqueProductId . "','" . $feature . "','" . $value . "','" . date("Y/m/d") . "')";
        $sqlFeatureUpload = mysqli_query($conn2, $sqlFeatureUpload);
    }
    $targetDirectory = "/res/database/estateImages/";
    $imageName = $_FILES['uploadImages']['name'];
    $imageSize = $_FILES['uploadImages']['size'];
    $imageTemp = $_FILES['uploadImages']['tmp_name'];
    for ($i = 0; $i < sizeof($imageName); $i++) {
        $a = true;

        $selectNameImage = $imageName[$i];
        $extensionTemp = explode(".", $selectNameImage);
        $extension = end($extensionTemp);

        while ($a == true) {
            $uniqueImageId = uniqid(md5(time()));
            $checkUniqueImageExists = "SELECT id FROM `realestate_images` where `imageName`='" . $uniqueImageId . "'";
            $checkUniqueImageExists = mysqli_query($conn2, $checkUniqueImageExists);
            if (mysqli_num_rows($checkUniqueImageExists) != 0) {
                $a = true;
            } else {
                $a = false;
            }
        }
        $newFileName = $uniqueImageId . "." . $extension;
        $sqlImageUpload = "INSERT INTO `realestate_images`(`employerUniqueId`, `productUniqueId`, `imageName`, `createdDate`) VALUES ('" . $_SESSION['employerId'] . "','" . $uniqueProductId . "','" . $newFileName . "','" . date("Y/m/d") . "')";
        $sqlImageUpload = mysqli_query($conn2, $sqlImageUpload);
        move_uploaded_file($imageTemp[$i], $_SERVER['DOCUMENT_ROOT'] . $targetDirectory . $newFileName);
        compress_image($targetDirectory . $newFileName, $targetDirectory, 20,$newFileName);

        $sqlDirector = "SELECT id FROM `realestate_info` WHERE `productUniqueId`='" . $uniqueProductId . "'";
        $sqlDirector = mysqli_query($conn2, $sqlDirector);
        $sqlDirectorData = mysqli_fetch_assoc($sqlDirector);
        header("Location: /estatedetail/".$sqlDirectorData['id']);    }
} else {
    header("Location: index.php");
}
function compress_image($source_url, $destination_url, $quality,$newFileName)
{
    $destination_url = substr($destination_url, 1);
    $info = getimagesize($_SERVER['DOCUMENT_ROOT'] . $source_url);
    if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($_SERVER['DOCUMENT_ROOT'] . $source_url);
    elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] . $source_url);
    imagejpeg($image, $_SERVER['DOCUMENT_ROOT'] . $destination_url.$newFileName, $quality);
}
?>