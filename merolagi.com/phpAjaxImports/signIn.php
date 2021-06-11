<div class="modal-header">
    <h4 class="modal-title w-50 l-signin-header-btn l-signin-active modalSignIn" id="">Sign In</h4>
    <h4 class="modal-title w-50 l-signin-header-btn modalSignUp" id="">Register</h4>
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
        <button type="button" class="btn btn-link container-fluid modalSignUp" id="">Dont Have An Account?</button>
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
    $("#email").val("");
    $("#password").val("");
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
                        
                        window.location.reload("/");
                    }
                }
            );

        });

        $(document).on('keydown', '.l-login-form-control', function(e) {
            if (e.keyCode == 32) return false;
        });
    });
</script>