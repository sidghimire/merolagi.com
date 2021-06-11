<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
include $_SERVER['DOCUMENT_ROOT'] . "/res/important/employerSession.php";
//Global Imports
?>
<?php
if(isset($_GET['productId'])){
    $sqlAuthCheck2="SELECT employerUniqueId FROM `product_info` WHERE `productUniqueId`='".$_GET['productId']."'";
    $sqlAuthCheck2=mysqli_query($conn2,$sqlAuthCheck2);
    $sqlAuthCheckData2=mysqli_fetch_assoc($sqlAuthCheck2);
if( $_SESSION['employerId']==$sqlAuthCheckData2['employerUniqueId']){
}else{
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

    <link href="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/css/nepali.datepicker.v3.2.min.css" rel="stylesheet" type="text/css" />

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
    <title>Responses</title>
</head>

<body>
<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';

    ?>
    <div class="container-fluid">
        <div class="row no-gutters text-left ">
            <a href="/employer/managePost/index.php" class="col-2">
                <div class="l-title-row">
                    <span class="fas fa-arrow-circle-left fa-2x l-fa-icon"></span>
                </div>
            </a>
            <span class="col-10 l-title-text">
                <div class="l-title-row">
                    Responses
                </div>
            </span>
        </div>
    </div>
    <?php
    $sqlAllPost = "SELECT * FROM `product_info` WHERE productUniqueId='" . $_GET['productId'] . "'";
    $sqlAllPost = mysqli_query($conn2, $sqlAllPost);
    $sqlAllPostData = mysqli_fetch_assoc($sqlAllPost);
    ?>
    <div class="container-fluid row no-gutters l-full-container">
        <div class="l-main-container container-fluid row no-gutters">
            <div class="col-md-4 l-product-info-col">
                <div class="l-job-info-section container-fluid">
                    <div class="l-title-text-2">
                        Product Information:
                    </div>
                    <div class="row no-gutters">
                        <div class="l-product-description-div col-5">
                            <div class="l-feature-unit">
                                <div class="l-product-feature">Product :</div>
                            </div>
                            <div class="l-feature-unit">
                                <div class="l-product-feature">Price :</div>
                            </div>
                            <div class="l-feature-unit">
                                <div class="l-product-feature">Uploaded Date :</div>
                            </div>
                        </div>
                        <div class="l-product-description-div col-7">
                            <div class="l-feature-unit">
                                <div class="l-product-label"><?php echo ucwords($sqlAllPostData['productName']) ?></div>
                            </div>
                            <div class="l-feature-unit">
                                <div class="l-product-label"><?php echo $sqlAllPostData['currency'] ?><?php echo $sqlAllPostData['price'] ?></div>
                            </div>
                            <div class="l-feature-unit">
                                <div class="l-product-label"><?php echo $sqlAllPostData['createdDate'] ?></div>
                            </div>
                        </div>
                    </div>
                    <a href="/productdetail/<?php echo $sqlAllPostData['id'] ?>" target="_blank" class="l-view-post-btn btn btn-primary">
                        View Post
                    </a>
                </div>
                <?php
                $sqlAllRequest = "SELECT * FROM `deal_product` WHERE productId='" . $_GET['productId'] . "'";
                $sqlAllRequest = mysqli_query($conn3, $sqlAllRequest);
                ?>

                <div class="l-job-overview-section container-fluid">
                    <div class="l-title-text-4">
                        Request Overview:
                    </div>

                    <div class="row no-gutters">
                        <div class="l-product-description-div col-5">
                            <div class="l-feature-unit">
                                <div class="l-product-feature">Total Requests :</div>
                            </div>

                        </div>
                        <div class="l-product-description-div col-7">
                            <div class="l-feature-unit">
                                <div class="l-product-label"><?php echo mysqli_num_rows($sqlAllRequest); ?></div>
                            </div>

                        </div>
                    </div>
                    <a href="/frontend/productDetail/index.php?productId=<?php echo $sqlAllPostData['productUniqueId'] ?>" target="_blank" class="l-view-post-btn btn btn-warning">
                        View Full Stats
                    </a>
                </div>


            </div>
            <div class="col-md-8 l-product-info-col" >
                <div class="l-responses-div">
                    <table class="table table-hover table-sm table-striped l-table">
                        <thead class=" thead-light">
                            <tr>
                                <th>SN.</th>
                                <th>Email</th>
                                <th>Phone No.</th>
                                <th>Quantity.</th>
                                <th class="table-location">Location.</th>
                                <th></th>
                                <th>Controls.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            while ($sqlAllRequestData = mysqli_fetch_assoc($sqlAllRequest)) {
                                $checkCompletion = "SELECT id FROM `transaction_complete` WHERE transactionId='" . $sqlAllRequestData['transactionId'] . "'";
                                $checkCompletion = mysqli_query($conn3, $checkCompletion);
                                if (mysqli_num_rows($checkCompletion) > 0) {
                            ?>
                                    <tr style="text-decoration: line-through;">
                                    <?php
                                } else {
                                    ?>
                                    <tr>

                                    <?php
                                }
                                    ?>
                                    <td><?php echo $i; ?></td>

                                    <?php
                                    $getEmail = "SELECT email FROM `employer_login` WHERE uniqueUserId='" . $sqlAllRequestData['customerId'] . "'";
                                    $getEmail = mysqli_query($conn1, $getEmail);
                                    $getEmailData = mysqli_fetch_assoc($getEmail);
                                    ?>

                                    <td><?php echo $getEmailData['email']; ?></td>
                                    <?php
                                    if (mysqli_num_rows($checkCompletion) > 0) {
                                    ?>

                                        <td></td>
                                    <?php
                                    } else {
                                    ?>
                                        <td><?php echo $sqlAllRequestData['phone'] ?></td>
                                    <?php
                                    }
                                    ?>
                                    <td><?php echo $sqlAllRequestData['quantity'] ?></td>
                                    <td><?php echo $sqlAllRequestData['address']; ?></td>
                                    <td colspan="2">
                                        <?php
                                        if (mysqli_num_rows($checkCompletion) > 0) {
                                        } else {
                                        ?>
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#mapping-div" onclick="showPosition(<?php echo $sqlAllRequestData['latitude'] ?>,<?php echo $sqlAllRequestData['longitude'] ?>);">
                                                <span class="fas fa-xs fa-map-marked-alt"></span>
                                            </button>

                                            <button type="button" data-toggle="modal" data-target="#approve-div-<?php echo $i ?>" class="btn btn-secondary">
                                                <span class="fas fa-xs fa-check-circle"></span>
                                            </button>

                                            <a href="/employer/minechat/index.php?productId=<?php echo $sqlAllRequestData['productId'] ?>&transactionId=<?php echo $sqlAllRequestData['transactionId'] ?>" target="_blank">
                                                <button type="button" class="btn btn-primary">
                                                    <span class="fas fa-xs fa-comments"></span>
                                                </button>
                                            </a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    </tr>
                                    <div class="modal" id="approve-div-<?php echo $i ?>">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <span class="l-transaction-title row no-gutters">
                                                        Transaction Completion
                                                    </span> </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="smallAction.php?productId=<?php echo $sqlAllRequestData['productId'] ?>&transactionId=<?php echo $sqlAllRequestData['transactionId'] ?>">

                                                        <span class="l-transaction-label"> Price</span>
                                                        <div class="l-approve-unit row no-gutters">
                                                            <select name="currency" class="form-control l-transaction-form-control-unit" required>
                                                                <option value="">Currency</option>
                                                                <option value="Rs.">Rs.</option>
                                                                <option value="$">$</option>
                                                            </select>
                                                            <input type="number" name="price" class="form-control l-transaction-form-control-unit" placeholder="Price" required>
                                                        </div>

                                                        <span class="l-transaction-label"> Quantity</span>
                                                        <div class="l-approve-unit row no-gutters">
                                                            <input type="number" name="quantity" class="form-control l-transaction-form-control-unit" placeholder="Quantity" required />
                                                        </div>

                                                        <span class="l-transaction-label"> Comments</span>
                                                        <div class="l-approve-unit row no-gutters">
                                                            <textarea name="comment" class="form-control l-comment-field"></textarea>
                                                        </div>
                                                        <button name="completed" type="submit" class="form-control btn btn-success l-completed-btn">Transaction Completed</button>
                                                        <script src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v3.2.min.js" type="text/javascript"></script>
                                                        <script type="text/javascript">
                                                            window.onload = function() {
                                                                var mainInput = document.getElementById("nepali-datepicker");
                                                                mainInput.nepaliDatePicker();
                                                            };
                                                        </script>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                <?php
                                $i++;
                            }
                                ?>
                        </tbody>
                    </table>
                    <div class="modal" id="mapping-div">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body l-map-modal">
                                    <div id="map"></div>
                                    <script>
                                        function showPosition(latitude, longitude) {

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

                </div>
            </div>
        </div>
    </div>
</body>

</html>