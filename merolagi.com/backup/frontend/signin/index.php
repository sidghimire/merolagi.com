<?php
//Global Imports
require_once $_SERVER['DOCUMENT_ROOT'] . 'res/global/index.php';
include $_SERVER['DOCUMENT_ROOT'] . "/res/important/userSessionLogin.php";

//Global Imports
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . 'res/imports/index.php';
    ?>

    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $SITE_NAME ?></title>
</head>

<body>
    <div class="go-back-div row no-gutters">
        <a href="/"><span class="fas fa-4x fa-arrow-alt-circle-left"></span></a>
    </div>
    <div class="container-fluid l-container">
        <div class="l-signup-div row no-gutters">
            <div class="col-md-6 l-remove-res">
                <div class="flex-column  text-center">
                    <img src="/res/images/signin.png" alt="" class="img-fluid ">
                    <a href="/frontend/signup/"><button type="button" class="btn btn-primary l-getstarted-btn">Get Started</button></a>
                </div>
            </div>
            <div class="col-md-6 l-signup-div-section-2 text-center " >
                <div class="text-center">
                    <div class="row no-gutters text-center"><span class="l-text-1 text-center">Sign In</span></div>
                    <div class="row no-gutters l-form container-fluid">
                        <form action="action.php" method="post" class=" font-weight-normal text-center l-form-main">
                            <input type="text" class="form-control l-form-control" placeholder="Email" name="email">
                            <input type="password" class="form-control l-form-control" placeholder="Password" name="password" minlength="8">
                            <input type="submit" class="btn btn-success l-form-control" value="Login" name="login">
                            <br>
                            <a href="/activate/resetUserPassword/index.php" class="l-small-text-1">Forgot Password?</a>
                            <br>
                            <br>
                            <a href="/frontend/signup/" class="l-small-text-1">Don't Have An Account?</a>

                        </form>
                        <?php
                        if (isset($_GET['response'])) {
                            if ($_GET['response'] == "Success") {
                        ?>
                                <div class="alert alert-warning container-fluid" role="alert">
                                    Please Check Your Email For Activation Link!!!
                                </div>
                            <?php
                            }

                            if ($_GET['response'] == "ContinueLogin") {
                            ?>
                                <div class="alert alert-success container-fluid" role="alert">
                                    Ok, You Can Login Now
                                </div>
                            <?php
                            }
                            if ($_GET['response'] == "AccountDoesntExist") {
                            ?>
                                <div class="alert alert-danger container-fluid" role="alert">
                                    Wrong Email Or Password
                                </div>
                            <?php
                            }
                            if ($_GET['response'] == "PasswordResetSuccess") {
                            ?>
                                <div class="alert alert-success container-fluid" role="alert">
                                    Password Reset Successful
                                </div>
                            <?php
                            }
                            if ($_GET['response'] == "TokenExpired") {
                            ?>
                                <div class="alert alert-danger container-fluid" role="alert">
                                    The Link Has Already Expired
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <a href='https://pngtree.com/so/business' class="l-small-text">Business PNG From pngtree.com</a>
        </div>
    </div>
</body>

</html>