<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
//Global Imports
?>
<?php
$email = mysqli_escape_string($conn1, $_POST['email']);
$password = mysqli_escape_string($conn1, $_POST['password']);
$loginSql = "SELECT * FROM `general_login` WHERE `email`='" . $email . "' and `password`='" . $password . "'";
$loginSql = mysqli_query($conn1, $loginSql);
$loginSqlData = mysqli_fetch_assoc($loginSql);
if (mysqli_num_rows($loginSql) == 1) {
    $_SESSION['userEmail']=$loginSqlData['email'];
    $_SESSION['userId']=$loginSqlData['uniqueUserId'];
    header("Location: /frontend/dashboard/");
} else {
    header("Location: /frontend/signin/index.php?response=AccountDoesntExist");
}
