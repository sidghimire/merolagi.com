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
    <title>Manage Post</title>
</head>

<body>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';

    ?>

    <div class="l-container-padding text-center container-fluid">
        <div class=" l-container-title container-fluid text-left">
            <span class=" l-container-title-text">Manage Posts Here</span>
        </div>

        <div class=" l-main-container-section row no-gutters container-fluid" id="sellDiv">
            <div class="l-post-scroll container-fluid text-left">
                <a class="btn btn-info btn-sm l-btn-orders-type" style="color: white;" id="productBtn">Products</a>
                <script>
                    $("#productBtn").on("click", function() {
                        $("#l-change-table").load("getProduct.php", {});
                    });
                </script>
                <a class="btn btn-info btn-sm l-btn-orders-type" style="color: white;" id="serviceBtn">Jobs</a>
                <script>
                    $("#serviceBtn").on("click", function() {
                        $("#l-change-table").load("getService.php", {});
                    });
                </script>
                <a class="btn btn-info btn-sm l-btn-orders-type" style="color: white;" id="realEstateBtn">Real Estate</a>
                <script>
                    $("#realEstateBtn").on("click", function() {
                        $("#l-change-table").load("getRealEstate.php", {});
                    });
                </script>
                <table class="table table-hover table-sm table-striped l-table" id="l-change-table">
                    <thead class=" thead-dark">
                        <th scope="col"><span class="l-thead">SN.</span></th>
                        <th scope="col"><span class="l-thead">Product Title</span></th>
                        <th scope="col"><span class="l-thead"></span></th>
                        <th scope="col"><span class="l-thead"></span></th>
                        <th scope="col"><span class="l-thead">Responses</span></th>
                        <th scope="col" class="text-right"><span class="l-thead">Controls</span></th>
                    </thead>
                    <tbody>
                        <?php
                        $sqlAllPost = "SELECT * FROM `product_info` WHERE employerUniqueId='" . $_SESSION['employerId'] . "' and display<>'off' order by id desc";
                        $sqlAllPost = mysqli_query($conn2, $sqlAllPost);
                        $i = 1;
                        while ($sqlAllPostData = mysqli_fetch_assoc($sqlAllPost)) {
                        ?>
                            <tr>
                                <th scope="col" colspan="1"><?php echo $i; ?></th>
                                <th scope="col" colspan="3"><span class="l-post-title"><a href="/productdetail/<?php echo $sqlAllPostData['id'] ?>"><?php echo ucwords($sqlAllPostData['productName']) ?></a></span></th>
                                <th scope="col"><a href="/employer/managePost/responses/index.php?productId=<?php echo $sqlAllPostData['productUniqueId'] ?>" class="btn btn-success btn-sm">Response</a></th>
                                <th scope="col" class="text-right"><a href="editPost/index.php?productId=<?php echo $sqlAllPostData['productUniqueId'] ?>"><button type="button" class="btn btn-warning btn-sm"><span class="fas fa-edit"></button></span></a><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#deleteModalProduct<?php echo $i ?>" class=" btn btn-info"><span class="fas fa-tasks"></span></button><a href=""><button class="btn btn-secondary btn-sm"><span class="fas fa-chart-pie"></button></span></a></th>
                                <div class="modal " id="deleteModalProduct<?php echo $i ?>">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                Control:
                                            </div>
                                            <form method="POST" action="/employer/managePost/deleteAction.php?productId=<?php echo $sqlAllPostData['productUniqueId'] ?>" class="modal-body">
                                                DELETE THIS POST?
                                                <button type="submit" name="trashProduct" class="btn btn-danger" style="width:10%;"><span class="fas fa-trash"></span></button>
                                            </form>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>