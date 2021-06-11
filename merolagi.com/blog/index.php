<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
//Global Imports
$productId = $_GET['blog'];
include $_SERVER['DOCUMENT_ROOT'] . "/res/important/blogViewer.php";

$getData = "Select * FROM `blog` WHERE `id`=" . $productId . " and `status`='On'";
$getData = mysqli_query($conn5, $getData);
$getDataValue = mysqli_fetch_assoc($getData);

$getName = "Select name From `employer_profile` where `uniqueUserId`='" . $getDataValue['userId'] . "'";
$getName = mysqli_query($conn4, $getName);
$getNameData = mysqli_fetch_assoc($getName);
?>
<?php if (ucwords($getNameData['name']) != "") {
    $name = ucwords($getNameData['name']);
} else {
    $name = "Anonymous";
} ?>
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
    <?php
    if ($getDataValue['metaDescription'] != "") {
    ?>
        <meta name="description" content="<?php echo $getDataValue['metaDescription'] ?>">
    <?php
    } else {
    ?>
        <meta name="description" content="Merolagi is a fresh startup which is website and app based and works on the concept of mapping technology to help you find products, services and realestate immediately around you. Everything is absolutely free">
    <?php
    }
    ?>
    <?php
    if ($getDataValue['metaKeyword'] != "") {
    ?>
        <meta name="keywords" content="<?php echo $getDataValue['metaKeyword'] ?>">
    <?php
    } else {
    ?>
        <meta name="keywords" content="merolagi, find a job, nepal, buy products">
    <?php
    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucwords($getDataValue['blogTitle']) ?></title>
</head>

<body>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
    $getSidebarData = "Select * FROM `blog` WHERE `status`='On' and `id`<>" . $productId . " Order By id DESC LIMIT 4";
    $getSidebarData = mysqli_query($conn5, $getSidebarData);
    ?>
    <div class="container-fluid" style="padding: 20px;padding-left:30px;padding-right:30px">
        <div class="l-main-container container-fluid">
            <div class="row no-gutters">
                <div class="col-md-9">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="container-fluid text-right d-flex flex-column">
                                <span class="l-blog-title"><?php echo $getDataValue['blogTitle'] ?></span>
                                <span class="l-blog-label">In <span class="l-blog-dark-label"> <?php echo ucwords($getDataValue['category']) ?></span> By <span class="l-blog-dark-label"><?php echo $name ?></span></span>
                                <span class="l-blog-date">-- <?php echo $getDataValue['createdDate'] ?></span>
                            </div>
                            <div class="addthis_inline_share_toolbox" style="margin-top: 40px;"></div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class='container-fluid'>
                                <img src="/res/database/blog/<?php echo $getDataValue['coverPhoto'] ?>" class="img-fluid" style="width:80%;margin:auto" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-3866603838151846" data-ad-slot="2538229970"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </div>
        <div class="l-main-container container-fluid">
            <div class="row no-gutters">
                <div class="col-md-9" style="padding-left:20px;padding-right:20px">

                    <div class="row no-gutters d-flex flex-column">
                        <span class="l-article-title">Article Written By <?php echo $name ?></span>
                        <span class="l-article-title">--<?php echo $getDataValue['createdDate'] ?></span>
                        <div class="article-div">
                            <?php echo $getDataValue['blogContent'] ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex flex-column">
                    <div class="container-fluid text-center" style="padding-top: 10px;">
                        <span class="l-blog-sidebar-title text-right container-fluid">Latest Blogs</span>
                    </div>
                    <?php
                    while ($getSidebarDataValue = mysqli_fetch_assoc($getSidebarData)) {
                    ?>
                        <a href="/blog/<?php echo $getSidebarDataValue['id'] ?>" class="l-sidebar-blog-div container-fluid text-center">
                            <div class="l-sidebar-blog-image container-fluid d-flex flex-column">
                                <img src="/res/database/blog/<?php echo $getSidebarDataValue['coverPhoto'] ?>" class=" l-sidebar-blog-image" alt="" srcset="">
                            </div>
                            <div class="l-sidebar-blog-title text-center"><?php echo ucwords($getSidebarDataValue['blogTitle']) ?></div>
                        </a>
                        <?php
                        $getSidebarDataValue = mysqli_fetch_assoc($getSidebarData);
                        if (isset($getSidebarDataValue)) {
                        ?>
                            <a href="/blog/<?php echo $getSidebarDataValue['id'] ?>" class="l-sidebar-blog-div container-fluid text-center">
                                <div class="l-sidebar-blog-image container-fluid d-flex flex-column">
                                    <img src="/res/database/blog/<?php echo $getSidebarDataValue['coverPhoto'] ?>" class=" l-sidebar-blog-image" alt="" srcset="">
                                </div>
                                <div class="l-sidebar-blog-title text-center"><?php echo ucwords($getSidebarDataValue['blogTitle']) ?></div>
                            </a>
                        <?php
                        }
                        ?>
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Blog Sidebar -->
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3866603838151846" data-ad-slot="1114301813" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    <?php

                    }
                    for($i=0;$i<4;$i++){
                    ?>
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
                    <?php
                    }
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
                </div>
            </div>
        </div>
    </div>
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
    
        </div>

    </div>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f5fae38bbc539bb"></script>
</body>

</html>