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
    <script src="/employer/blog/addBlog/script.js"></script>
    <link rel="stylesheet" href="/header.css">
    <link rel="stylesheet" href="/employer/blog/addBlog/style.css">
    <script src="/res/packages/ckeditorFull/ckeditor.js"></script>
    
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/default.min.css" />

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blog</title>
</head>

<body>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';

    ?>
    <form action="/employer/blog/addBlog/action.php" method="POST" enctype="multipart/form-data" class="container-fluid l-main-container">
        <div class="d-flex">
            <span class="l-heading-title">
                Add Blog
            </span>
            <button type="submit" name="publish" class=" btn btn-primary btn-sm l-create-new-btn">Publish</button>
            <button class=" btn btn-warning btn-sm l-create-new-btn">Draft</button>
        </div>

        <div class="l-blog-container">
            <input type="text" maxlength="100" class="form-control w-100" placeholder="Blog Title" name="blogTitle" id="blog-title" required>
            <div class="row no-gutters l-blog-row">
                <div class="col-md-2 l-setting-column d-flex flex-column">
                    <span class="l-setting-title">Category</span>
                    <select class="form-control " name="category" required>
                        <option value="">Category</option>
                        <option value="Technology">Technology</option>
                        <option value="Medicine">Medicine</option>
                        <option value="Philosophy">Philosophy</option>
                    </select>
                    <span class="l-setting-title">Cover Photo</span>
                    <div id="imageDiv">
                        <input type="file" class="form-control" name="coverPhoto" id="coverPhoto" required>
                    </div>
                    <span class="l-setting-title">Meta Description</span>
                    <textarea class="form-control" name="metaDescription"></textarea>
                    <span class="l-setting-title">Meta Keywords</span>
                    <input type="text" name="metaKeyword" class="form-control" placeholder="Meta Keyword" maxlength="50">
                </div>
                <div class="col-md-10">
                    <div class="container-fluid l-blog-column">
                        <textarea name="blogContent" class="w-100" id="blogContent" rows="10" cols="90" placeholder="Blog Text (Write Your Blog Here)" required>Blog Content (Write Your Blog Here)</textarea>
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