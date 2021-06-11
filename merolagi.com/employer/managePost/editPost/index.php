<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
include $_SERVER['DOCUMENT_ROOT'] . "/res/important/employerSession.php";
//Global Imports
?>
<?php
if (isset($_GET['productId'])) {
    $sqlAuthCheck2 = "SELECT employerUniqueId FROM `product_info` WHERE `productUniqueId`='" . $_GET['productId'] . "'";
    $sqlAuthCheck2 = mysqli_query($conn2, $sqlAuthCheck2);
    $sqlAuthCheckData2 = mysqli_fetch_assoc($sqlAuthCheck2);
    if ($_SESSION['employerId'] == $sqlAuthCheckData2['employerUniqueId']) {
    } else {
        header("Location: /login");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/res/imports/index.php";
    ?>

    <script src="/employer/header/index.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="/header.css">
    <link rel="stylesheet" href="style.css">
    <script src="/res/packages/ckeditor/ckeditor.js"></script>
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


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';


    if (isset($_GET['update'])) {
        if ($_GET['update'] == "Successful") {
    ?>
            <script>
                alertify.alert("Successfully Updated This Product Post.").setHeader("Merolagi.com");
            </script>
    <?php
        }
    }

    ?>


    <?php
    $sqlProductInfo = "SELECT * FROM `product_info` WHERE productUniqueId='" . $_GET['productId'] . "'";
    $sqlProductInfo = mysqli_query($conn2, $sqlProductInfo);
    $sqlProductInfoData = mysqli_fetch_assoc($sqlProductInfo);

    $sqlProductFeature = "SELECT * FROM `product_features` WHERE productUniqueId='" . $_GET['productId'] . "'";
    $sqlProductFeature = mysqli_query($conn2, $sqlProductFeature);

    $sqlProductImage = "SELECT * FROM `product_images` WHERE productUniqueId='" . $_GET['productId'] . "'";
    $sqlProductImage = mysqli_query($conn2, $sqlProductImage);

    ?>


    <div class="l-container-padding text-center container-fluid">
        <div class=" l-container-title container-fluid text-center">
            <span class=" l-container-title-text">Edit Products Here</span>
        </div>
        <form action="action.php?productId=<?php echo $_GET['productId']?>" method="POST" enctype="multipart/form-data" class=" l-main-container-section row no-gutters container-fluid" id="sellDiv">
            <div class="col-md-6">
                <div class="l-product detail-container">
                    <div class="container-fluid text-center">
                    <input type="button" name="" value="Click Here To Sell At Certain Location" onclick="getLocation();" data-toggle="modal" data-target="#mapping-div" class="btn btn-success w-100">
                    </div>
                    <input type="text" class="form-control l-form-control" value="<?php echo ucwords($sqlProductInfoData['productName']) ?>" placeholder="Product Name" name="productName" maxlength="50" required>
                    <select class="form-control l-form-control" name="category" required>
                        <option value="<?php echo ucwords($sqlProductInfoData['category']) ?>"><?php echo ucwords($sqlProductInfoData['category']) ?></option>
                        <option value="">Categories</option>
                        <option value="Land">Land</option>
                        <option value="Agriculture">Agriculture</option>
                        <option value="Animal Products">Animal Products</option>
                        <option value="Clothing">Clothing</option>
                        <option value="Technology">Technology</option>
                        <option value="Accessories">Accessories</option>
                    </select>
                    <span class="l-crimson-title">Post Expiry Time</span>
                    <select class="form-control l-form-control" name="deadline" required>
                        <option value="<?php echo ucwords($sqlProductInfoData['deadline']) ?>"><?php echo ucwords($sqlProductInfoData['deadline']) ?></option>
                        <option value="">Duration</option>
                        <option value="1">1 Day</option>
                        <option value="7">7 Days</option>
                        <option value="15">15 Days</option>
                        <option value="30">1 Month</option>
                        <option value="90">3 Months</option>
                        <option value="180">6 Months</option>
                        <option value="365">1 Year</option>
                    </select>
                    <span class="l-crimson-title">Product Description</span>
                    <br>
                    <br>
                    <textarea name="productDescription" id="productDescription" rows="10" cols="70" required><?php echo ucwords($sqlProductInfoData['productDescription']) ?></textarea>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor 4
                        // instance, using default configuration.
                        CKEDITOR.replace('productDescription');
                    </script>
                </div>
            </div>
            <div class="col-md-6">
                <span class="l-crimson-title">Pricing</span>
                <span style="display: flex;">
                    <select class="form-control l-form-control l-field-e-1" name="currency" required>
                        <option value="<?php echo ucwords($sqlProductInfoData['currency']) ?>"><?php echo ucwords($sqlProductInfoData['currency']) ?></option>
                        <option value="">Currency</option>
                        <option value="Rs.">Rs.</option>
                        <option value="$">$</option>
                        <option value="&#65505;">&#65505;</option>
                    </select>
                    <input type="number" name="price" class="form-control l-form-control l-field-e-2" value="<?php echo ucwords($sqlProductInfoData['price']) ?>" placeholder="Price" onKeyPress="if(this.value.length==9) return false;" required>
                    <input list="quantityList" name="quantity" class="form-control l-form-control l-field-e-3" value="<?php echo $sqlProductInfoData['quantity'] ?>" placeholder="Quantity" maxlength="30" required>
                    <datalist id="quantityList">
                        <option value="Per Piece">
                    </datalist>

                </span>
                <datalist id="productFeature">
                    <option value="Color">
                    <option value="Size">
                    <option value="Brand">
                    <option value="Color Available">
                    <option value="Size Dimension">
                    <option value="Is It Customized">
                </datalist>

                <span class="l-crimson-title-e">Product Details</span>
                <div id="feature-div">
                    <?php
                    $i = 0;
                    while ($sqlProductFeatureData = mysqli_fetch_assoc($sqlProductFeature)) {
                    ?>
                        <span style="display: flex;" id="productFeature<?php echo $i ?>">
                            <input list="productFeature" value="<?php echo $sqlProductFeatureData['productFeature'] ?>" class="form-control l-form-control l-form-control-e l-field-e-3" id="" placeholder="Product Feature Title" name="productDetailLabel[]">
                            <input type="text" value="<?php echo $sqlProductFeatureData['productFeatureValue'] ?>" class="form-control l-form-control l-form-control-e l-field-e-2" placeholder="Feature" name="productDetailValue[]">
                            <button class="btn btn-link l-feature-btn-remove" id="<?php echo $i ?>">Remove</button>
                        </span>
                    <?php
                        $i++;
                    }
                    ?>
                    <input type="number" id="totalfeature" value="<?php echo $i ?>" style="display: none;">
                </div>
                <button type="button" class="btn btn-info w-100" id="addBtn">Add +</button>

                <div class="display:flex;flex-direction:column" id="imageDiv">
                    <span class="l-crimson-title-e uploadMedia">Upload Images</span>
                    <input type="file" class="form-control uploadMedia" name="uploadImages[]" id="uploadImage" multiple="multiple">
                </div>
                <div class="row no-gutters" style="display: flex;" id="img-container">
                    <?php
                    $j = 0;
                    while ($sqlProductImageData = mysqli_fetch_assoc($sqlProductImage)) {

                    ?>
                        <div class="l-uploaded-img-unit" id="l-uploaded-img-unit-div-<?php echo $j; ?>">
                            <img src="/res/database/productImages/<?php echo $sqlProductImageData['imageName'] ?>" class="l-product-image" alt="" srcset="">

                            <span class="fas fa-window-close l-image-cancel" id="img-cross-<?php echo $j; ?>"></span>

                            <input type="text" value="<?php echo $sqlProductImageData['imageName'] ?>" id="img-<?php echo $j; ?>" style="display: none;">
                        </div>
                    <?php
                        $j++;
                    }
                    $deleteArray = array();
                    ?>
                </div>

                <script>
                    var imgCollection = [];
                    $(".l-image-cancel").on("click", function() {
                        if ($("#img-container").children().length > 1) {
                            var idNo = $(this).attr("id");
                            var id = idNo.substring(10);
                            var imgName = $("#img-" + id + "").val();
                            $("#l-uploaded-img-unit-div-" + id + "").remove();
                            var imgId = $("#img-" + id + "").attr("id");

                            $.post(
                                'deleteImg.php', {
                                    image: imgName

                                },
                                function(result) {
                                    if (result == "success") {

                                    } {

                                    }
                                }
                            );
                        }
                    });
                </script>

                <div class="display:flex;flex-direction:column">
                    <span class="l-crimson-title-e uploadMedia">Upload Product Video Link (Youtube)</span>
                    <input type="text" class="form-control uploadMedia" placeholder="Link" name="uploadVideo" value="<?php echo $sqlProductInfoData['videoLink'] ?>">
                </div>
            </div>
            <input type="text" name="latitude" id="latitude" value="<?php echo ucwords($sqlProductInfoData['latitude']) ?>" style="display: none;">
            <input type="text" name="longitude" id="longitude" value="<?php echo ucwords($sqlProductInfoData['longitude']) ?>" style="display: none;">
            <input type="text" name="address" id="address" value="<?php echo ucwords($sqlProductInfoData['address']) ?>" style="display: none;">

            <script type="text/javascript">
                var firstCheck = 1;


                function showPositionBasic(position) {
                    var geocodeService = L.esri.Geocoding.geocodeService();

                    latitude = position.coords.latitude;
                    longitude = position.coords.longitude;

                    geocodeService.reverse().latlng([latitude, longitude]).run(function(error, result) {
                        if (error) {
                            return;
                        }
                        document.getElementById('latitude').value = <?php echo ucwords($sqlProductInfoData['latitude']) ?>;
                        document.getElementById('longitude').value = <?php echo ucwords($sqlProductInfoData['longitude']) ?>;
                        document.getElementById('address').value = result.address.Match_addr;

                    });
                }
                getLocationBasic();
            </script>


            <div class="modal " id="mapping-div">
                <div class="modal-dialog modal-lg">
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

                                        latitude = <?php echo ucwords($sqlProductInfoData['latitude']) ?>;
                                        longitude = <?php echo ucwords($sqlProductInfoData['longitude']) ?>;

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
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" name="sellBtn" class="btn btn-warning w-100">Update</button>

        </form>
    </div>
</body>

</html>