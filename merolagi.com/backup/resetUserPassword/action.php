<?php
    $email = mysqli_escape_string($conn1, $_POST['email']);
    $loginSql = "SELECT * FROM `general_login` WHERE `email`='" . $email . "'";
    $loginSql = mysqli_query($conn1, $loginSql);
    if (mysqli_num_rows($loginSql) == 1) {
        $token = uniqid(md5(time()));
        $resetSql = "INSERT INTO `general_login_reset`(`email`, `token`, `sentDate`, `currentState`) VALUES ('" . $email . "','" . $token . "','" . date("Y/m/d") . "','YES')";
        $resetSql = mysqli_query($conn1, $resetSql);
        
        header("Location: /frontend/signin/index.php?response=ResetPasswordHasBeenSent");
    } else {
        header("Location: /frontend/signin/index.php?response=ResetPasswordHasBeenSent");
    }
}
