$(document).ready(function() {



    $("#activateManagement").addClass("l-active-header");

    $('#mapping-div').on('show.bs.modal', function() {

        setTimeout(function() {
            map.invalidateSize();
        }, 10);
    });

    var i = 1;
    $("#addBtn").on("click", function() {
        $("#feature-div").append('<span style="display: flex;" id="productFeature' + i + '"> <input list="productFeature" class="form-control l-form-control l-form-control-e l-field-e-3" id="" placeholder="Product Feature Detail" name="productDetailLabel[]"> <input type="text" class="form-control l-form-control l-form-control-e l-field-e-2" placeholder="Feature" name="productDetailValue[]"> <button class="btn btn-link l-feature-btn-remove" id="' + i + '">Remove</button> </span>');
        i++;
    });
    $(document).on("click", "button.l-feature-btn-remove", function() {
        var featureId = $('.l-feature-btn-remove').attr("id");
        $("#productFeature" + featureId + "").remove();
    });
    $(".l-people-btn").addClass("l-btn-active");



});