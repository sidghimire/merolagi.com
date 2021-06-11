<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'wv') == true){
    $isWebView=true;
}else{
        $isWebView=false;

}
?>
<div class="modal fade right" id="modalRightSignin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class="modal-dialog modal-full-height modal-right" role="document">
        <div class="modal-content l-signin-modal">
            <div class="modal-header">
                <h4 class="modal-title w-50 l-signin-header-btn l-signin-active modalSignIn">Sign In</h4>
                <h4 class="modal-title w-50 l-signin-header-btn modalSignUp">Register</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/phpAction/signInAction.php" method="post" id="signInForm">
                    <input type="text" id="email" class="form-control l-login-form-control" placeholder="Email...." required>
                    <input type="password" id="password" class="form-control l-login-form-control" placeholder="Password" minlength="8" required>
                    <button type="submit" class="btn btn-success container-fluid">Login</button>
                    <button type="button" class="btn btn-link container-fluid forgotPassword">Forgot Password?</button>
                    <button type="button" class="btn btn-link container-fluid modalSignUp">Dont Have An Account?</button>
                    <div class="alert alert-danger container-fluid text-center l-login-msg" id="wrongPassword">Wrong Email/ Password !!!!!</div>
                    <div class="alert alert-primary container-fluid text-center l-login-msg" id="waitASecond">Wait A Second!!!!! Do Not Leave</div>

                </form>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <script>
                $("#wrongPassword").hide();
                $("#waitASecond").hide();
                $(document).ready(function() {
                    $(".modalSignIn").on("click", function() {
                        $(".l-signin-modal").load("/phpAjaxImports/signIn.php", function() {

                        });
                    });
                    $(".modalSignUp").on("click", function() {
                        $(".l-signin-modal").load("/phpAjaxImports/signUp.php", function() {

                        });
                    });
                    $(".forgotPassword").on("click", function() {
                        $(".l-signin-modal").load("/phpAjaxImports/forgotPassword.php", function() {

                        });
                    });
                    $("#signInForm").submit(function(e) {
                        var result;
                        e.preventDefault();
                        $("#waitASecond").show();
                        $("#wrongPassword").hide();
                        $.post(
                            '/phpAction/signInAction.php', {
                                email: $("#email").val(),
                                password: $("#password").val(),
                            },
                            function(result) {
                                result = JSON.stringify(result);
                                result = JSON.parse(result);
                                $("#waitASecond").hide();
                                if (result == 1) {
                                    $("#wrongPassword").show();

                                } else {
                                    window.location.replace("/");

                                }
                            }
                        );
                        $("#email").val("");
                        $("#password").val("");
                    });

                    $(document).on('keydown', '.l-login-form-control', function(e) {
                        if (e.keyCode == 32) return false;
                    });
                });
            </script>
        </div>
    </div>
</div>


<!--Sidebar Copy -->
    

<div id="l-sidebar" class="collapse multi-collapse position-fixed " style="overflow-y: scroll;">
    <div class="container-fluid no-gutters text-right">
        <span class="fas fa-times l-toggle-btn" data-toggle="collapse" href="#l-sidebar" role="button" aria-expanded="false" aria-controls="l-sidebar" style="padding:10px"></span>

    </div>
    <a href="/employer/dashboard/" class="btn btn-info l-sidebar-btn">
        Sell Products
    </a>
    <a href="/employer/provideServices/" class="btn btn-info l-sidebar-btn">
        Create Jobs
    </a>
    <a href="/employer/provideRealEstate/" class="btn btn-info l-sidebar-btn">
        Sell Real Estate
    </a>
    <a href="/employer/blog/" class="btn btn-info l-sidebar-btn ">
        Blogs
    </a>
    <a href="/corporate/signIn/" class="btn btn-info l-sidebar-btn l-btn-to-disappear-backend">
        Manage Corporate
    </a>
    <a class="btn btn-info l-sidebar-btn l-btn-to-disappear-backend">
        Transportation
    </a>
    <a class="btn btn-info l-sidebar-btn l-btn-to-disappear-backend">
        Emergency
    </a>
    <a class="btn btn-info l-sidebar-btn l-btn-to-disappear-backend">
        Rent
    </a>
    
    <a href="/employer/managePost/" class="btn btn-info l-sidebar-btn l-btn-to-appear">
        Manage Posts
    </a>
    <a href="/employer/sellerDetail/" class="btn btn-success l-sidebar-btn l-btn-to-appear">
        Edit Profile
    </a>
    <a href="/employer/orderedProducts/" class="btn btn-warning l-sidebar-btn l-btn-to-appear">
        Your Orders
    </a>
    <a class="btn btn-primary l-sidebar-btn l-btn-to-appear">
        Setting
    </a>
    <?php
    if (isset($_SESSION['employerId'])) {
        if ($_SESSION['employerId'] != "") {
    ?>
            <a href="/employer/logout/" class="btn btn-danger l-sidebar-btn">
                Logout
            </a> <?php
                }
            }
                    ?>

