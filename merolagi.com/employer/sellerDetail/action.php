<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
//Global Imports
?>
<?php
if (isset($_POST['saveProfile'])) {
    $sqlGetCurrentSql = "SELECT profilePhoto FROM `employer_profile` WHERE uniqueUserId='" . $_SESSION['employerId'] . "'";
    $sqlGetCurrentSql = mysqli_query($conn4, $sqlGetCurrentSql);
    $sqlGetCurrentSqlData = mysqli_fetch_assoc($sqlGetCurrentSql);

    $name = mysqli_escape_string($conn4, $_POST['name']);
    $alternateEmail = mysqli_escape_string($conn4, $_POST['alternateEmail']);
    $mobileNumber = mysqli_escape_string($conn4, $_POST['mobileNumber']);
    $alternateMobile = mysqli_escape_string($conn4, $_POST['alternateMobile']);

    if ($_FILES['profileImage']['name'] != "") {

        $targetDirectory = "/res/database/employerProfileImages/";
        $imageName = $_FILES['profileImage']['name'];
        $imageSize = $_FILES['profileImage']['size'];
        $imageTemp = $_FILES['profileImage']['tmp_name'];
        $a = true;

        $selectNameImage = $imageName;
        $extensionTemp = explode(".", $selectNameImage);
        $extension = end($extensionTemp);

        while ($a == true) {
            $uniqueImageId = uniqid(md5(time()));
            $checkUniqueImageExists = "SELECT id FROM `employer_profile` where `profilePhoto`='" . $uniqueImageId . "'";
            $checkUniqueImageExists = mysqli_query($conn4, $checkUniqueImageExists);
            if (mysqli_num_rows($checkUniqueImageExists) != 0) {
                $a = true;
            } else {
                $a = false;
            }
        }
        $newFileName = $uniqueImageId . "." . $extension;
        $sqlImageUpload = "UPDATE `employer_profile` SET `profilePhoto`='" . $newFileName . "' WHERE `uniqueUserId`='" . $_SESSION['employerId'] . "'";
        $sqlImageUpload = mysqli_query($conn4, $sqlImageUpload);
        move_uploaded_file($imageTemp, $_SERVER['DOCUMENT_ROOT'] . $targetDirectory . $newFileName);
        compress_image($targetDirectory . $newFileName, $targetDirectory, 20, $newFileName);
    } else {
        $sqlImageUpload = "UPDATE `employer_profile` SET `profilePhoto`='" . $sqlGetCurrentSqlData['profilePhoto'] . "' WHERE `uniqueUserId`='" . $_SESSION['employerId'] . "'";
        $sqlImageUpload = mysqli_query($conn4, $sqlImageUpload);
    }


    $sqlUpdate = "UPDATE `employer_profile` SET `name`='" . $name . "',`alternateEmail`='" . $alternateEmail . "',`mobile`='" . $mobileNumber . "',`alternateMobile`='" . $alternateMobile . "' WHERE `uniqueUserId`='" . $_SESSION['employerId'] . "'";
    $sqlUpdate = mysqli_query($conn4, $sqlUpdate);
    header("Location: index.php?update=Successful");
}


if (isset($_POST['addressSave'])) {

    $houseNo = mysqli_escape_string($conn4, $_POST['houseNo']);
    $state = mysqli_escape_string($conn4, $_POST['state']);
    $city = mysqli_escape_string($conn4, $_POST['city']);
    $zipCode = mysqli_escape_string($conn4, $_POST['zipCode']);
    $street = mysqli_escape_string($conn4, $_POST['street']);
    $country = mysqli_escape_string($conn4, $_POST['country']);

    $sqlUpdate = "UPDATE `employer_address_info` SET `houseNo`='" . $houseNo . "',`state`='" . $state . "',`city`='" . $city . "',`zipCode`='" . $zipCode . "',`street`='" . $street . "',`country`='" . $country . "' WHERE `uniqueUserId`='" . $_SESSION['employerId'] . "'";
    $sqlUpdate = mysqli_query($conn4, $sqlUpdate);
    header("Location: index.php?update=Successful");
}

if (isset($_POST['companySave'])) {

    $companyName = mysqli_escape_string($conn4, $_POST['companyName']);
    $designation = mysqli_escape_string($conn4, $_POST['designation']);
    $website = mysqli_escape_string($conn4, $_POST['website']);
    $alternateWebsite = mysqli_escape_string($conn4, $_POST['alternateWebsite']);

    $sqlUpdate = "UPDATE `employer_company_info` SET `companyName`='" . $companyName . "',`designation`='" . $designation . "',`website`='" . $website . "',`alternateWebsite`='" . $alternateWebsite . "' WHERE `uniqueUserId`='" . $_SESSION['employerId'] . "'";
    $sqlUpdate = mysqli_query($conn4, $sqlUpdate);
    header("Location: index.php?update=Successful");
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