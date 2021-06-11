<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
//Global Imports
?>
<?php
$email = mysqli_escape_string($conn1, $_POST['email']);
$password = mysqli_escape_string($conn1, $_POST['password']);
$loginSql = "SELECT * FROM `employer_login` WHERE `email`='" . $email . "'";
$loginSql = mysqli_query($conn1, $loginSql);
$loginSqlData=mysqli_fetch_assoc($loginSql);
if ( password_verify($password,$loginSqlData['password'])==1) {
    
    $_SESSION['employerEmail'] = $loginSqlData['email'];
    $_SESSION['employerId'] = $loginSqlData['uniqueUserId'];
    setcookie("cookieEmail",$loginSqlData['email'] , time() + (86400 * 30*365), "/"); // 86400 = 1 day
    setcookie("cookieId",$loginSqlData['uniqueUserId'] , time() + (86400 * 30*365), "/"); // 86400 = 1 day

    echo "2";
} else {
    echo "1";
}