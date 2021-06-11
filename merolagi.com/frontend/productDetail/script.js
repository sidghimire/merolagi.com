$(document).ready(function() {

    $('#mapping-div').on('show.bs.modal', function() {

        setTimeout(function() {
            map.invalidateSize();
        }, 10);
    });
    $("#innerModal").on("click", function() {
        $("#mapping-div").modal('toggle');

    });
});