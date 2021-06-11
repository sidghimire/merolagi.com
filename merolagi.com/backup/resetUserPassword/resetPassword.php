<?php
//Global Imports
require_once $_SERVER['DOCUMENT_ROOT'] . 'res/global/index.php';
//Global Imports
?>

<?php
if (isset($_GET['token'])) {
    $sqlExistCheck = "SELECT * FROM `general_login_reset` WHERE `token`='" . $_GET['token'] . "' and `currentState`='YES'";
    $sqlExistCheck = mysqli_query($conn1, $sqlExistCheck);
    $sqlExistCheckData = mysqli_fetch_assoc($sqlExistCheck);

    if (isset($_POST['reset'])) {
        if (mysqli_escape_string($conn1, $_POST['password1']) == mysqli_escape_string($conn1, $_POST['password2'])) {
            $updatePassword = "UPDATE `general_login` SET `password`='" . mysqli_escape_string($conn1, $_POST['password2']) . "' WHERE email='" . $sqlExistCheckData['email'] . "'";
            $updatePassword = mysqli_query($conn1, $updatePassword);
            $updateState = "UPDATE `general_login_reset` SET `currentState`='NO' WHERE email='" . $sqlExistCheckData['email'] . "'";
            $updateState = mysqli_query($conn1, $updateState);
            header("Location: /frontend/signin/index.php?response=PasswordResetSuccess");
        } else {
            header('Location: resetPassword.php?token=' . $_GET['token'] . '&response=PasswordNotMatching');
        }
    }

    if (mysqli_num_rows($sqlExistCheck) == 1) {
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
                            <a class="l-small-text" href='https://pngtree.com/so/digital'>digital png from pngtree.com</a>

                        </div>
                    </div>
                    <div class="col-md-6 l-signup-div-section-2">
                        <div class="row"><span class="l-text-1 text-left">Enter New Password</span></div>
                        <div class="row l-form container-fluid">
                            <form action="resetPassword.php?token=<?php echo $_GET['token'] ?>" method="post" class=" font-weight-normal">
                                <input type="password" class="form-control l-form-control" placeholder="Enter New Password" name="password1" minlength="8">
                                <input type="password" class="form-control l-form-control" placeholder="Enter Once Again New Password" name="password2" minlength="8">
                                <input type="submit" class="btn btn-success l-form-control" value="Reset Password" name="reset">
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

                                if ($_GET['response'] == "PasswordNotMatching") {
                                ?>
                                    <div class="alert alert-danger" role="alert">
                                        Password Not Matching
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
                </div>
            </div>
        </body>

        </html>
<?php
    } else {
        header("Location: /frontend/signin/index.php?response=TokenExpired");
    }
} else {
    header("Location: /frontend/signin/index.php?response=TokenExpired");
}
?>