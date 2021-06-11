<?php
//Global Imports
require_once $_SERVER['DOCUMENT_ROOT'] . '/res/global/index.php';
//Global Imports
?>
<?php
if (isset($_POST['reset'])) {
     $sqlExistCheck = "SELECT * FROM `employer_login_reset` WHERE `token`='" . $_GET['token'] . "' and `currentState`='YES'";
    $sqlExistCheck = mysqli_query($conn1, $sqlExistCheck);
    $sqlExistCheckData = mysqli_fetch_assoc($sqlExistCheck);
        if (mysqli_escape_string($conn1, $_POST['password1']) == mysqli_escape_string($conn1, $_POST['password2'])) {
            $updatePassword = "UPDATE `employer_login` SET `password`='" .password_hash(mysqli_escape_string($conn1, $_POST['password2']),PASSWORD_DEFAULT)  . "' WHERE email='" . $sqlExistCheckData['email'] . "'";
            $updatePassword = mysqli_query($conn1, $updatePassword);
            
            $updateState = "UPDATE `employer_login_reset` SET `currentState`='NO' WHERE email='" . $sqlExistCheckData['email'] . "'";

            $updateState = mysqli_query($conn1, $updateState);
            
            header("Location: /login");
        } else {
            header('Location: resetPassword.php?token=' . $_GET['token'] . '&response=PasswordNotMatching');
        }
    }
    ?>