<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
if (strpos($_SERVER['HTTP_USER_AGENT'], 'wv') == true){
    $isWebView=false;
}else{
        $isWebView=false;

}
//Global Imports
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/res/imports/index.php";
    ?>

    <link rel="stylesheet" href="/header.css">
    <script src="/index.js"></script>

    <script src="/frontend/search/script.js"></script>
    <link rel="stylesheet" href="/frontend/search/style.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <meta charset="UTF-8">
    <!-- Load Leaflet from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

    <!-- Load Esri Leaflet from CDN -->
    <script src="https://unpkg.com/esri-leaflet@2.5.0/dist/esri-leaflet.js" integrity="sha512-ucw7Grpc+iEQZa711gcjgMBnmd9qju1CICsRaryvX7HJklK0pGl/prxKvtHwpgm5ZHdvAil7YPxI1oWPOWK3UQ==" crossorigin=""></script>

    <!-- Load Esri Leaflet Geocoder from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.css" integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g==" crossorigin="">
    <script src="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.js" integrity="sha512-HrFUyCEtIpxZloTgEKKMq4RFYhxjJkCiF5sDxuAokklOeZ68U2NPfh4MFtyIVWlsKtVbK5GD2/JzFyAfvT5ejA==" crossorigin=""></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merolagi</title>

</head>

