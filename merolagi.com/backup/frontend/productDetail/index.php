<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "res/global/index.php";
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

    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merolagi</title>
</head>

<body>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';

    $getInfo = "SELECT * FROM `product_info` where productUniqueId='" . $_GET['productId'] . "'";
    $getInfo = mysqli_query($conn2, $getInfo);
    $getInfoData = mysqli_fetch_assoc($getInfo);
    $getFeatures = "SELECT * FROM `product_features` where productUniqueId='" . $_GET['productId'] . "'";
    $getFeatures = mysqli_query($conn2, $getFeatures);
    $getImages = "SELECT * FROM `product_images` where productUniqueId='" . $_GET['productId'] . "'";
    $getImages = mysqli_query($conn2, $getImages);
    $getImagesData = mysqli_fetch_assoc($getImages);

    ?>
    <div class="l-main-container">
        <div class="row no-gutters">
            <div class="col-md-4  text-center">
                <div class="l-main-image-container">
                    <img src="/res/database/productImages/<?php echo $getImagesData['imageName'] ?>" class="img-fluid " alt="">
                </div>
            </div>
            <div class="col-md-4 l-product-detail-div">
                <span class="l-product-name"><?php echo ucwords($getInfoData['productName']) ?></span>
                <span class="l-product-price"><span class="l-product-label"> Price:</span> <?php echo $getInfoData['currency'] ?><span class="l-price"><?php echo $getInfoData['price'] ?></span>
                    <?php
                    if ($getInfoData['quantity'] == "Per Piece") {
                        echo "Per Piece";
                    } else {
                        echo "For " . $getInfoData['quantity'] . " units";
                    }
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
            <div class="col-md-4 text-center">
                <div class="l-contact-seller-div text-center row no-gutters">
                    <button type="button" class="btn btn-success l-buy-btn row no-gutters" style="padding: 10px;">BUY</button>
                    <button type="button" class="btn btn-info l-buy-btn row no-gutters" style="padding: 10px;">Bargain</button>
                </div>
                <div class="l-company-div text-center">
                    <img src="/res/images/test-logo.png" class=" img-fluid l-company-detail-icon" alt="">
                    <div class="container-fluid no-gutters text-center">
                        <span class="l-company-location"><span class="fas fa-map-marker-alt"></span>New Baneshwor, Kathmandu</span>
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
                            9851187529
                        </span>
                    </div>
                </div>
                <div class="l-contact-seller-div text-center">
                    <button type="button" class="btn btn-primary l-contact-seller">Contact Your Seller</button>
                    <button type="button" class="btn btn-outline-primary l-contact-seller">Get Latest Price</button>
                </div>
            </div>
        </div>




        <div class="row no-gutters l-section-2">
            <div class="col-md-7">
                <span class="l-crimson-title">Product Details</span>
                <div class="l-product-info-table">
                    <?php

                    $getFeatures = "SELECT * FROM `product_features` where productUniqueId='" . $_GET['productId'] . "'";
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
                <span class="l-crimson-title">Product Description</span>
                <div class="l-product-info-table text-justify">
                    <?php echo $getInfoData['productDescription'] ?>
                </div>
                <?php
                if ($getInfoData['videoLink'] != "") {
                ?>
                    <?php $videoLinkRaw = str_replace("watch?v=", "embed/", $getInfoData['videoLink']);
                    if (strpos($videoLinkRaw, '&') != false) {
                        $videoLinkRaw = substr($videoLinkRaw, 0, strpos($videoLinkRaw, '&'));
                    }

                    ?>
                    <div class="l-iframe-div container-fluid">
                        <iframe class="l-iframe" src="<?php echo $videoLinkRaw;  ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <?php
                }
                ?>
                <span class="l-crimson-title">Images</span>

                <div class="container-fluid l-main-image">
                    <?php
                    $getImages = "SELECT * FROM `product_images` where productUniqueId='" . $_GET['productId'] . "'";
                    $getImages = mysqli_query($conn2, $getImages);
                    while ($getImagesData = mysqli_fetch_assoc($getImages)) {
                    ?>
                        <img src="/res/database/productImages/<?php echo $getImagesData['imageName'] ?>" class="img-fluid l-main-image" alt="">
                    <?php
                    }
                    ?>
                </div>
                <button type="button" class="btn btn-primary l-contact-seller-2">
                    GET THE LATEST PRICE
                </button>

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
</body>

</html>