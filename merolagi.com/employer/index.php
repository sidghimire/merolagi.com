<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
include $_SERVER['DOCUMENT_ROOT'] . "/res/important/employerSessionLogin.php";
//Global Imports
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/res/imports/index.php";
    ?>
    

    <link rel="stylesheet" href="/header.css">
    <script src="/script.js"></script>

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
                <img src="background.png" class=" l-background" alt="">
                <a href="/employer/signIn/" class=" row no-gutters">
                    <input type="button" class="btn btn-warning l-btn-already container-fluid" value="Already Have An Account">
                </a>
                <a class="l-small-text" href='https://pngtree.com/so/digital'>digital png from pngtree.com</a>

            </div>
        </div>
        <div class="col-md-5 ">

            <div class="l-container-1 text-center">
                <div class="l-signup-div">
                    <span class="l-sign-text">SIGN UP</span>
                    <form action="action.php" method="POST" class="l-form-div">
                        <input type="text" class="form-control " placeholder="Email" name="email">
                        <input type="password" class="form-control" placeholder="New Password" name="password" minlength="8" data-ng-pattern="/^\S*$/">
                        <input type="submit" class="btn btn-primary l-btn-sign container-fluid" value="Create An Account" name="getStarted">
                        <a class="btn btn-link" href="/employer/signIn/">
                            Already have an Account?
                        </a>
                    </form>
                    <?php
                    if (isset($_GET['response'])) {
                        if ($_GET['response'] == "UserExist") {
                    ?>
                            <div class="alert alert-danger" role="alert">
                                User With That Email Already Exists!!!!!
                            </div>
                        <?php
                        }

                        if ($_GET['response'] == "TokenExpired") {
                        ?>
                            <div class="alert alert-warning" role="alert">
                                Activation Link Has Already Expired!!!!!!
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