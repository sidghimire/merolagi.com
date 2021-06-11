<?php
$conn1 = new mysqli("localhost", "root", "", "merolagi_user_data");
$email = mysqli_escape_string($conn1, $_POST['email']);
$password = mysqli_escape_string($conn1, $_POST['password']);
$userExistSql = "SELECT email FROM general_login where email='" . $email . "'";
$userExistSql = mysqli_query($conn1, $userExistSql);
if (mysqli_num_rows($userExistSql) == 0) {
    $token = uniqid(md5(time()));
    $activationSql = "INSERT INTO `general_login_activation`(`email`, `password`, `token`, `sentDate`, `currentState`) VALUES ('" . $email . "','" . $password . "','" . $token . "','" . date("Y/m/d") . "','YES')";
    $activationSql = mysqli_query($conn1, $activationSql);
    header("Location: /frontend/signin/index.php?response=Success");
} else {
    header("Location: index.php?response=UserExist");
}
