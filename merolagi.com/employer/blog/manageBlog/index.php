<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
include $_SERVER['DOCUMENT_ROOT'] . "/res/important/employerSession.php";
//Global Imports
$getId = $_GET['blog'];
$checkAcc = 'SELECT * FROM `blog` WHERE `blogUniqueId`="' . $getId . '" and `userId`="' . $_SESSION['employerId'] . '"';
$checkAcc = mysqli_query($conn5, $checkAcc);
if (mysqli_num_rows($checkAcc)==0) {
    header("Location: /");
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
    <script src="/res/packages/ckeditorFull/ckeditor.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Management</title>
</head>

<body>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';

    $getData = "SELECT * FROM `blog` WHERE `blogUniqueId`='" . $getId . "' and `status`='On'";
    $getData = mysqli_query($conn5, $getData);
    $getDataValue = mysqli_fetch_assoc($getData);
    ?>
    <div class="container-fluid" style="padding:20px">
        <div class="container-fluid l-main-container">
            <div class="row no-gutters">
                <div class=" col-md-2 text-center">
                    <div class="card l-card-1">
                        <div class="container-fluid text-center l-card-view">
                            <?php
                            echo $getDataValue['views']
                            ?>
                        </div>
                        <div class="card-body text-center l-card-body">
                            Total Page Views
                        </div>
                    </div>
                </div>
                <div class=" col-md-2 text-center">
                    <div class="card l-card-1">
                        <div class="container-fluid text-center l-card-visitor">
                            <?php
                            echo $getDataValue['visitors']
                            ?>
                        </div>
                        <div class="card-body text-center l-card-body">
                            Total Visitors
                        </div>
                    </div>
                </div>
                <div class=" col-md-2 text-center">
                    <div class="card l-card-1">
                        <div class="container-fluid text-center l-card-revenue">
                            $<?php
                                echo $getDataValue['visitors'] * .010;
                                ?>
                        </div>
                        <div class="card-body text-center l-card-body">
                            Revenue
                        </div>
                    </div>
                </div>
                <div class=" col-md-2 text-center">
                    <div class="card l-card-1">
                        <div class="container-fluid text-center l-card-rpm">
                            $10
                        </div>
                        <div class="card-body text-center l-card-body">
                            RPM
                        </div>
                    </div>
                </div>
                <div class=" col-md-2 text-center">
                    <div class="card l-card-1">
                        <div class="container-fluid text-center l-card-rpm">
                            $<?php
                                echo "0.01";
                                ?>
                        </div>
                        <div class="card-body text-center l-card-body">
                            Per View
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid no-gutters" style="padding: 20px;">
                <div class="row no-gutters">
                    <div class="col-md-6 d-flex flex-column text-left">
                        <span class="l-blog-title">
                            <?php
                            echo ucwords($getDataValue['blogTitle'])
                            ?></span>
                        <span class="l-blog-date">Published Date:
                            <?php
                            echo $getDataValue['createdDate']
                            ?></span>
                        <div class=" d-flex">
                            <a href="/employer/blog/editBlog/<?php echo $getDataValue['blogUniqueId'] ?>" class="btn btn-primary btn-sm"><span class="fas fa-edit"></span> Edit</a>
                            <a href="" class="btn btn-danger btn-sm" data-target="#deleteBlog" data-toggle="modal"><span class="fas fa-trash"></span> Delete</a>
                            <a href="" class="btn btn-warning btn-sm"><span class="fas fa-low-vision"></span> Hide</a>
                        </div>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="deleteBlog" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Blog?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="/employer/blog/manageBlog/delete/<?php echo $getId ?>" class="btn btn-danger">Delete Blog</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>