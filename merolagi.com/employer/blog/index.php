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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Blog</title>
</head>

<body>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';

    ?>
    <div class="container-fluid l-main-container">
        <div class="d-flex">
            <span class="l-heading-title">
                Manage Blogs
            </span>
            <a href="/employer/blog/addBlog/" class=" btn btn-primary btn-sm l-create-new-btn">Create New <span class="fas fa-arrow-right"></span></a>
        </div>
        <?php
        $getBlog = "SELECT * FROM `blog` WHERE `userId`='" . $_SESSION['employerId'] . "' and `status`='On' order by id desc";
        $getBlog = mysqli_query($conn5, $getBlog);
        $i = 1;
        ?>
        <table class="table-sm table table-striped l-table">
            <thead class=" thead-dark">
                <th class="text-center"></th>
                <th class="text-center">Blog Title</th>
                <th class="text-center">Category</th>
                <th class="text-center">Published:</th>
                <th class="text-center"></th>
            </thead>
            <tbody>
                <?php
                while ($getBlogData = mysqli_fetch_assoc($getBlog)) {
                ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td class="text-center"><a href="/blog/<?php echo $getBlogData['id'] ?>"><?php echo ucwords($getBlogData['blogTitle']) ?></a></td>
                        <td class="text-center">(<?php echo ucwords($getBlogData['category']) ?>)</td>
                        <td class="text-center">(<?php echo ucwords($getBlogData['createdDate']) ?>)</td>
                        <td class="text-center"><a href="/employer/blog/manageBlog/<?php echo $getBlogData['blogUniqueId'] ?>" class="btn btn-secondary btn-sm">Manage</a></td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>