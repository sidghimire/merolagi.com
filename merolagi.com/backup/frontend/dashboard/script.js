$(document).ready(function() {
    $("#profileDiv").show();
    $("#messageDiv").hide();
    $("#settingDiv").hide();
    $("#activateProfile").on("click", function() {
        $("#profileDiv").show();
        $("#messageDiv").hide();
        $("#settingDiv").hide();
        $("#activateProfile").addClass("l-active-header");
        $("#activateMessage").removeClass("l-active-header");
        $("#activateSetting").removeClass("l-active-header");
    });
    $("#activateMessage").on("click", function() {
        $("#profileDiv").hide();
        $("#messageDiv").show();
        $("#settingDiv").hide();
        $("#activateMessage").addClass("l-active-header");
        $("#activateProfile").removeClass("l-active-header");
        $("#activateSetting").removeClass("l-active-header");
    });
    $("#activateSetting").on("click", function() {
        $("#profileDiv").hide();
        $("#messageDiv").hide();
        $("#settingDiv").show();
        $("#activateSetting").addClass("l-active-header");
        $("#activateMessage").removeClass("l-active-header");
        $("#activateProfile").removeClass("l-active-header");
    });




    var extType = ["jpeg", "jpg", "png"]
    var selection = document.getElementById('uploadImage');

    $("#uploadImage").bind('change', function() {
        for (i = 0; i < selection.files.length; i++) {

            $(".l-file-error").remove();
            $(".l-file-success").remove();
            var ext = this.files[i].name.split('.').pop();
            if (extType.includes(ext) == false) {
                $("#uploadImage").remove();
                $(".l-file-error").remove();
                $(".l-file-success").remove();
                $("#imageDiv").append('<input type="file" class="form-control uploadMedia" name="uploadImages[]" id="uploadImage" multiple="multiple" required>');
                $("#imageDiv").append('<span class="l-file-error">We only support file with extension: .jpeg, .jpg, .png</span>');
                break;
            } else {
                $(document).remove(".l-file-error");
                $(document).remove(".l-file-success");
            }
        }
    });
});