<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
include $_SERVER['DOCUMENT_ROOT'] . "/res/important/employerSession.php";
//Global Imports
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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';

    ?>



    <div class="l-container-padding text-center container-fluid">
        <div class=" l-container-title container-fluid text-left">
            <span class=" l-container-title-text">Add Jobs Here</span>
        </div>
        <form action="action.php" method="POST" enctype="multipart/form-data" class=" col-md-12 l-main-container-section l-section-1 row no-gutters container-fluid " id="sellDiv">
            <div class="col-md-6" style="padding: 5px;">
                <div class="l-product detail-container">
                    <div class="container-fluid text-center">
                        <input type="button" name="sellBtn" value="Location You Want To Add Vacancy" onclick="getLocation();" data-toggle="modal" data-target="#mapping-div" class="btn btn-success w-100">

                    </div>
                    <input type="text" class="form-control l-form-control" placeholder="Service You Want To Provide" name="serviceName" maxlength="50" required>
                    <select class="form-control l-form-control" name="category" required>
                        <option value="">Categories</option>
                        <option value="Land">Land</option>
                        <option value="Service">Service</option>
                        <option value="Agriculture">Agriculture</option>
                        <option value="Animal Products">Animal Products</option>
                        <option value="Clothing">Clothing</option>
                        <option value="Technology">Technology</option>
                        <option value="Accessories">Accessories</option>
                        <option value="HouseHold">HouseHold</option>
                    </select>
                    <span class="l-crimson-title">Work Duration</span>
                    <select class="form-control l-form-control" name="deadline" required>
                        <option value="">Duration</option>
                        <option value="1">1 Day</option>
                        <option value="7">7 Days</option>
                        <option value="15">15 Days</option>
                        <option value="30">1 Month</option>
                        <option value="90">3 Months</option>
                        <option value="180">6 Months</option>
                        <option value="365">1 Year</option>
                    </select>
                    <span class="l-crimson-title">What Can You Help?</span>
                    <br>
                    <br>
                    <textarea name="serviceDescription" id="productDescription" rows="10" cols="70" required></textarea>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor 4
                        // instance, using default configuration.
                        CKEDITOR.replace('productDescription');
                    </script>
                </div>
            </div>
            <div class="col-md-6">
                <span class="l-crimson-title">Payment</span>
                <span style="display: flex;">
                    <select class="form-control l-form-control l-field-e-1" name="currency" >
                        <option value="">Currency</option>
                        <option value="Rs.">Rs.</option>
                        <option value="$">$</option>
                        <option value="&#65505;">&#65505;</option>
                    </select>
                    <input type="number" name="price" class="form-control l-form-control l-field-e-2" placeholder="Price" onKeyPress="if(this.value.length==9) return false;" >
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

                <span class="l-crimson-title-e">Work Features</span>
                <div id="feature-div">
                    <span style="display: flex;" id="productFeature0">
                        <input list="productFeature" class="form-control l-form-control l-form-control-e l-field-e-3" id="" placeholder="Work Feature (eg. Skill)" name="productDetailLabel[]">
                        <input type="text" class="form-control l-form-control l-form-control-e l-field-e-2" placeholder="Feature (eg. Marketing )" name="productDetailValue[]">

                    </span>

                </div>
                <button type="button" class="btn btn-info w-100" id="addBtn">Add +</button>

                <div class="display:flex;flex-direction:column" id="imageDiv">
                    <span class="l-crimson-title-e uploadMedia">Upload Images</span>
                    <input type="file" class="form-control uploadMedia" name="uploadImages[]" id="uploadImage" multiple="multiple" required>
                </div>


                <div class="display:flex;flex-direction:column" id="imageDiv">
                    <span class="l-crimson-title-e uploadMedia">Will You Work Anywhere Within The Country</span>

                    <select class="form-control l-form-control" style="width: 100%;" name="workAnywhere" required>
                        <option value="">Will You Work Anywhere Within The Country</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="display:flex;" id="imageDiv">
                    <span class="l-crimson-title-e uploadMedia">Active Status:</span>

                    <label class="switch">
                        <input type="checkbox" checked name="activeStatus">
                        <span class="slider round"></span>
                    </label> </div>
            </div>
            <input type="text" name="latitude" id="latitude" style="display: none;">
            <input type="text" name="longitude" id="longitude" style="display: none;">
            <input type="text" name="address" id="address" style="display: none;">


            <script type="text/javascript">
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

                    geocodeService.reverse().latlng([latitude, longitude]).run(function(error, result) {
                        if (error) {
                            return;
                        }
                        document.getElementById('latitude').value = latitude;
                        document.getElementById('longitude').value = longitude;
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

            <button type="submit" name="sellBtn" class="btn btn-success w-100">Submit</button>

        </form>
    </div>
</body>

</html>