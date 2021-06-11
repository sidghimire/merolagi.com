$(document).ready(function() {
    i = 0;
    $(".l-main-container-header").hide();

    $(".l-navbar-toggle-2").on("click", function() {
        if (i == 0) {
            $(".l-main-container-header").slideDown("slow");
            i = 1;
        } else {
            $(".l-main-container-header").slideUp("slow");

            i = 0;
        }
    });

});