<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
//Global Imports
?>
<?php
if (isset($_POST['makeADeal'])) {
    $productId = mysqli_escape_string($conn3, $_POST['productId']);
    $latitude = mysqli_escape_string($conn3, $_POST['latitude']);
    $longitude = mysqli_escape_string($conn3, $_POST['longitude']);
    $address = mysqli_escape_string($conn3, $_POST['address']);
    $phoneNumber = mysqli_escape_string($conn3, $_POST['phoneNumber']);
    $hiringTime = mysqli_escape_string($conn3, $_POST['hiringTime']);
    $customerId = $_SESSION['employerId'];
    $check = true;

    while ($check == true) {
        $transactionId = uniqid(md5(time()));
        $checkTransactionIdService = "SELECT * FROM `deal_services` WHERE transactionId='" . $transactionId . "'";
        $checkTransactionIdService = mysqli_query($conn3, $checkTransactionIdService);
        $checkTransactionIdProduct = "SELECT * FROM `deal_product` WHERE transactionId='" . $transactionId . "'";
    
        $checkTransactionIdProduct = mysqli_query($conn3, $checkTransactionIdProduct);
        if (mysqli_num_rows($checkTransactionIdProduct) == 0 or mysqli_num_rows($checkTransactionIdService)) {
            $check = false;
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


    $insertTransaction = "INSERT INTO `deal_services`(`productId`, `customerId`, `transactionId`, `latitude`, `longitude`, `address`, `phone`, `hiringTime`, `createdDate`) VALUES ('" . $productId . "','" . $customerId . "','" . $transactionId . "','" . $latitude . "','" . $longitude . "','" . $address . "','" . $phoneNumber . "','" . $hiringTime . "','" . date("Y/m/d") . "')";
    $insertTransaction = mysqli_query($conn3, $insertTransaction);
    
    $getId="SELECT * FROM `deal_services` where `transactionId`='".$transactionId."'";
    $getId = mysqli_query($conn3, $getId);
    $getIdData= mysqli_fetch_assoc($getId);
    $getId="SELECT * FROM `service_info` where `productUniqueId`='".$getIdData['productId']."'";
    $getId = mysqli_query($conn2, $getId);
    $getIdData= mysqli_fetch_assoc($getId);

    header("Location: /servicedetail/".$getIdData['id']);
}

if (isset($_POST['negotiateBtn'])) {
    $productId = mysqli_escape_string($conn2, $_POST['productId']);
    $price = mysqli_escape_string($conn2, $_POST['price']);
    $comment = mysqli_escape_string($conn2, $_POST['comment']);
    $customerId = $_SESSION['employerId'];
    $check = true;

    while ($check == true) {
        $transactionId = uniqid(md5(time()));
        $checkTransactionId = "SELECT * FROM `product_negotiate` WHERE negotiateId='" . $transactionId . "'";
        $checkTransactionIdEstate = mysqli_query($conn2, $checkTransactionId);
        $checkTransactionId = "SELECT * FROM `service_negotiate` WHERE negotiateId='" . $transactionId . "'";
        $checkTransactionIdServices = mysqli_query($conn2, $checkTransactionId);
        $checkTransactionId = "SELECT * FROM `realestate_negotiate` WHERE negotiateId='" . $transactionId . "'";
        $checkTransactionId = mysqli_query($conn2, $checkTransactionId);
        if ((mysqli_num_rows($checkTransactionIdEstate) == 0) and (mysqli_num_rows($checkTransactionIdServices) == 0) and (mysqli_num_rows($checkTransactionId) == 0)) {
            $check = false;
        }
    }
    $insertTransaction = "INSERT INTO `service_negotiate`(`productId`, `userId`, `negotiateId`, `price`, `message`, `sentDate`) VALUES ('" . $productId . "','" . $customerId . "','" . $transactionId . "','" . $price . "','" . $comment . "','" . date("Y/m/d") . "')";

    $insertTransaction = mysqli_query($conn2, $insertTransaction);


    $getId = "SELECT * FROM `service_negotiate` where `negotiateId`='" . $transactionId . "'";

    $getId = mysqli_query($conn2, $getId);
    $getIdData = mysqli_fetch_assoc($getId);
    $getId = "SELECT * FROM `service_info` where `productUniqueId`='" . $getIdData['productId'] . "'";
    $getId = mysqli_query($conn2, $getId);
    $getIdData = mysqli_fetch_assoc($getId);

    header("Location: /servicedetail/" . $getIdData['id']."/negotiateSent");

}