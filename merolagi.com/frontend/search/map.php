<?php
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
$searchedText = $_POST['search'];
if (!isset($_POST['categories'])) {
    $sqlSearchList = "SELECT * FROM `product_info` WHERE (`productName` SOUNDS LIKE '%" . $searchedText . "%' OR `productName` LIKE '%" . $searchedText . "%' OR `category` SOUNDS LIKE '%" . $searchedText . "%' OR `category` LIKE '%" . $searchedText . "%' OR `productDescription` SOUNDS LIKE '%" . $searchedText . "%' OR `productDescription` LIKE '%" . $searchedText . "%') ORDER BY id DESC";
} else {
    $categories = $_POST['categories'];
    $sqlSearchList = "SELECT * FROM `product_info` WHERE (`productName` SOUNDS LIKE '%" . $searchedText . "%' OR `productName` LIKE '%" . $searchedText . "%' OR `category` SOUNDS LIKE '%" . $searchedText . "%' OR `category` LIKE '%" . $searchedText . "%' OR `productDescription` SOUNDS LIKE '%" . $searchedText . "%' OR `productDescription` LIKE '%" . $searchedText . "%') and category IN ('" . implode(",", $_POST['categories']) . "') ORDER BY id DESC";
}
$sqlSearchList = mysqli_query($conn2, $sqlSearchList);

?>

<script>
    var latitude = 0;
    var longitude = 0;

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        latitude = position.coords.latitude;
        longitude = position.coords.longitude;
        var redPin = L.icon({
            iconUrl: '/res/images/pin.png',
            popupAnchor: [-3, -76], // point from which the popup should open relative to the iconAnchor

            iconSize: [48, 48], // size of the icon
        });

 var redPin = L.icon({
                                        iconUrl: '/res/images/pin.png',
                                        popupAnchor: [-3, -76], // point from which the popup should open relative to the iconAnchor

                                        iconSize: [48, 48], // size of the icon
                                    });
                                    var map = L.map('map');
                                    map.invalidateSize();


                                    L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=vttW6pI9EIrxJQEd3Cuh', {
                                        attribute: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
                                        zoomOffset: -1,
                                        tileSize: 512,
                                    }).addTo(map);
        var i = 0;
        var geocodeService = L.esri.Geocoding.geocodeService();
        var marker;

        <?php
        while ($sqlSearchListData = mysqli_fetch_assoc($sqlSearchList)) {
        ?>
            geocodeService.reverse().latlng([<?php echo $sqlSearchListData['latitude'] ?>, <?php echo $sqlSearchListData['longitude'] ?>]).run(function(error, result) {
                if (error) {
                    return;
                }

                marker = new L.marker(result.latlng).addTo(map).bindPopup("( <?php echo $sqlSearchListData['productName'] ?>) " + result.address.Match_addr).openPopup();
                map.setView([position.coords.latitude, position.coords.longitude], 15);
            });

        <?php
        }

        ?>
        L.marker([latitude, longitude], {
            icon: redPin
        }).addTo(map);
    }
    
    $('#mapping-div').on('show.bs.modal', function() {

        setTimeout(function() {
            map.invalidateSize();
        }, 10);


    });

</script>