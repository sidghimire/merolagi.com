<?php
//Global Imports
require_once $_SERVER['DOCUMENT_ROOT'] . 'res/global/index.php';
//Global Imports
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . 'res/imports/index.php';
    ?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="/frontend/profileSidebar.css">
    <link rel="stylesheet" href="style.css">
    <script src="/res/packages/js/chart.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $SITE_NAME ?></title>
</head>

<body>
    <div class="l-container">
        <div class="l-window">
            <div class="row no-gutters l-row">
                <?php
                require_once $_SERVER['DOCUMENT_ROOT'] . 'frontend/profileSidebar.php';
                ?>
                <div class="col-md-11 l-main-section text-left row">
                    <div class="col-md-6 l-window-1">
                        <?php
                        $searched = null;
                        if (isset($_GET['search'])) {
                            $searched = $_GET['search'];
                        }
                        ?>
                        <form method="POST" action="searchPeople.php" class="l-search-div">

                            <input type="text" class="form-control l-form-control-search" required name="search" value="<?php echo $searched ?>" placeholder="Search Required Job" name="search">
                            <button type="submit" name="submit" style="visibility: hidden;"></button>
                            <a href="#" class="l-filter-option" data-toggle="modal" data-target="#filter-div">Filter</a>
                            <div class="modal" id="filter-div">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            Filter
                                        </div>
                                        <div class="modal-body">
                                            <div class="row l-modal-row">
                                                Gender
                                                <select name="gender" class="form-control" id="">
                                                    <option value="">All</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                            <div class="row l-modal-row">
                                                Age
                                                <input type="text" name="age" placeholder="Age" class="form-control">
                                            </div>

                                            <div class="row l-modal-row">

                                                <input type="button" name="location" onclick="getLocation();" value="Location" id="locationBtn" class="btn btn-warning" data-toggle="modal" data-target="#mapping-div">
                                            </div>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="modal " id="mapping-div">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            Map Your Location
                                        </div>
                                        <div class="modal-body">
                                            <form action="#">
                                                <input type="text" name="location" class="form-control l-location-search" placeholder="Location">
                                            </form>
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
                                                        latitude = position.coords.latitude;
                                                        longitude = position.coords.longitude;

                                                        var map = L.map('map');
                                                        map.invalidateSize();
                                                        map.setView([latitude, longitude], 12);
                                                        L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=vttW6pI9EIrxJQEd3Cuh', {
                                                            attribute: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
                                                            zoomOffset: -1,
                                                            tileSize: 512,
                                                        }).addTo(map);
                                                        var marker = L.marker([latitude, longitude]).addTo(map);
                                                        var circle = L.circle([latitude, longitude], {
                                                            color: '#FE4C4C',
                                                            fillColor: '#FE4C4C',
                                                            fillOpacity: 0.2,
                                                            radius: 6000
                                                        }).addTo(map);
                                                        var circle = L.circle([latitude, longitude], {
                                                            color: '#F48020',
                                                            fillColor: '#F48020',
                                                            fillOpacity: 0.2,
                                                            radius: 3000
                                                        }).addTo(map);
                                                        var circle = L.circle([latitude, longitude], {
                                                            color: '#7CF382',
                                                            fillColor: '#7CF382',
                                                            fillOpacity: 0.4,
                                                            radius: 1000
                                                        }).addTo(map);

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

                        </form>
                        <div class="l-searched-section">
                            <a href="index.php?personId=">
                                <div class="l-searched-div row">
                                    <div class="col-md-2">
                                        <img src="/res/images/avatar1.jpg" class="img-fluid l-profile-image" alt="">
                                    </div>
                                    <div class="col-md-5 l-info-div">
                                        <span class="l-basic-info-1">Siddhartha Ghimire</span>
                                        <span class="l-basic-info-2">Male (27 years)</span>
                                        <span class="l-basic-info-2">Messenger</span>
                                    </div>
                                    <div class="col-md-5 l-info-div">
                                        <span class="l-basic-info-2">New Baneshwor</span>
                                        <span class="l-basic-info-2">4km Away</span>
                                        <span class="l-basic-info-2">Rating</span>
                                    </div>
                                </div>
                            </a>
                            <a href="index.php?personId=">
                                <div class="l-searched-div row">
                                    <div class="col-md-2">
                                        <img src="/res/images/avatar1.jpg" class="img-fluid l-profile-image" alt="">
                                    </div>
                                    <div class="col-md-5 l-info-div">
                                        <span class="l-basic-info-1">Siddhartha Ghimire</span>
                                        <span class="l-basic-info-2">Male (27 years)</span>
                                        <span class="l-basic-info-2">Messenger</span>
                                    </div>
                                    <div class="col-md-5 l-info-div">
                                        <span class="l-basic-info-2">New Baneshwor</span>
                                        <span class="l-basic-info-2">4km Away</span>
                                        <span class="l-basic-info-2">Rating</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 l-window-1">
                        <div class="l-profile-header row">
                            <div class="col-md-3">
                                <img src="/res/images/avatar5.png" class="img-fluid l-profile-header-img">
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <span class="l-text-type-header-name">Siddhartha Ghimire</span>
                                    <span class="l-approval-span">Verified</span>
                                </div>
                                <div class="row">
                                    <span class="l-gender-span">Male (27)</span>
                                </div>
                                <div class="row">
                                    <span class="l-location-address"><span class="fas l-fas fa-map-marked-alt l-location-span"></span>New Baneshwor</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>