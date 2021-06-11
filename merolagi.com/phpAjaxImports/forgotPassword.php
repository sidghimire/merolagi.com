<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form action="/phpAction/signInAction.php" method="post" id="resetPassword">
        <h4 class="modal-title w-100 l-signin-header-btn l-forgot-password-active modalSignIn" id="">Reset Password</h4>
        <input type="text" id="email" class="form-control l-login-form-control" placeholder="Enter Your Email" required>
        <button type="submit" class="btn btn-success container-fluid">Send Activation Link</button>
        <button type="button" class="btn btn-primary container-fluid modalSignIn">Login Here</button>
        <button type="button" class="btn btn-link container-fluid modalSignUp" id="">Dont Have An Account?</button>
        <div class="alert alert-success container-fluid text-center l-login-msg" id="resetSent">Reset Link Has Been Sent <br> If You Have An Account!!!!!!!</div>
        <div class="alert alert-primary container-fluid text-center l-login-msg" id="waitASecond">Wait A Second!!!!! Do Not Leave</div>
    </form>
</div>
<div class="modal-footer justify-content-center">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
<script>
    $("#resetSent").hide();
    $("#waitASecond").hide();
    $("#email").val("");
    $(document).ready(function() {
        $(".modalSignIn").on("click", function() {
            $(".l-signin-modal").load("/phpAjaxImports/signIn.php", function() {

            });
        });
        $(".modalSignUp").on("click", function() {
            $(".l-signin-modal").load("/phpAjaxImports/signUp.php", function() {

            });
        });
        $("#resetPassword").submit(function(e) {
            var result;
            e.preventDefault();
            $("#waitASecond").show();
            $("#wrongPassword").hide();
            $.post(
                '/phpAction/forgotPasswordAction.php', {
                    email: $("#email").val()
                },
                function(result) {
                    result = JSON.stringify(result);
                    result = JSON.parse(result);
                    $("#waitASecond").hide();
                    if (result == 1) {
                        $("#resetSent").show();

                    } 
                }
            );

        });

        $(document).on('keydown', '.l-login-form-control', function(e) {
            if (e.keyCode == 32) return false;
        });
    });
</script>