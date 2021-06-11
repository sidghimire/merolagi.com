<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";

//Global Imports
?>
<?php

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $sqlActivate = "SELECT * FROM `employer_login_activation` where `token`='" . $token . "' and `currentState`='YES'";
    $sqlActivate = mysqli_query($conn1, $sqlActivate);
    if (mysqli_num_rows($sqlActivate) == 0) {
        header("Location: /employer/index.php?response=TokenExpired");
    } else {
        $a = true;
        while ($a == true) {
            $uniqueUserId = uniqid(md5(time()));
            $checkUniqueUserExists = "SELECT id FROM `employer_login` where `uniqueUserId`='" . $uniqueUserId . "'";
            $checkUniqueUserExists = mysqli_query($conn1, $checkUniqueUserExists);
            if (mysqli_num_rows($checkUniqueUserExists) != 0) {
                $a = true;
            } else {
                $a = false;
            }
        }


        $sqlActivateData = mysqli_fetch_assoc($sqlActivate);
        $sqlTransfer = "INSERT INTO `employer_login`( `email`, `password`, `createdDate`, `uniqueUserId`) VALUES ('" . $sqlActivateData['email'] . "','" . $sqlActivateData['password'] . "','" . date("Y/m/d") . "','".$uniqueUserId."')";
        $sqlTransfer = mysqli_query($conn1, $sqlTransfer);
        $sqlTransfer = "INSERT INTO `employer_profile`(`createdDate`, `uniqueUserId`) VALUES ('" . date("Y/m/d") . "','" . $uniqueUserId . "')";
        $sqlTransfer = mysqli_query($conn4, $sqlTransfer);
        $sqlTransfer = "INSERT INTO `employer_address_info`(`createdDate`, `uniqueUserId`) VALUES ('" . date("Y/m/d") . "','" . $uniqueUserId . "')";
        $sqlTransfer = mysqli_query($conn4, $sqlTransfer);
        $sqlTransfer = "INSERT INTO `employer_company_info`(`createdDate`, `uniqueUserId`) VALUES ('" . date("Y/m/d") . "','" . $uniqueUserId . "')";
        $sqlTransfer = mysqli_query($conn4, $sqlTransfer);
        $deactivateState = "UPDATE `employer_login_activation` SET `currentState`='NO' WHERE email='" . $sqlActivateData['email'] . "'";
        $deactivateState = mysqli_query($conn1, $deactivateState);
        
        
        
        
         $_SESSION['employerEmail'] = $sqlActivateData['email'];
    $_SESSION['employerId'] = $uniqueUserId;
    setcookie("cookieEmail",$sqlActivateData['email'] , time() + (86400 * 30*365), "/"); // 86400 = 1 day
    setcookie("cookieId",$uniqueUserId, time() + (86400 * 30*365), "/"); // 86400 = 1 day
        
        header("Location: /index.php?Success=Activated");
    }
} else {
    header("Location: /index.php?Error=True");
}
