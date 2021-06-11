<?php
//Global Imports
require_once $_SERVER['DOCUMENT_ROOT'] . 'res/global/index.php';
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
    <div class="go-back-div">
        <a href="/"><span class="fas fa-4x fa-arrow-alt-circle-left"></span></a>
    </div>
    <div class="container-fluid l-container">
        <div class="l-signup-div row">
            <div class="col-md-6 l-remove-res">
                <div class="flex-column text-center">
                    <img src="resetPassword.png" alt="" class="img-fluid ">
                    <a href="/frontend/signup/"><button type="button" class="btn btn-primary l-getstarted-btn">Get Started</button></a>
                    <a class="l-small-text" href='https://pngtree.com/so/post'>
                        post png from pngtree.com</a>
                </div>
            </div>
            <div class="col-md-6 l-signup-div-section-2">
                <div class="row"><span class="l-text-1 text-left">Reset Password</span></div>
                <div class="row l-form container-fluid">
                    <form action="action.php" method="post" class=" font-weight-normal">
                        <input type="text" class="form-control l-form-control" placeholder="Email" name="email">
                        <input type="submit" class="btn btn-success l-form-control" value="SEND CONFIRMATION EMAIL" name="reset">
                        <br>
                        <br>
                        <a href="/frontend/signup/" class="l-small-text-1">Don't Have An Account?</a>

                    </form>
                    <?php
                    if (isset($_GET['response'])) {
                        if ($_GET['response'] == "Success") {
                    ?>
                            <div class="alert alert-warning" role="alert">
                                Please Check Your Email For Activation Link!!!
                            </div>
                        <?php
                        }

                        if ($_GET['response'] == "ContinueLogin") {
                        ?>
                            <div class="alert alert-success" role="alert">
                                Ok, You Can Login Now
                            </div>
                        <?php
                        }
                        if ($_GET['response'] == "AccountDoesntExist") {
                        ?>
                            <div class="alert alert-danger" role="alert">
                                Wrong Email Or Password
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <a href='https://pngtree.com/so/network-security' class="l-small-text">network-security PNG From pngtree.com</a>
        </div>
    </div>
</body>

</html>