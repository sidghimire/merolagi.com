$(document).ready(function() {

    $("#activateManagement").addClass("l-active-header");


    $(".l-people-btn").addClass("l-btn-active");
    $('#mapping-div').on('show.bs.modal', function() {
        setTimeout(function() {
            map.invalidateSize();
        }, 10);
    });
    $('#mapping-div').on('hidden.bs.modal', function() {
        map.remove();
        $(".l-map-modal").append('<div id="map"></div>');

    });

});