<?php
//Global Imports
require_once $_SERVER['DOCUMENT_ROOT'] . '/res/global/index.php';
//Global Imports
?>

<?php
if (isset($_GET['token'])) {
    $sqlExistCheck = "SELECT * FROM `employer_login_reset` WHERE `token`='" . $_GET['token'] . "' and `currentState`='YES'";
    $sqlExistCheck = mysqli_query($conn1, $sqlExistCheck);
    $sqlExistCheckData = mysqli_fetch_assoc($sqlExistCheck);

    

    if (mysqli_num_rows($sqlExistCheck) == 1) {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <?php
            include $_SERVER['DOCUMENT_ROOT'] . "/res/imports/index.php";
            ?>

            <link rel="stylesheet" href="/header.css">
            <script src="/index.js"></script>

            <script src="/activate/resetEmployerPassword/script.js"></script>
            <link rel="stylesheet" href="/activate/resetEmployerPassword/style.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Reset Password</title>
        </head>

        <body>
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
            ?>
            <div class="l-main-container row no-gutters">
                
                <div class="col-md-12 ">

                    <div class="l-container-1 text-center">
                        <div class="l-signup-div">
                            <span class="l-sign-text">Enter New Password</span>
                            <form action="resetPasswordAction.php?token=<?php echo $_GET['token'] ?>" method="post" class="l-form-div">
                                <input type="password" class="form-control l-form-control" placeholder="Enter New Password" name="password1" minlength="8">
                                <input type="password" class="form-control l-form-control" placeholder="Enter Once Again New Password" name="password2" minlength="8">
                                <input type="submit" class="btn btn-success l-form-control" value="Reset Password" name="reset">
                                <br>
                                <a href="/employer/signIn/">
                                    <button class="btn btn-link">Already have an Account?</button>
                                </a>
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
            <script>
        $(document).on('keydown', '.form-control', function(e) {
    if (e.keyCode == 32) return false;
});
    </script>
        </body>

        </html>
<?php
    } else {
        header("Location: /tokenExpired");
    }
} else {
    header("Location: /tokenExpired");
}
?>