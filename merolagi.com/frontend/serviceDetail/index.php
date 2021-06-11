<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
if (strpos($_SERVER['HTTP_USER_AGENT'], 'wv') == true) {
    $isWebView = false;
} else {
    $isWebView = false;
}
//Global Imports
?>
<!DOCTYPE html>
<html lang="en">
<?php

$getInfo = "SELECT * FROM `service_info` where id='" . $_GET['productId'] . "'";
$getInfo = mysqli_query($conn2, $getInfo);
$getInfoData = mysqli_fetch_assoc($getInfo);
$getFeatures = "SELECT * FROM `service_features` where productUniqueId='" . $getInfoData['productUniqueId'] . "'";
$getFeatures = mysqli_query($conn2, $getFeatures);
$getImages = "SELECT * FROM `service_images` where productUniqueId='" . $getInfoData['productUniqueId'] . "'";
$getImages = mysqli_query($conn2, $getImages);
$getImagesData = mysqli_fetch_assoc($getImages);

?>

<head>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/res/imports/index.php";
    ?>
    <link rel="stylesheet" href="/header.css">
    <script src="/index.js"></script>

    <script src="/frontend/serviceDetail/script.js"></script>
    <link rel="stylesheet" href="/frontend/serviceDetail/style.css">


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <!-- Load Leaflet from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

    <!-- Load Esri Leaflet from CDN -->
    <script src="https://unpkg.com/esri-leaflet@2.5.0/dist/esri-leaflet.js" integrity="sha512-ucw7Grpc+iEQZa711gcjgMBnmd9qju1CICsRaryvX7HJklK0pGl/prxKvtHwpgm5ZHdvAil7YPxI1oWPOWK3UQ==" crossorigin=""></script>

    <!-- Load Esri Leaflet Geocoder from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.css" integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g==" crossorigin="">
    <script src="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.js" integrity="sha512-HrFUyCEtIpxZloTgEKKMq4RFYhxjJkCiF5sDxuAokklOeZ68U2NPfh4MFtyIVWlsKtVbK5GD2/JzFyAfvT5ejA==" crossorigin=""></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/default.min.css" />


    <meta name="Keywords" content="<?php echo ucwords($getInfoData['serviceName']) ?>,merolagi, find a job, realestate, buy products, nepal">
    <meta property="og:title" content="<?php echo ucwords($getInfoData['serviceName']) ?>" />
    <meta property="og:url" content="<?php echo 'https://merolagi.com/servicedetail/' . $_GET['productId'] ?>" />
    <meta property=" og:image" content="https://merolagi.com/res/database/serviceImages/<?php echo $getImagesData['imageName'] ?>" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucwords($getInfoData['serviceName']) ?></title>
</head>

