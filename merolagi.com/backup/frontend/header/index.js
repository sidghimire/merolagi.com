$(document).ready(function() {
    i = 0;
    $(".l-navbar-toggle").on("click", function() {
        if (i == 0) {
            $("#mainNavBar").css('display', "block");
            i = 1;
        } else {
            $("#mainNavBar").css('display', "none");

            i = 0;
        }
    });

});