</div>
<!--Sidebar Copy -->

<!--Header Copy -->
<header class="sticky-top">
    <?php
    if(!$isWebView){
?>
    <div class="l-header-1 container-fluid no-gutters text-right">
        <span class="fas fa-bars float-left l-toggle-btn" data-toggle="collapse" href="#l-sidebar" role="button" aria-expanded="false" aria-controls="l-sidebar"> </span>
        <?php
        if (isset($_SESSION['employerId'])) {
            if ($_SESSION['employerId'] == "") {
        ?>
                <span class="l-header-1-item d-inline l-signin-change-btn" data-toggle="modal" data-target="#modalRightSignin">Signin</span>
            <?php
            } else {
            ?>
                <span class="l-header-1-item d-inline l-profile-change-btn"><a href="/employer/sellerDetail/">Profile</a></span>

            <?php
            }
        } else {
            ?>
                <span class="l-header-1-item d-inline l-signin-change-btn" data-toggle="modal" data-target="#modalRightSignin">Signin</span>

        <?php
        }
        ?>
        <a href="/employer/dashboard/" class="l-header-1-item d-inline">Sell With Us</a>
        <a href="#" class="l-header-1-item d-inline">Call Us</a>
        <a href="/Merolagi App.apk" class="l-header-1-item l-header-1-item-e d-inline">Download App</a>
    </div>
    <?php
    }
    ?>
    <div class="l-header-2 container-fluid no-gutters ">
  <?php
        if(!$isWebView){
    
?>
        <h1 class="l-header-2-item l-header-2-item-1 row no-gutters"><a href="/" style="color: black;">Merolagi.com</a></h1>

        <form method="GET" action="/frontend/search/index.php" class="l-header-2-item l-header-2-item-2 input-group w-100">
            <span class="input-group-btn fas fa-search l-fa-search">
            </span>
            <input type="text" name="search" class="form-control l-search-field shadow-none" placeholder="Search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>">
            <span class="input-group-btn">
                <button type="submit" class="l-search-btn shadow-none">Search</button>
            </span>
        </form>
        
        <?php
        }
?>
<?php
        if($isWebView){
?>
<div class='d-flex flex-column'>
<div class='container-fluid d-flex' style='margin-bottom:-25px'>
            <span class="fas fa-bars float-left l-toggle-btn" data-toggle="collapse" href="#l-sidebar" role="button" aria-expanded="false" aria-controls="l-sidebar" style="padding:10px;padding-bottom:3px"> </span>

        <h1 class="l-header-2-item l-header-2-item-1 row no-gutters"><a style="color: black;padding:13px">Merolagi.com</a></h1>

</div
<div class='container-fluid d-flex'>

 <form method="GET" action="/frontend/search/index.php" class="l-header-2-item l-header-2-item-2 input-group container-fluid text-center" style='padding-left:13vw'>
            <span class="input-group-btn fas fa-search l-fa-search">
            </span>
            <input type="text" name="search" class="form-control l-search-field shadow-none" style="padding:5px; font-size:18" placeholder="Search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>">
            <span class="input-group-btn">
                <button type="submit" class="l-search-btn shadow-none">Search</button>
            </span>
        </form>
</div>
</div>
<?php
        }
