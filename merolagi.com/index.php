<?php

//Global Imports
include "res/global/index.php";
if (strpos($_SERVER['HTTP_USER_AGENT'], 'wv') == true) {
    $isWebView = false;
} else {
    $isWebView = false;
}

//Global Imports
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "res/imports/index.php";
    ?>



    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <meta name="description" content="Merolagi is a fresh startup which is website and app based and works on the concept of mapping technology to help you find products, services and realestate immediately around you. Everything is absolutely free">
    <meta name="keywords" content="merolagi, find a job, nepal, buy products">
    <meta name="author" content="Merolagi.com">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeroLagi || Trade Rent Hire || Jobs, Products, RealEstate</title>

</head>

<body>
    <?php
    include "header.php";

    ?>
    <div class="row no-gutters">
        <div class="col-md-10">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade l-header-carousel" data-ride="carousel">
                <ol class="carousel-indicators l-header-carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

                </ol>
                <div class="carousel-inner l-rounded">
                    <div class="carousel-item l-carousel-img-div active">
                        <img class="d-block l-header-carousel-image" src="/res/images/2.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item l-carousel-img-div">
                        <img class="d-block l-header-carousel-image" src="/res/images/2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item l-carousel-img-div">
                        <img class="d-block l-header-carousel-image" src="/res/images/3.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item l-carousel-img-div">
                        <img class="d-block l-header-carousel-image" src="/res/images/4.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item l-carousel-img-div">
                        <img class="d-block l-header-carousel-image" src="/res/images/5.jpg" alt="Third slide">
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-2 l-res-1000-remove">
            <div class="l-section-2 container-fluid">
                <?php
                $getSidebarData = "Select * FROM `blog` WHERE `status`='On' Order By id DESC LIMIT 3";
                $getSidebarData = mysqli_query($conn5, $getSidebarData);
                ?>
                <div class="l-section-2-div container-fluid text-center">
                   <span style="font-weight: 600;">BLOGS</span>
                    <?php
                    while ($getSidebarDataValue = mysqli_fetch_assoc($getSidebarData)) {
                    ?>
                        <div class="container-fluid l-section-2-item text-center">
                            <a href="/blog/<?php echo $getSidebarDataValue['id'] ?>" class="l-sidebar-blog-div d-flex flex-column text-center container-fluid">
                                <img src="/res/database/blog/<?php echo $getSidebarDataValue['coverPhoto'] ?>" class="l-img-section-1" alt="Chicken">
                                <div class="l-sidebar-blog-title text-left"><?php echo ucwords($getSidebarDataValue['blogTitle']) ?></div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>





    <?php
    $sqlGetProduct = "SELECT * FROM `service_info` WHERE display='' ORDER BY id DESC Limit 18";
    $sqlGetProduct = mysqli_query($conn2, $sqlGetProduct);
    ?>
    <div class="container-fluid no-gutters l-ad-title-div">
        <span class="l-ad-section-title">Latest Jobs</span>
    </div>
    <div class="row no-gutters l-ad-div">
        <?php
        while ($sqlGetProductData = mysqli_fetch_assoc($sqlGetProduct)) {

            $sqlGetImage = "SELECT * FROM `service_images` WHERE productUniqueId='" . $sqlGetProductData['productUniqueId'] . "' ORDER BY id Desc LIMIT 1";
            $sqlGetImage = mysqli_query($conn2, $sqlGetImage);
            $sqlGetImageData = mysqli_fetch_assoc($sqlGetImage);

        ?>
            <div class="col-md-4 row no-gutters" style="margin-bottom: -50px;">
                <div class="col-6">
                    <div class="l-ad-item-div">
                        <a href="/servicedetail/<?php echo $sqlGetProductData['id'] ?>">
                            <div class="l-ad text-center">
                                <img src="res/database/serviceImages/<?php echo $sqlGetImageData['imageName'] ?>" class="img-fluid l-ad-img" alt="<?php
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
                                    <img src="res/database/serviceImages/<?php echo $sqlGetImageData['imageName'] ?>" class="img-fluid l-ad-img" alt="<?php
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

        <a href="/frontend/search/index.php?search=#l-result-service" class="btn btn-primary container-fluid l-view-more-btn">View More Jobs</a>
    </div>
    <div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-md-6">
    <?php
    if (!$isWebView) {
    ?>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Horizontal Ads -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3866603838151846"
     data-ad-slot="8919659704"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    <?php
    }
    ?>
    </div>
       <div class="col-md-6">
    <?php
    if (!$isWebView) {
    ?>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Horizontal Ads -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3866603838151846"
     data-ad-slot="8919659704"
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






    <?php
    $sqlGetProduct = "SELECT * FROM `product_info` WHERE display='' ORDER BY id DESC Limit 18";
    $sqlGetProduct = mysqli_query($conn2, $sqlGetProduct);
    ?>
    <div class="container-fluid no-gutters l-ad-title-div">
        <span class="l-ad-section-title">Latest Products</span>
    </div>
    <div class="row no-gutters l-ad-div">
        <?php
        while ($sqlGetProductData = mysqli_fetch_assoc($sqlGetProduct)) {

            $sqlGetImage = "SELECT * FROM `product_images` WHERE productUniqueId='" . $sqlGetProductData['productUniqueId'] . "' ORDER BY id Desc LIMIT 1";
            $sqlGetImage = mysqli_query($conn2, $sqlGetImage);
            $sqlGetImageData = mysqli_fetch_assoc($sqlGetImage);

        ?>
            <div class="col-md-4 row no-gutters" style="margin-bottom: -50px;">
                <div class="col-6">
                    <div class="l-ad-item-div">
                        <a href="/productdetail/<?php echo $sqlGetProductData['id'] ?>">
                            <div class="l-ad text-center">
                                <img src="res/database/productImages/<?php echo $sqlGetImageData['imageName'] ?>" class="img-fluid l-ad-img" alt="<?php
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
                                    <img src="res/database/productImages/<?php echo $sqlGetImageData['imageName'] ?>" class="img-fluid l-ad-img" alt="<?php
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
        <div class="col-md-4 row no-gutters">
            <div class="col-6">
                <?php
                if (!$isWebView) {
                ?>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-em+f-1k-38+bw" data-ad-client="ca-pub-3866603838151846" data-ad-slot="1324215063"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                <?php
                }
                ?>
            </div>

            <div class="col-6">
                <?php
                if (!$isWebView) {
                ?>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-em+f-1k-38+bw" data-ad-client="ca-pub-3866603838151846" data-ad-slot="1324215063"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                <?php
                }
                ?>
            </div>

        </div>


        <a href="/frontend/search/index.php?search=#l-result-product" class="btn btn-primary container-fluid l-view-more-btn">View More Products</a>
    </div>
    <div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-md-6">
    <?php
    if (!$isWebView) {
    ?>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Horizontal Ads -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3866603838151846"
     data-ad-slot="8919659704"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    <?php
    }
    ?>
    </div>
       <div class="col-md-6">
    <?php
    if (!$isWebView) {
    ?>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Horizontal Ads -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3866603838151846"
     data-ad-slot="8919659704"
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

    <?php
    $sqlGetProduct = "SELECT * FROM `realestate_info` WHERE display='' ORDER BY id DESC Limit 18";
    $sqlGetProduct = mysqli_query($conn2, $sqlGetProduct);
    ?>
    <div class="container-fluid no-gutters l-ad-title-div">
        <span class="l-ad-section-title">Latest Real Estate</span>
    </div>
    <div class="row no-gutters l-ad-div">
        <?php
        while ($sqlGetProductData = mysqli_fetch_assoc($sqlGetProduct)) {

            $sqlGetImage = "SELECT * FROM `realestate_images` WHERE productUniqueId='" . $sqlGetProductData['productUniqueId'] . "' ORDER BY id Desc LIMIT 1";
            $sqlGetImage = mysqli_query($conn2, $sqlGetImage);
            $sqlGetImageData = mysqli_fetch_assoc($sqlGetImage);

        ?>
            <div class="col-md-4 row no-gutters" style="margin-bottom: -50px;">
                <div class="col-6">
                    <div class="l-ad-item-div">
                        <a href="/estatedetail/<?php echo $sqlGetProductData['id'] ?>">
                            <div class="l-ad text-center">
                                <img src="res/database/estateImages/<?php echo $sqlGetImageData['imageName'] ?>" class="img-fluid l-ad-img" alt="<?php
                                                                                                                                                    echo ucwords($sqlGetProductData['estateTitle']);
                                                                                                                                                    ?>">
                            </div>
                            <div class="l-ad-description">
                                <div class="l-ad-title">
                                    <?php
                                    echo ucwords($sqlGetProductData['estateTitle']);
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
                    $sqlGetImage = "SELECT * FROM `realestate_images` WHERE productUniqueId='" . $sqlGetProductData['productUniqueId'] . "' ORDER BY id Desc LIMIT 1";
                    $sqlGetImage = mysqli_query($conn2, $sqlGetImage);
                    $sqlGetImageData = mysqli_fetch_assoc($sqlGetImage);

                ?>
                    <div class="col-6">
                        <div class="l-ad-item-div">
                            <a href="/estatedetail/<?php echo $sqlGetProductData['id'] ?>">
                                <div class="l-ad text-center">
                                    <img src="res/database/estateImages/<?php echo $sqlGetImageData['imageName'] ?>" class="img-fluid l-ad-img" alt="<?php
                                                                                                                                                        echo ucwords($sqlGetProductData['estateTitle']);
                                                                                                                                                        ?>">
                                </div>
                                <div class="l-ad-description">
                                    <div class="l-ad-title">
                                        <?php
                                        echo ucwords($sqlGetProductData['estateTitle']);
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

        <a href="/frontend/search/index.php?search=#l-result-estate" class="btn btn-primary container-fluid l-view-more-btn">View More Estate</a>
    </div>
   <div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-md-6">
    <?php
    if (!$isWebView) {
    ?>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Horizontal Ads -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3866603838151846"
     data-ad-slot="8919659704"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    <?php
    }
    ?>
    </div>
       <div class="col-md-6">
    <?php
    if (!$isWebView) {
    ?>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Horizontal Ads -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3866603838151846"
     data-ad-slot="8919659704"
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

</body>

</html>