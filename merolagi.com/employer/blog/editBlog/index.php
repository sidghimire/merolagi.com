<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
include $_SERVER['DOCUMENT_ROOT'] . "/res/important/employerSession.php";
//Global Imports
$blogId = $_GET['blog'];

$getBlog = "SELECT * FROM `blog` WHERE `blogUniqueId`='" . $blogId . "'";
$getBlog = mysqli_query($conn5, $getBlog);
$getBlogData = mysqli_fetch_assoc($getBlog);
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
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/default.min.css" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>
</head>

<body>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';

    ?>
    <form action="/employer/blog/editBlog/action.php?blog=<?php echo $blogId ?>" method="POST" enctype="multipart/form-data" class="container-fluid l-main-container">
        <div class="d-flex">
            <span class="l-heading-title">
                Add Blog
            </span>
            <button type="submit" name="publish" class=" btn btn-primary btn-sm l-create-new-btn">Update</button>
            <button class=" btn btn-warning btn-sm l-create-new-btn">Draft</button>
        </div>

        <div class="l-blog-container">
            <input type="text" maxlength="100" class="form-control w-100" placeholder="Blog Title" name="blogTitle" id="blog-title" value="<?php echo ucwords($getBlogData['blogTitle']) ?>" required>
            <div class="row no-gutters l-blog-row">
                <div class="col-md-2 l-setting-column d-flex flex-column">
                    <span class="l-setting-title">Category</span>
                    <select class="form-control " name="category" id="" required>
                        <option value="<?php echo ucwords($getBlogData['category']) ?>"><?php echo ucwords($getBlogData['category']) ?></option>
                        <option value="Technology">Technology</option>
                    </select>
                    <span class="l-setting-title">Cover Photo</span>
                    <div id="imageDiv">
                        <input type="file" class="form-control" name="coverPhoto" id="coverPhoto" >
                    </div>
                    <img src="/res/database/blog/<?php echo $getBlogData['coverPhoto'] ?>" class="img-fluid" style="margin: 20px;">
                    <span class="l-setting-title">Meta Description</span>
                    <textarea class="form-control" name="metaDescription" id=""><?php echo ucwords($getBlogData['metaDescription']) ?></textarea>
                    <span class="l-setting-title">Meta Keywords</span>
                    <input type="text" name="metaKeyword" class="form-control" placeholder="Meta Keyword" value="<?php echo ucwords($getBlogData['metaKeyword']) ?>" maxlength="50">
                </div>
                <div class="col-md-10">
                    <div class="container-fluid l-blog-column">
                        <textarea name="blogContent" class="w-100" id="blogContent" rows="10" cols="90" required><?php echo ucwords($getBlogData['blogContent']) ?></textarea>
                        <script>
                            // Replace the <textarea id="editor1"> with a CKEditor 4
                            // instance, using default configuration.
                            CKEDITOR.replace('blogContent');
                        </script>
                    </div>
                </div>

            </div>
        </div>
    </form>
</body>

</html>