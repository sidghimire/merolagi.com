<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/res/imports/index.php";
    ?>

    <link rel="stylesheet" href="/header.css">
    <script src="/index.js"></script>

    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merolagi</title>
</head>

<body>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
    ?>
    <div class="l-main-container row no-gutters">
        <div class="col-md-7 text-center l-res-remove">
            <div class="l-background-div">
                <img src="resetPassword.png" class=" l-background" alt="">

                <a href="/employer/" class=" row no-gutters">
                    <input type="button" class="btn btn-warning l-btn-already container-fluid" value="Don't Have An Account">
                </a>
                <a class="l-small-text" href='https://pngtree.com/so/post'>
                        post png from pngtree.com</a>
            </div>
        </div>
        <div class="col-md-5 ">

            <div class="l-container-1 text-center">
                <div class="l-signup-div">
                    <span class="l-sign-text">SIGN IN</span>
                    <form action="action.php" method="POST" class="l-form-div">
                        <input type="text" class="form-control " placeholder="Email" name="email">
                        <input type="submit" class="btn btn-primary l-btn-sign container-fluid" value="SEND CONFIRMATION LINK" name="reset">
                        <br>
                        <a href="/employer/" class="btn btn-link">Don't have an Account?</a>
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
                    <a class="l-small-text" href='https://pngtree.com/so/post'>
                        post png from pngtree.com</a>
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