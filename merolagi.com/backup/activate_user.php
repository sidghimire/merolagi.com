<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
//Global Imports
?>
<?php
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $sqlActivate = "SELECT * FROM `general_login_activation` where `token`='" . $token . "' and `currentState`='YES'";
    echo $sqlActivate;
    $sqlActivate = mysqli_query($conn1, $sqlActivate);
    if (mysqli_num_rows($sqlActivate) == 0) {
        header("Location: /frontend/index.php?response=TokenExpired");
    } else {
        $a = true;
        while ($a == true) {
            $uniqueUserId = uniqid(md5(time()));
            $checkUniqueUserExists = "SELECT id FROM `general_login` where `uniqueUserId`='" . $uniqueUserId . "'";
            $checkUniqueUserExists = mysqli_query($conn2, $checkUniqueUserExists);
            if (mysqli_num_rows($checkUniqueUserExists) != 0) {
                $a = true;
            } else {
                $a = false;
            }
        }
        $sqlActivateData = mysqli_fetch_assoc($sqlActivate);
        $sqlTransfer = "INSERT INTO `general_login`( `email`, `password`, `createdDate`, `uniqueUserId`) VALUES ('" . $sqlActivateData['email'] . "','" . $sqlActivateData['password'] . "','" . date("Y/m/d") . "','" . $uniqueUserId . "')";
        $sqlTransfer = mysqli_query($conn1, $sqlTransfer);
        $sqlTransfer = "INSERT INTO `user_profile`(`createdDate`, `uniqueUserId`) VALUES ('" . date("Y/m/d") . "','" . $uniqueUserId . "')";
        $sqlTransfer = mysqli_query($conn3, $sqlTransfer);
        $sqlTransfer = "INSERT INTO `user_address_info`(`createdDate`, `uniqueUserId`) VALUES ('" . date("Y/m/d") . "','" . $uniqueUserId . "')";
        $sqlTransfer = mysqli_query($conn3, $sqlTransfer);
        $sqlTransfer = "INSERT INTO `user_company_info`(`createdDate`, `uniqueUserId`) VALUES ('" . date("Y/m/d") . "','" . $uniqueUserId . "')";
        $sqlTransfer = mysqli_query($conn3, $sqlTransfer);
        $deactivateState = "UPDATE `general_login_activation` SET `currentState`='NO' WHERE email='" . $sqlActivateData['email'] . "'";
        $deactivateState = mysqli_query($conn1, $deactivateState);
        header("Location: /frontend/signin/index.php?response=ContinueLogin");
    }
} else {
    header("Location: /frontend/signin/index.php");
}