?>
<?php
        if(!$isWebView){
?>
        <div class="l-header-2-item l-header-2-item-3">
            <div class="l-header-2-item-child">
                <span class="fas fa-lg fa-map-marker-alt d-inline l-fa-header-2-icon"></span>
                <span class="fas fa-lg fa-bell d-inline l-fa-header-2-icon"></span>
                <span class="fas fa-lg fa-heart d-inline l-fa-header-2-icon"></span>
                <span class="fas fa-lg fa-shopping-cart d-inline l-fa-header-2-icon"></span>
                <?php
                if (isset($_SESSION['employerId'])) {
                    if ($_SESSION['employerId'] == "") {
                ?>
                        <span class="l-header-1-item d-inline l-signin-change-btn" data-toggle="modal" data-target="#modalRightSignin">Signin</span>
                    <?php
                    } else {
                    ?>
                        <span class="l-header-1-item d-inline l-profile-change-btn"><a href="/employer/sellerDetail/">Profile</a></span>

                    <?php
                    }
                } else {
                    ?>
                        <span class="l-header-1-item d-inline l-signin-change-btn" data-toggle="modal" data-target="#modalRightSignin">Signin</span>

                <?php
                }
                ?>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <div class="l-header-3 container-fluid no-gutters text-center">
        <a href="/employer/dashboard/" class="l-header-3-text d-inline align-middle">Sell Products</a>
        <a href="/employer/provideServices/" class="l-header-3-text d-inline align-middle">Create Jobs</a>
        <a href="/employer/provideRealEstate/" class="l-header-3-text d-inline align-middle">Sell Real Estate</a>
        <a href="/corporate/signIn/" class="l-header-3-text d-inline align-middle">Manage Corporate</a>
        <a class="l-header-3-text d-inline align-middle">Transportation</a>
        <a class="l-header-3-text d-inline align-middle">Emergency</a>
        <a href="#" class="l-header-3-text d-inline align-middle">Blogs</a>
    </div>
    <div class="l-header-4 container-fluid no-gutters text-center">
        <a class="l-header-4-text d-inline align-middle">Jobs</a>
        <a class="l-header-4-text d-inline align-middle">Local Products</a>
        <a class="l-header-4-text d-inline align-middle">Agriculture</a>
        <a class="l-header-4-text d-inline align-middle">Cultural Dress</a>
        <a class="l-header-4-text d-inline align-middle">Online Shop</a>
        <a class="l-header-4-text d-inline align-middle">Electronics</a>
        <a class="l-header-4-text d-inline align-middle">Sale</a>
        <a class="l-header-4-text d-inline align-middle">Startups</a>
        <a class="l-header-4-text d-inline align-middle">Gift Cards</a>
    </div>
</header>

<?php
if (isset($_GET['login'])) {
    if ($_GET['login'] = "true") {
?>
        <script>
            $("#modalRightSignin").modal("show");
        </script>
<?php
    }
}
?>

<!--Header Copy -->
<script>
    Android.showNotification("hihihihihihihi");
</script>
   <?php
    if($isWebView){
?>

<div class='position-fixed container-fluid bg-dark' style='bottom:0;z-index:10;'>
    <div class='row no-gutters'>
        <a href='/employer/sellerDetail/' class='col-3  bg-dark' style='padding-top:10px;padding-bottom:10px;color:white'>
            <div class='l-footer-tab container-fluid text-center'>
                <span class='fas fa-users fa-2x'></span>
            </div>
        </a>
       <a href='/employer/managePost/' class='col-3 bg-dark'>
            <div class='l-footer-tab container-fluid text-center' style='padding-top:10px;padding-bottom:10px;color:white'>
                <span class='fas fa-comments fa-2x'></span>
            </div>
        </a>
        <a class='col-3  bg-dark'>
            <div class='l-footer-tab container-fluid text-center' style='padding-top:10px;padding-bottom:10px;color:white'>
                <span class='fas fa-bell fa-2x'></span>
            </div>
        </a>
        <a class='col-3 bg-dark'>
            <div class='l-footer-tab container-fluid text-center' style='padding-top:10px;padding-bottom:10px;color:white'>
                <span class='fas fa-building fa-2x'></span>
            </div>
        </a>
    </div>
</div>

<?php
}
?>

