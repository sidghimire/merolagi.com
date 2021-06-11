$(document).ready(function() {

    $('#mapping-div').on('show.bs.modal', function() {

        setTimeout(function() {
            map.invalidateSize();
        }, 10);


    });


});