$(document).ready(function() {
    $(".l-people-btn").addClass("l-btn-active");
    $('#mapping-div').on('show.bs.modal', function() {
        setTimeout(function() {
            map.invalidateSize();
        }, 10);
    });

});