<body>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
    ?>
    <div class="modal fade right" id="modalRightFilter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class="modal-dialog modal-full-height modal-right" role="document">
            <div class="modal-content l-signin-modal">
                <div class="modal-header">
                    <h4>Filter</h4>
                </div>
                <div class="modal-body">
                    Under Construction
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="row no-gutters">
        <div class="col-md-2">
            <div class="l-search-container container-fluid">
                <div class="l-search-div container-fluid">
                    <div class="row no-gutters">
                        <span class="l-sidebar-title-text">Category Filter</span>
                    </div>
                    <div class="row no-gutters">
                        <a href="#l-result-product" class="btn btn-info btn-sm w-100">Products</a>
                        <a href="#l-result-service" class="btn btn-info btn-sm w-100">Services</a>
                        <a href="#l-result-estate" class="btn btn-info btn-sm w-100">Real Estate</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="l-result-container container-fluid">
                <div class="l-result-div container-fluid">
                    <div class="row no-gutters l-result-header">
                        <div class="row no-gutters">
                            <span class="l-result-header-title-text">

                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalRightFilter"><span class="fas fa-filter"></span> Filter</button>
                            </span>
                        </div>

                    </div>




                    <div class="modal " id="mapping-div-product">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    Product
                                </div>
                                <div class="modal-body">
                                    <div id="map-product">
                                        <?php
                                        $searchedText = mysqli_escape_string($conn2, $_GET['search']);
                                        $sqlGetProduct = "SELECT * FROM `product_info` WHERE `productName` SOUNDS LIKE '%" . $searchedText . "%' OR `productName` LIKE '%" . $searchedText . "%' OR `category` SOUNDS LIKE '%" . $searchedText . "%' OR `category` LIKE '%" . $searchedText . "%' OR `productDescription` SOUNDS LIKE '%" . $searchedText . "%' OR `productDescription` LIKE '%" . $searchedText . "%' and display='' ORDER BY id DESC ";
                                        $sqlGetProduct = mysqli_query($conn2, $sqlGetProduct);
                                        ?>
                                        <script>
                                            var latitude = 0;
                                            var longitude = 0;

                                            function showPositionProduct() {

                                                var map = L.map('map-product');
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
                                                while ($sqlSearchListData = mysqli_fetch_assoc($sqlGetProduct)) {
                                                    if ($sqlSearchListData['latitude'] != "" and $sqlSearchListData['latitude'] != "") {
                                                ?>
                                                        geocodeService.reverse().latlng([<?php echo $sqlSearchListData['latitude'] ?>, <?php echo $sqlSearchListData['longitude'] ?>]).run(function(error, result) {
                                                            if (error) {
                                                                return;
                                                            }

                                                            marker = new L.marker(result.latlng).addTo(map).bindPopup("( <?php echo $sqlSearchListData['productName'] ?>) " + result.address.Match_addr).openPopup();
                                                            map.setView([<?php echo $sqlSearchListData['latitude'] ?>, <?php echo $sqlSearchListData['longitude'] ?>], 15);
                                                        });

                                                <?php
                                                    }
                                                }
                                                ?>


                                            }
                                        </script>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="modal " id="mapping-div-service">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    Services
                                </div>
                                <div class="modal-body">
                                    <div id="map-service">
                                        <?php
                                        $searchedText = mysqli_escape_string($conn2, $_GET['search']);
                                        $sqlGetService = "SELECT * FROM `service_info` WHERE `serviceName` SOUNDS LIKE '%" . $searchedText . "%' OR `serviceName` LIKE '%" . $searchedText . "%' OR `category` SOUNDS LIKE '%" . $searchedText . "%' OR `category` LIKE '%" . $searchedText . "%' OR `serviceDescription` SOUNDS LIKE '%" . $searchedText . "%' OR `serviceDescription` LIKE '%" . $searchedText . "%' and display='' ORDER BY id DESC ";
                                        $sqlGetService = mysqli_query($conn2, $sqlGetService);

                                        ?>
                                        <script>
                                            var latitude = 0;
                                            var longitude = 0;

                                            function showPositionService() {

                                                var map = L.map('map-service');
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
                                                while ($sqlGetServiceData = mysqli_fetch_assoc($sqlGetService)) {
                                                    if ($sqlGetServiceData['latitude'] != "" and $sqlGetServiceData['latitude'] != "") {
                                                ?>
                                                        geocodeService.reverse().latlng([<?php echo $sqlGetServiceData['latitude'] ?>, <?php echo $sqlGetServiceData['longitude'] ?>]).run(function(error, result) {
                                                            if (error) {
                                                                return;
                                                            }

                                                            marker = new L.marker(result.latlng).addTo(map).bindPopup("( <?php echo $sqlGetServiceData['serviceName'] ?>) " + result.address.Match_addr).openPopup();
                                                            map.setView([<?php echo $sqlGetServiceData['latitude'] ?>, <?php echo $sqlGetServiceData['longitude'] ?>], 15);
                                                        });

                                                <?php
                                                    }
                                                }
                                                ?>


                                            }
                                        </script>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="modal " id="mapping-div-estate">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    Real Estate
                                </div>
                                <div class="modal-body">
                                    <div id="map-estate">
                                        <?php
                                        $searchedText = mysqli_escape_string($conn2, $_GET['search']);
                                        $sqlGetService = "SELECT * FROM `realestate_info` WHERE `estateTitle` SOUNDS LIKE '%" . $searchedText . "%' OR `estateTitle` LIKE '%" . $searchedText . "%' OR `category` SOUNDS LIKE '%" . $searchedText . "%' OR `category` LIKE '%" . $searchedText . "%' OR `estateDescription` SOUNDS LIKE '%" . $searchedText . "%' OR `estateDescription` LIKE '%" . $searchedText . "%' and display='' ORDER BY id DESC ";
                                        $sqlGetService = mysqli_query($conn2, $sqlGetService);

                                        ?>
                                        <script>
                                            var latitude = 0;
                                            var longitude = 0;

                                            function showPositionEstate() {

                                                var map = L.map('map-estate');
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
                                                while ($sqlGetServiceData = mysqli_fetch_assoc($sqlGetService)) {
                                                    if ($sqlGetServiceData['latitude'] != "" and $sqlGetServiceData['latitude'] != "") {
                                                ?>
                                                        geocodeService.reverse().latlng([<?php echo $sqlGetServiceData['latitude'] ?>, <?php echo $sqlGetServiceData['longitude'] ?>]).run(function(error, result) {
                                                            if (error) {
                                                                return;
                                                            }

                                                            marker = new L.marker(result.latlng).addTo(map).bindPopup("( <?php echo $sqlGetServiceData['estateTitle'] ?>) " + result.address.Match_addr).openPopup();
                                                            map.setView([<?php echo $sqlGetServiceData['latitude'] ?>, <?php echo $sqlGetServiceData['longitude'] ?>], 15);
                                                        });

                                                <?php
                                                    }
                                                }
                                                ?>


                                            }
                                        </script>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>








                    <div id="l-result-product" class="l-result-product l-result-stripe">

                        <?php
                        $searchedText = mysqli_escape_string($conn2, $_GET['search']);
                        $sqlGetProduct = "SELECT * FROM `product_info` WHERE `productName` SOUNDS LIKE '%" . $searchedText . "%' OR `productName` LIKE '%" . $searchedText . "%' OR `category` SOUNDS LIKE '%" . $searchedText . "%' OR `category` LIKE '%" . $searchedText . "%' OR `productDescription` SOUNDS LIKE '%" . $searchedText . "%' OR `productDescription` LIKE '%" . $searchedText . "%' and display='' ORDER BY id DESC ";
                        $sqlGetProduct = mysqli_query($conn2, $sqlGetProduct);
                        if (mysqli_num_rows($sqlGetProduct) == 0) {
                        } else {
                        ?>

                            <div class="row no-gutters">
                                <span class="l-section-title">Products</span>
                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#mapping-div-product" onclick="showPositionProduct()"><span class="fas fa-map"></span> Map</button>
                                (<?php echo mysqli_num_rows($sqlGetProduct) ?>) Products Found
                            </div>
                            <div class="row no-gutters l-ad-div">
                                <?php
                                while ($sqlGetProductData = mysqli_fetch_assoc($sqlGetProduct)) {

                                    $sqlGetImage = "SELECT * FROM `product_images` WHERE productUniqueId='" . $sqlGetProductData['productUniqueId'] . "' ORDER BY id Desc LIMIT 1";
                                    $sqlGetImage = mysqli_query($conn2, $sqlGetImage);
                                    $sqlGetImageData = mysqli_fetch_assoc($sqlGetImage);

                                ?>
                                    <div class="col-md-4 row no-gutters">
                                        <div class="col-6">
                                            <div class="l-ad-item-div">
                                                <a href="/productdetail/<?php echo $sqlGetProductData['id'] ?>">
                                                    <div class="l-ad text-center">
                                                        <img src="/res/database/productImages/<?php echo $sqlGetImageData['imageName'] ?>" class="img-fluid l-ad-img" alt="<?php
                                                            echo ucwords($sqlGetProductData['productName']);
                                                            ?>">
                                                    </div>
                                                    <div class="l-ad-description">
                                                        <div class="l-ad-title">
                                                            <?php
                                                            echo ucwords($sqlGetProductData['productName']);
                                                            ?>
                                                        </div>
                                                        <div class="l-ad-price">

                                                            <div class="l-changed-price">
                                                                <?php echo $sqlGetProductData['currency'] ?> <?php echo $sqlGetProductData['price'] ?>

                                                            </div>
                                                            <span class="l-old-price">
                                                                <span class="l-percentage-off">
                                                                </span>
                                                                <strike></strike>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <?php
                                        $sqlGetProductData = mysqli_fetch_assoc($sqlGetProduct);
                                        if (isset($sqlGetProductData)) {
                                            $sqlGetImage = "SELECT * FROM `product_images` WHERE productUniqueId='" . $sqlGetProductData['productUniqueId'] . "' ORDER BY id Desc LIMIT 1";
                                            $sqlGetImage = mysqli_query($conn2, $sqlGetImage);
                                            $sqlGetImageData = mysqli_fetch_assoc($sqlGetImage);

                                        ?>
                                            <div class="col-6">
                                                <div class="l-ad-item-div">
                                                    <a href="/productdetail/<?php echo $sqlGetProductData['id'] ?>">
                                                        <div class="l-ad text-center">
                                                            <img src="/res/database/productImages/<?php echo $sqlGetImageData['imageName'] ?>" class="img-fluid l-ad-img" alt="<?php
                                                                echo ucwords($sqlGetProductData['productName']);
                                                                ?>">
                                                        </div>
                                                        <div class="l-ad-description">
                                                            <div class="l-ad-title">
                                                                <?php
                                                                echo ucwords($sqlGetProductData['productName']);
                                                                ?>
                                                            </div>
                                                            <div class="l-ad-price">

                                                                <div class="l-changed-price">
                                                                    <?php echo $sqlGetProductData['currency'] ?> <?php echo $sqlGetProductData['price'] ?>

                                                                </div>
                                                                <span class="l-old-price">
                                                                    <span class="l-percentage-off">
                                                                    </span>
                                                                    <strike></strike>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
                        <?php
                        }
                        ?>
                    </div>



<?php
if(!$isWebView){
?>


<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Ad1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3866603838151846"
     data-ad-slot="4497173310"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>


<?php
}
?>






                    <div id="l-result-service" class="l-result-product l-result-stripe">

                        <?php
                        $searchedText = mysqli_escape_string($conn2, $_GET['search']);
                        $sqlGetProduct = "SELECT * FROM `service_info` WHERE `serviceName` SOUNDS LIKE '%" . $searchedText . "%' OR `serviceName` LIKE '%" . $searchedText . "%' OR `category` SOUNDS LIKE '%" . $searchedText . "%' OR `category` LIKE '%" . $searchedText . "%' OR `serviceDescription` SOUNDS LIKE '%" . $searchedText . "%' OR `serviceDescription` LIKE '%" . $searchedText . "%' and display='' ORDER BY id DESC ";
                        $sqlGetProduct = mysqli_query($conn2, $sqlGetProduct);
                        if (mysqli_num_rows($sqlGetProduct) == 0) {
                        } else {
                        ?>

                            <div class="row no-gutters">
                                <span class="l-section-title">Services</span>
                                <button class="btn btn-warning btn-sm" onclick="showPositionService()" data-toggle="modal" data-target="#mapping-div-service"><span class="fas fa-map"></span> Map</button>
                                (<?php echo mysqli_num_rows($sqlGetProduct) ?>) Products Found
                            </div>
                            <div class="row no-gutters l-ad-div">
                                <?php
                                while ($sqlGetProductData = mysqli_fetch_assoc($sqlGetProduct)) {

                                    $sqlGetImage = "SELECT * FROM `service_images` WHERE productUniqueId='" . $sqlGetProductData['productUniqueId'] . "' ORDER BY id Desc LIMIT 1";
                                    $sqlGetImage = mysqli_query($conn2, $sqlGetImage);
                                    $sqlGetImageData = mysqli_fetch_assoc($sqlGetImage);

                                ?>
                                    <div class="col-md-4 row no-gutters">
                                        <div class="col-6">
                                            <div class="l-ad-item-div">
                                                <a href="/servicedetail/<?php echo $sqlGetProductData['id'] ?>">
                                                    <div class="l-ad text-center">
                                                        <img src="/res/database/serviceImages/<?php echo $sqlGetImageData['imageName'] ?>" class="img-fluid l-ad-img" alt="<?php
                                                            echo ucwords($sqlGetProductData['serviceName']);
                                                            ?>">
                                                    </div>
                                                    <div class="l-ad-description">
                                                        <div class="l-ad-title">
                                                            <?php
                                                            echo ucwords($sqlGetProductData['serviceName']);
                                                            ?>
                                                        </div>
                                                        <div class="l-ad-price">

                                                            <div class="l-changed-price">
                                                                <?php echo $sqlGetProductData['currency'] ?> <?php echo $sqlGetProductData['price'] ?>

                                                            </div>
                                                            <span class="l-old-price">
                                                                <span class="l-percentage-off">
                                                                </span>
                                                                <strike></strike>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <?php
                                        $sqlGetProductData = mysqli_fetch_assoc($sqlGetProduct);
                                        if (isset($sqlGetProductData)) {
                                            $sqlGetImage = "SELECT * FROM `service_images` WHERE productUniqueId='" . $sqlGetProductData['productUniqueId'] . "' ORDER BY id Desc LIMIT 1";
                                            $sqlGetImage = mysqli_query($conn2, $sqlGetImage);
                                            $sqlGetImageData = mysqli_fetch_assoc($sqlGetImage);

                                        ?>
                                            <div class="col-6">
                                                <div class="l-ad-item-div">
                                                    <a href="/servicedetail/<?php echo $sqlGetProductData['id'] ?>">
                                                        <div class="l-ad text-center">
                                                            <img src="/res/database/serviceImages/<?php echo $sqlGetImageData['imageName'] ?>" class="img-fluid l-ad-img" alt="<?php
                                                            echo ucwords($sqlGetProductData['serviceName']);
                                                            ?>">
                                                        </div>
                                                        <div class="l-ad-description">
                                                            <div class="l-ad-title">
                                                                <?php
                                                                echo ucwords($sqlGetProductData['serviceName']);
                                                                ?>
                                                            </div>
                                                            <div class="l-ad-price">

                                                                <div class="l-changed-price">
                                                                    <?php echo $sqlGetProductData['currency'] ?> <?php echo $sqlGetProductData['price'] ?>

                                                                </div>
                                                                <span class="l-old-price">
                                                                    <span class="l-percentage-off">
                                                                    </span>
                                                                    <strike></strike>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
                        <?php
                        }
                        ?>
                    </div>








                    <div id="l-result-estate" class="l-result-product l-result-stripe">

                        <?php
                        $searchedText = mysqli_escape_string($conn2, $_GET['search']);
                        $sqlGetService = "SELECT * FROM `realestate_info` WHERE `estateTitle` SOUNDS LIKE '%" . $searchedText . "%' OR `estateTitle` LIKE '%" . $searchedText . "%' OR `category` SOUNDS LIKE '%" . $searchedText . "%' OR `category` LIKE '%" . $searchedText . "%' OR `estateDescription` SOUNDS LIKE '%" . $searchedText . "%' OR `estateDescription` LIKE '%" . $searchedText . "%' and display='' ORDER BY id DESC ";
                        $sqlGetService = mysqli_query($conn2, $sqlGetService);
                        if (mysqli_num_rows($sqlGetProduct) == 0) {
                        } else {
                        ?>

                            <div class="row no-gutters">
                                <span class="l-section-title">Real Estate</span>
                                <button class="btn btn-warning btn-sm" onclick="showPositionEstate()" data-toggle="modal" data-target="#mapping-div-estate"><span class="fas fa-map"></span> Map</button>
                                (<?php echo mysqli_num_rows($sqlGetService) ?>) Products Found
                            </div>
                            <div class="row no-gutters l-ad-div">
                                <?php
                                while ($sqlGetServiceData = mysqli_fetch_assoc($sqlGetService)) {

                                    $sqlGetImage = "SELECT * FROM `realestate_images` WHERE productUniqueId='" . $sqlGetServiceData['productUniqueId'] . "' ORDER BY id Desc LIMIT 1";
                                    $sqlGetImage = mysqli_query($conn2, $sqlGetImage);
                                    $sqlGetImageData = mysqli_fetch_assoc($sqlGetImage);

                                ?>
                                    <div class="col-md-4 row no-gutters">
                                        <div class="col-6">
                                            <div class="l-ad-item-div">
                                                <a href="/estatedetail/<?php echo $sqlGetServiceData['id'] ?>">
                                                    <div class="l-ad text-center">
                                                        <img src="/res/database/estateImages/<?php echo $sqlGetImageData['imageName'] ?>" class="img-fluid l-ad-img" alt="<?php
                                                            echo ucwords($sqlGetServiceData['estateTitle']);
                                                            ?>">
                                                    </div>
                                                    <div class="l-ad-description">
                                                        <div class="l-ad-title">
                                                            <?php
                                                            echo ucwords($sqlGetServiceData['estateTitle']);
                                                            ?>
                                                        </div>
                                                        <div class="l-ad-price">

                                                            <div class="l-changed-price">
                                                                <?php echo $sqlGetServiceData['currency'] ?> <?php echo $sqlGetServiceData['price'] ?>

                                                            </div>
                                                            <span class="l-old-price">
                                                                <span class="l-percentage-off">
                                                                </span>
                                                                <strike></strike>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <?php
                                        $sqlGetServiceData = mysqli_fetch_assoc($sqlGetService);
                                        if (isset($sqlGetServiceData)) {
                                            $sqlGetImage = "SELECT * FROM `realestate_images` WHERE productUniqueId='" . $sqlGetServiceData['productUniqueId'] . "' ORDER BY id Desc LIMIT 1";
                                            $sqlGetImage = mysqli_query($conn2, $sqlGetImage);
                                            $sqlGetImageData = mysqli_fetch_assoc($sqlGetImage);

                                        ?>
                                            <div class="col-6">
                                                <div class="l-ad-item-div">
                                                    <a href="/estatedetail/<?php echo $sqlGetServiceData['id'] ?>">
                                                        <div class="l-ad text-center">
                                                            <img src="/res/database/estateImages/<?php echo $sqlGetImageData['imageName'] ?>" class="img-fluid l-ad-img" alt="<?php
                                                            echo ucwords($sqlGetServiceData['estateTitle']);
                                                            ?>">
                                                        </div>
                                                        <div class="l-ad-description">
                                                            <div class="l-ad-title">
                                                                <?php
                                                                echo ucwords($sqlGetServiceData['estateTitle']);
                                                                ?>
                                                            </div>
                                                            <div class="l-ad-price">

                                                                <div class="l-changed-price">
                                                                    <?php echo $sqlGetServiceData['currency'] ?> <?php echo $sqlGetServiceData['price'] ?>

                                                                </div>
                                                                <span class="l-old-price">
                                                                    <span class="l-percentage-off">
                                                                    </span>
                                                                    <strike></strike>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
                        <?php
                        }
                        ?>
                    </div>
<?php
if(!$isWebView){
?>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Ad1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3866603838151846"
     data-ad-slot="4497173310"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>


<?php
}
?>


                </div>
            </div>
        </div>
    </div>


</body>

</html>