<body>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';

    if (isset($_GET['response'])) {
        if ($_GET['response'] == "success") {
    ?>
            <script>
                alertify.alert("Successfully Requested For This Service.<br> You Will Get A Call/ Email").setHeader("Merolagi.com");
            </script>
        <?php
        }
        if ($_GET['response'] == "negotiateSent") {
        ?>
            <script>
                alertify.alert("We Have Requested For The Negotiation.<br> You Will Get A Call/ Email").setHeader("Merolagi.com");
            </script>
    <?php
        }
    }

    ?>

    <div class="l-main-container">
        <div class="row no-gutters">
            <div class="col-md-4  text-center">
                <div class="l-main-image-container">
                    <img src="/res/database/serviceImages/<?php echo $getImagesData['imageName'] ?>" class="img-fluid " alt="<?php echo ucwords($getInfoData['serviceName']) ?>">
                </div>

                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
                <?php
                if (!$isWebView) {
                ?>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- serviceDetails -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3866603838151846" data-ad-slot="5970037084" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                <?php
                }
                ?>
            </div>
            <div class="col-md-4 l-product-detail-div">
                <a class="l-view-post-btn btn btn-primary" style="color:white;font-size:17px;margin:10px" data-toggle="modal" data-target="#mapping-div-2" onclick="showPosition2(<?php echo $getInfoData['latitude'] ?>,<?php echo $getInfoData['longitude'] ?>);">
                    <span class="fas fa-2x fa-map-marked-alt"></span>
                    Location
                </a>
                <?php
                if (isset($_SESSION['employerId'])) {
                    $sqlCheckApplied = "SELECT * FROM `deal_services` WHERE productId='" . $getInfoData['productUniqueId'] . "' and customerId='" . $_SESSION['employerId'] . "'";
                    $sqlCheckApplied = mysqli_query($conn3, $sqlCheckApplied);
                    $sqlCheckAppliedData = mysqli_fetch_assoc($sqlCheckApplied);
                    if (mysqli_num_rows($sqlCheckApplied) > 0) {
                ?>
                        <button class="btn btn-success container-fluid l-job-applied-check-btn">You Have Already Applied To This Job</button>
                        <a href="/employer/manageServices/minechatUser/index.php?productId=<?php echo $getInfoData['productUniqueId'] ?>&transactionId=<?php echo $sqlCheckAppliedData['transactionId'] ?>" target="_blank">
                            <button class="btn btn-info container-fluid l-job-applied-check-btn"><span class="fas fa-comments"></span> Open MineChat Message</button>
                        </a>
                    <?php
                    } else {
                    ?>
                        <button class="btn btn-warning container-fluid l-job-applied-check-btn">You Havent Applied To This Job Yet</button>

                    <?php
                    }
                } else {
                    ?>
                    <button class="btn btn-warning container-fluid l-job-applied-check-btn">You Havent Applied To This Job Yet</button>
                <?php
                }
                ?>
                <span class="l-product-name"><?php echo ucwords($getInfoData['serviceName']) ?></span>
                <span class="l-product-price"><span class="l-product-label"> Price:</span> <?php echo $getInfoData['currency'] ?><span class="l-price"><?php echo $getInfoData['price'] ?></span>
                    <?php
                    echo "For " . $getInfoData['deadline'] . " days";
                    ?>
                </span>
                <div class="l-product-info-table">
                    <?php
                    $i = 0;
                    while ($getFeaturesData = mysqli_fetch_assoc($getFeatures) and $i < 6) {
                        $i++;
                    ?>
                        <span class="l-product-info-table-item row no-gutters">
                            <span class="l-product-label-2 col-5"> <?php echo ucfirst($getFeaturesData['productFeature']) ?>:</span>
                            <span class=" col-7"> <?php echo ucfirst($getFeaturesData['productFeatureValue']) ?></span>
                        </span>
                    <?php
                    }
                    ?>


                </div>
            </div>
            <div class="modal" id="mapping-div-2">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            Product Location
                        </div>
                        <div class="modal-body l-map-modal">
                            <div id="map-2"></div>
                            <script>
                                function showPosition2(latitude, longitude) {

                                    var map = L.map('map-2');
                                    map.invalidateSize();


                                    L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=vttW6pI9EIrxJQEd3Cuh', {
                                        attribute: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
                                        zoomOffset: -1,
                                        tileSize: 512,
                                    }).addTo(map);
                                    var i = 0;
                                    var geocodeService = L.esri.Geocoding.geocodeService();
                                    var marker;

                                    geocodeService.reverse().latlng([latitude, longitude]).run(function(error, result) {
                                        if (error) {
                                            return;
                                        }
                                        marker = new L.marker(result.latlng).addTo(map).bindPopup(result.address.Match_addr).openPopup();
                                        map.setView([latitude, longitude], 15);
                                    });
                                }
                            </script>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>





            <div class="col-md-4 text-center">
                <div class="l-contact-seller-div text-center row no-gutters">
                    <button type="button" class="btn btn-success l-buy-btn row no-gutters" style="padding: 10px;" data-target="#makeADeal" data-toggle="modal" onclick="getLocationBasic()">Apply For This Job</button>
                    <button type="button" class="btn btn-info l-buy-btn row no-gutters" style="padding: 10px;" data-target="#negotiateProducts" data-toggle="modal">Negotiate</button>
                </div>
                <?php
                $getEmployerId = "SELECT employerUniqueId FROM `service_info` where productUniqueId='" . $getInfoData['productUniqueId'] . "'";
                $getEmployerId = mysqli_query($conn2, $getEmployerId);
                $getEmployerIdData = mysqli_fetch_assoc($getEmployerId);

                $sqlEmployerProfileGet = "SELECT * FROM `employer_profile` WHERE `uniqueUserId`='" . $getEmployerIdData['employerUniqueId'] . "'";
                $sqlEmployerProfileGet = mysqli_query($conn4, $sqlEmployerProfileGet);
                $sqlEmployerProfileGetData = mysqli_fetch_assoc($sqlEmployerProfileGet);

                $sqlEmployerAddressGet = "SELECT * FROM `employer_address_info` WHERE `uniqueUserId`='" . $getEmployerIdData['employerUniqueId'] . "'";
                $sqlEmployerAddressGet = mysqli_query($conn4, $sqlEmployerAddressGet);
                $sqlEmployerAddressGetData = mysqli_fetch_assoc($sqlEmployerAddressGet);

                $sqlEmployerCompanyGet = "SELECT * FROM `employer_company_info` WHERE `uniqueUserId`='" . $getEmployerIdData['employerUniqueId'] . "'";
                $sqlEmployerCompanyGet = mysqli_query($conn4, $sqlEmployerCompanyGet);
                $sqlEmployerCompanyGetData = mysqli_fetch_assoc($sqlEmployerCompanyGet);

                ?>
                <div class="l-company-div text-center">
                    <img src="/res/database/employerProfileImages/<?php echo $sqlEmployerProfileGetData['profilePhoto']  ?>" class=" img-fluid l-company-detail-icon" alt="">
                    <div class="container-fluid no-gutters text-center">
                        <span class="l-company-location"><?php echo ucwords($sqlEmployerProfileGetData['name'])  ?></span>
                        <br>
                        <span class="l-company-location"><span class="fas fa-map-marker-alt"></span><?php echo ucwords($sqlEmployerAddressGetData['city'])  ?>, <?php echo ucwords($sqlEmployerAddressGetData['country'])  ?></span>
                    </div>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <div class="l-company-phone-div">
                        <span class="fas fa-phone-volume"></span>
                        Call
                        <span class="l-company-phone-no">
                            <?php echo ucwords($sqlEmployerProfileGetData['mobile'])  ?>
                        </span>
                    </div>
                </div>
                <div class="l-contact-seller-div text-center">
                    <button type="button" class="btn btn-primary l-contact-seller">Contact Your Seller</button>
                    <button type="button" class="btn btn-outline-primary l-contact-seller">Get Latest Price</button>
                </div>
            </div>
        </div>




        <form method="POST" action="/frontend/serviceDetail/action.php">
            <div class="modal fade" id="makeADeal">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-title">Are Your Sure You Want To Apply For This Job?</div>
                        </div>
                        <div class="modal-body row no-gutters">
                            <div class="l-company-div text-center col-md-6">
                                <img src="/res/database/employerProfileImages/<?php echo $sqlEmployerProfileGetData['profilePhoto']  ?>" class=" img-fluid l-company-detail-icon" alt="">
                                <div class="container-fluid no-gutters text-center">
                                    <span class="l-company-location"><?php echo ucwords($sqlEmployerProfileGetData['name'])  ?></span>
                                    <br>
                                    <span class="l-company-location"><span class="fas fa-map-marker-alt"></span><?php echo ucwords($sqlEmployerAddressGetData['city'])  ?>, <?php echo ucwords($sqlEmployerAddressGetData['country'])  ?></span>
                                </div>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <div class="l-company-phone-div">
                                    <span class="fas fa-phone-volume"></span>
                                    Call
                                    <span class="l-company-phone-no">
                                        <?php echo ucwords($sqlEmployerProfileGetData['mobile'])  ?>
                                    </span>
                                </div>
                            </div>
                            <div class="l-company-div text-center col-md-6">

                                <div class="container-fluid text-left l-make-deal-div">
                                    <?php
                                    if (isset($_SESSION['employerId'])) {
                                    ?>
                                        <span class="l-product-detail-title">Service Detail:</span>
                                        <span class="l-product-modal-title">Service Name:<span class="l-product-modal-label"><?php echo ucwords($getInfoData['serviceName']) ?></span></span>
                                        <span class="l-product-modal-title"> Price:<span class="l-product-modal-label"><?php echo $getInfoData['currency'] ?><?php echo $getInfoData['price'] ?>
                                                <?php

                                                echo "For " . $getInfoData['deadline'] . " days";

                                                ?>
                                            </span>
                                        </span>
                                        <span class="l-product-modal-title">Your Phone: <input type="text" placeholder="Phone No." class="form-control container-fluid" name="phoneNumber" required></span>
                                        <span class="l-product-modal-title">Hiring Time: <input type="number" placeholder="Time In Days" class="form-control" name="hiringTime" required></span>
                                        <span class="l-product-modal-title">Location: </span>
                                        <input type="button" value="Choose Location" class="container-fluid btn btn-warning" name="location" onclick="getLocation();" data-target="#mapping-div" data-toggle="modal">
                                    <?php
                                    } else {
                                    ?>
                                        <a href="/login"><input type="button" class="btn btn-success container-fluid" value="Sign In To Apply For This Job"></a>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <script>
                                    var firstCheck = 1;

                                    function getLocationBasic() {
                                        if (firstCheck == 1) {
                                            if (navigator.geolocation) {
                                                navigator.geolocation.getCurrentPosition(showPositionBasic);
                                            } else {
                                                x.innerHTML = "Geolocation is not supported by this browser.";
                                            }
                                            firstCheck = 0;
                                        }
                                    }

                                    function showPositionBasic(position) {
                                        var geocodeService = L.esri.Geocoding.geocodeService();

                                        latitude = position.coords.latitude;
                                        longitude = position.coords.longitude;
                                        if (latitude == null) {
                                            latitude = 27.68626067122141;
                                            document.getElementById('address').value = 'Kathmandu';

                                        }
                                        if (longitude == null) {
                                            latitude = 27.68626067122141;
                                            document.getElementById('address').value = 'Kathmandu';
                                        }

                                        geocodeService.reverse().latlng([latitude, longitude]).run(function(error, result) {
                                            if (error) {
                                                return;
                                            }
                                            document.getElementById('latitude').value = latitude;
                                            document.getElementById('longitude').value = longitude;
                                            document.getElementById('address').value = result.address.Match_addr;

                                        });
                                    }
                                </script>
                                <input type="text" name="latitude" id="latitude" style="display: none;">
                                <input type="text" name="longitude" id="longitude" style="display: none;">
                                <input type="text" name="address" id="address" style="display: none;">
                                <input type="text" name="productId" id="productId" value="<?php echo $getInfoData['productUniqueId']; ?>" style="display: none;">


                            </div>

                        </div>
                        <div class="modal-footer">
                            <?php
                            if (isset($_SESSION['employerId'])) {
                            ?>
                                <button type="submit" class="btn btn-success" name="makeADeal">Apply For This Job</button>
                            <?php
                            }
                            ?>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>




            <div class="modal " id="mapping-div">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            Map Your Location
                        </div>
                        <div class="modal-body">
                            <div id="map">
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
                                        var geocodeService = L.esri.Geocoding.geocodeService();

                                        latitude = position.coords.latitude;
                                        longitude = position.coords.longitude;

                                        var map = L.map('map');
                                        map.invalidateSize();

                                        map.setView([latitude, longitude], 15);
                                        L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=vttW6pI9EIrxJQEd3Cuh', {
                                            attribute: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
                                            zoomOffset: -1,
                                            tileSize: 512,
                                        }).addTo(map);

                                        var marker;
                                        geocodeService.reverse().latlng([latitude, longitude]).run(function(error, result) {
                                            if (error) {
                                                return;
                                            }
                                            document.getElementById('address').value = result.address.Match_addr;

                                            marker = new L.marker(result.latlng).addTo(map).bindPopup(result.address.Match_addr).openPopup();
                                        });
                                        document.getElementById('latitude').value = latitude;
                                        document.getElementById('longitude').value = longitude;
                                        var i = 0;

                                        map.on('click', function(e) {
                                            if (marker) {
                                                map.removeLayer(marker);
                                            }
                                            document.getElementById('latitude').value = e.latlng.lat;
                                            document.getElementById('longitude').value = e.latlng.lng;
                                            geocodeService.reverse().latlng(e.latlng).run(function(error, result) {
                                                if (error) {
                                                    return;
                                                }
                                                document.getElementById('address').value = result.address.Match_addr;

                                                marker = new L.marker(result.latlng).addTo(map).bindPopup(result.address.Match_addr).openPopup();
                                            });
                                        });



                                    }
                                </script>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" id="innerModal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>


        <form method="POST" action="/frontend/serviceDetail/action.php">
            <div class="modal fade" id="negotiateProducts">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-title">Negotiate Service</div>
                        </div>
                        <div class="modal-body row no-gutters">
                            <div class="l-company-div text-center col-md-6">
                                <img src="/res/database/employerProfileImages/<?php echo $sqlEmployerProfileGetData['profilePhoto']  ?>" class=" img-fluid l-company-detail-icon" alt="<?php echo ucwords($sqlEmployerProfileGetData['name'])  ?>">
                                <div class="container-fluid no-gutters text-center">
                                    <span class="l-company-location"><?php echo ucwords($sqlEmployerProfileGetData['name'])  ?></span>
                                    <br>
                                    <span class="l-company-location"><span class="fas fa-map-marker-alt"></span><?php echo ucwords($sqlEmployerAddressGetData['city'])  ?>, <?php echo ucwords($sqlEmployerAddressGetData['country'])  ?></span>
                                </div>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <div class="l-company-phone-div">
                                    <span class="fas fa-phone-volume"></span>
                                    Call
                                    <span class="l-company-phone-no">
                                        <?php echo ucwords($sqlEmployerProfileGetData['mobile'])  ?>
                                    </span>
                                </div>
                            </div>
                            <div class="l-company-div text-center col-md-6">

                                <div class="container-fluid text-left l-make-deal-div">
                                    <?php
                                    if (isset($_SESSION['employerId'])) {
                                    ?>
                                        <span class="l-product-detail-title">Service Detail:</span>
                                        <span class="l-product-modal-title">Service Name:<span class="l-product-modal-label"><?php echo ucwords($getInfoData['serviceName']) ?></span></span>
                                        <span class="l-product-modal-title"> Price:<span class="l-product-modal-label"><?php echo $getInfoData['currency'] ?><?php echo $getInfoData['price'] ?>
                                            </span>
                                        </span>
                                        <span class="l-product-modal-title" required>What Price Do You Want The Job For: <input type="number" placeholder="Price" class="form-control" name="price" required></span>
                                        <Textarea class="form-control l-form-control" name="comment" placeholder="Any Comments" style="margin-top: 20px;"></Textarea>
                                    <?php
                                    } else {
                                    ?>
                                        <a href="/login"><input type="button" class="btn btn-success container-fluid" value="Sign In To Deal This Product"></a>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <input type="text" name="productId" id="productId" value="<?php echo $getInfoData['productUniqueId'] ?>" style="display: none;">


                            </div>

                        </div>
                        <div class="modal-footer">
                            <?php
                            if (isset($_SESSION['employerId'])) {
                            ?>
                                <button type="submit" class="btn btn-success" name="negotiateBtn">Negotiate</button>
                            <?php
                            }
                            ?>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>



        <div class="row no-gutters l-section-2">
            <div class="col-md-7">
                <span class="l-crimson-title">Service Details</span>
                <div class="l-product-info-table">
                    <?php

                    $getFeatures = "SELECT * FROM `service_features` where productUniqueId='" . $getInfoData['productUniqueId'] . "'";
                    $getFeatures = mysqli_query($conn2, $getFeatures);
                    while ($getFeaturesData = mysqli_fetch_assoc($getFeatures)) {

                    ?>
                        <span class="l-product-info-table-item row no-gutters">
                            <span class="l-product-label-2 col-5"> <?php echo ucfirst($getFeaturesData['productFeature']) ?>:</span>
                            <span class=" col-7"> <?php echo ucfirst($getFeaturesData['productFeatureValue']) ?></span>
                        </span>
                    <?php
                    }
                    ?>
                </div>
                <span class="l-crimson-title">Service Description</span>
                <div class="l-product-info-table text-justify">
                    <?php echo $getInfoData['serviceDescription'] ?>
                </div>
                <?php
                if (!$isWebView) {
                ?>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- serviceDetails -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3866603838151846" data-ad-slot="5970037084" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                <?php
                }
                ?>
                <span class="l-crimson-title">Images</span>

                <div class="container-fluid l-main-image">
                    <?php
                    $getImages = "SELECT * FROM `service_images` where productUniqueId='" . $getInfoData['productUniqueId'] . "'";
                    $getImages = mysqli_query($conn2, $getImages);
                    while ($getImagesData = mysqli_fetch_assoc($getImages)) {
                    ?>
                        <img src="/res/database/serviceImages/<?php echo $getImagesData['imageName'] ?>" class="img-fluid l-main-image" alt="">
                    <?php
                    }
                    ?>
                </div>
                <button type="button" class="btn btn-primary l-contact-seller-2">
                    GET THE LATEST PRICE
                </button>
    <div class='container-fluid'>
        <div class='row no-gutters'>
    <div class="col-md-4">
                             <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Blog Sidebar -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3866603838151846"
     data-ad-slot="1114301813"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
    <div class="col-md-4">
                             <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Blog Sidebar -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3866603838151846"
     data-ad-slot="1114301813"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
    <div class="col-md-4">
                             <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Blog Sidebar -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3866603838151846"
     data-ad-slot="1114301813"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
    <div class="col-md-4">
                             <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Blog Sidebar -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3866603838151846"
     data-ad-slot="1114301813"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
     <div class="col-md-4">
                             <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Blog Sidebar -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3866603838151846"
     data-ad-slot="1114301813"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
     <div class="col-md-4">
                             <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Blog Sidebar -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3866603838151846"
     data-ad-slot="1114301813"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
        </div>

    </div>
            </div>



            <div class="col-md-5 l-sticky-div">
                <div class="sticky">
                    <div class="row no-gutters l-sticky-title">
                        Send An Inquiry
                    </div>
                    <div class="row no-gutters">
                        <input type="text" class="form-control l-inquiry-form-control" placeholder="Enter Your Name">
                        <input type="text" class="form-control l-inquiry-form-control" placeholder="Enter Your Email">
                        <textarea class="form-control" name="" id="" cols="30" rows="10">Enter Your Inquiry</textarea>
                        <button type="submit" class="btn btn-success l-submit-inquiry">SUBMIT INQUIRY</button>
                    </div>
                    <div class="row no-gutters l-email-seller">
                        <button type="button" class="btn btn-warning l-submit-inquiry"><span class="fas fa-envelope-open-text"></span> Email</button>
                        <button type="button" class="btn btn-danger l-submit-inquiry"><span class="fas fa-envelope-open-text"></span> Report</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f5fae38bbc539bb"></script>
</body>

</html>