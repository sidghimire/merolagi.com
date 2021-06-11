<div class="modal-header">
    <h4 class="modal-title w-50 l-signin-header-btn modalSignIn">Sign In</h4>
    <h4 class="modal-title w-50 l-signin-header-btn l-signin-active modalSignUp">Register</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form action="/phpAction/signUpAction.php" method="post" id="signUpForm">

        <input type="text" id="email" class="form-control l-login-form-control" placeholder="Enter Your Email" required>
        <input type="password" id="password" class="form-control l-login-form-control" placeholder="New Password" minlength="8" required>
        <button type="submit" class="btn btn-success container-fluid">Register New Account</button>
        <button type="button" class="btn btn-link container-fluid modalSignIn" >Already Have An Account?</button>
        <button type="button" class="btn btn-link container-fluid">Dont Have An Email?</button>
        <div class="alert alert-success container-fluid text-center l-login-msg" id="activationLinkSent">Activation Link Sent!!!<br> Please Check Your Mail !!!</div>
        <div class="alert alert-danger container-fluid text-center l-login-msg" id="accountAlreadyExist">Account With That Email Already Exist!!!!</div>
        <div class="alert alert-primary container-fluid text-center l-login-msg" id="waitASecond">Wait A Second!!!!! Do Not Leave</div>

    </form>
</div>
<div class="modal-footer justify-content-center">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
<script>
    $("#activationLinkSent").hide();
    $("#accountAlreadyExist").hide();
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
        $("#signUpForm").submit(function(e) {
            var result;
            e.preventDefault();
            $("#waitASecond").show();
            $("#activationLinkSent").hide();
            $("#accountAlreadyExist").hide();
            $.post(
                '/phpAction/signUpAction.php', {
                    email: $("#email").val(),
                    password: $("#password").val(),
                },
                function(result) {
                    result = JSON.stringify(result);
                    result = JSON.parse(result);
                    $("#waitASecond").hide();
                    if (result == 1) {
                        $("#activationLinkSent").show();
                        $("#accountAlreadyExist").hide();

                    } else if (result == 0) {
                        $("#accountAlreadyExist").show();
                        $("#activationLinkSent").hide();

                    } else {

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