<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
include $_SERVER['DOCUMENT_ROOT'] . "/res/important/employerSession.php";
//Global Imports
?>
<?php
if (isset($_GET['transactionId'])) {
    $sqlAuthCheck = "SELECT * FROM `deal_services` WHERE transactionId='" . $_GET['transactionId'] . "'";
    $sqlAuthCheck = mysqli_query($conn3, $sqlAuthCheck);
    $sqlAuthCheckData = mysqli_fetch_assoc($sqlAuthCheck);

    $sqlAuthCheck2 = "SELECT employerUniqueId FROM `service_info` WHERE `productUniqueId`='" . $sqlAuthCheckData['productId'] . "'";
    $sqlAuthCheck2 = mysqli_query($conn2, $sqlAuthCheck2);
    $sqlAuthCheckData2 = mysqli_fetch_assoc($sqlAuthCheck2);

    if ($_SESSION['employerId'] == $sqlAuthCheckData['customerId'] or $_SESSION['employerId'] == $sqlAuthCheckData2['employerUniqueId']) {
    } else {
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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';

    ?>
    <div class="container-fluid">
        <div class="row no-gutters text-left ">
            <a href="/employer/managePost/responses/index.php?productId=<?php echo $_GET['productId'] ?>" class="col-2">
                <div class="l-title-row">
                    <span class="fas fa-arrow-circle-left fa-2x l-fa-icon"></span>
                </div>
            </a>
            <span class="col-10 l-title-text">
                <div class="l-title-row">
                    MineChat
                </div>
            </span>
        </div>
    </div>
    <?php
    $sqlAllPost = "SELECT * FROM `service_info` WHERE productUniqueId='" . $_GET['productId'] . "'";
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
                                <div class="l-product-feature">Service :</div>
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
                                <div class="l-product-label"><?php echo ucwords($sqlAllPostData['serviceName']) ?></div>
                            </div>
                            <div class="l-feature-unit">
                                <div class="l-product-label"><?php echo $sqlAllPostData['currency'] ?><?php echo $sqlAllPostData['price'] ?></div>
                            </div>
                            <div class="l-feature-unit">
                                <div class="l-product-label"><?php echo $sqlAllPostData['createdDate'] ?></div>
                            </div>
                        </div>
                    </div>
                    <a href="/servicedetail/<?php echo $sqlAllPostData['id'] ?>" target="_blank" class="l-view-post-btn btn btn-primary">
                        View Post
                    </a>
                    <div class="l-title-text-2">
                        User Information:
                    </div>
                    <div class="row no-gutters">
                        <div class="l-product-description-div col-5">
                            <div class="l-feature-unit">
                                <div class="l-product-feature">Email :</div>
                            </div>
                            <div class="l-feature-unit">
                                <div class="l-product-feature">Number :</div>
                            </div>
                            <div class="l-feature-unit">
                                <div class="l-product-feature">Location :</div>
                            </div>
                        </div>
                        <?php
                        $transactionId = $_GET['transactionId'];
                        $sqlUserInfo = "SELECT * FROM `deal_services` WHERE transactionId='" . $transactionId . "'";
                        $sqlUserInfo = mysqli_query($conn3, $sqlUserInfo);
                        $sqlUserInfoData = mysqli_fetch_assoc($sqlUserInfo);
                        $getEmail = "SELECT email FROM `employer_login` WHERE uniqueUserId='" . $sqlUserInfoData['customerId'] . "'";
                        $getEmail = mysqli_query($conn1, $getEmail);
                        $getEmailData = mysqli_fetch_assoc($getEmail);

                        if ($_SESSION['employerId'] != $sqlUserInfoData['customerId']) {
                            $getEmployerId = "SELECT employerUniqueId FROM service_info` where productUniqueId='" . $_GET['productId'] . "'";
                            $getEmployerId = mysqli_query($conn2, $getEmployerId);
                            $getEmployerIdData = mysqli_fetch_assoc($getEmployerId);
                            $sendTo = $getEmployerIdData['employerUniqueId'];
                        } else {
                            $sendTo = $sqlUserInfoData['customerId'];
                        }
                        ?>
                        <div class="l-product-description-div col-7">
                            <div class="l-feature-unit">
                                <div class="l-product-label"><?php echo $getEmailData['email'] ?></div>
                            </div>
                            <div class="l-feature-unit">
                                <div class="l-product-label"><?php echo $sqlUserInfoData['phone'] ?>/<?php echo $sqlAllPostData['price'] ?></div>
                            </div>
                            <div class="l-feature-unit">
                                <div class="l-product-label"><?php echo $sqlUserInfoData['address'] ?></div>
                            </div>
                        </div>
                    </div>
                    <a href="/frontend/serviceDetail/index.php?productId=<?php echo $sqlAllPostData['productUniqueId'] ?>" target="_blank" class="l-view-post-btn btn btn-warning">
                        <span class="fas fa-map-marked-alt"></span>
                        Location
                    </a>
                </div>

            </div>
            <div class="col-md-8" style="overflow-x: scroll;">
                <div class="l-responses-div">
                    <div class="l-message-title row no-gutters">
                        Message Service
                    </div>
                    <div class="message-div">

                        <?php
                        $sqlGetMessage = "SELECT * FROM `service_message` WHERE transactionId='" . $_GET['transactionId'] . "' order by id limit 10";
                        $sqlGetMessage = mysqli_query($conn5, $sqlGetMessage);
                        while ($sqlGetMessageData = mysqli_fetch_assoc($sqlGetMessage)) {
                            if ($sqlGetMessageData['sentTo'] == $_SESSION['employerId']) {
                        ?>
                                <div class="container-fluid l-msg-div no-gutters text-left">
                                    <span class="text-left myMsg ">
                                        <?php
                                        echo $sqlGetMessageData['message'];
                                        ?>
                                    </span>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="container-fluid l-msg-div no-gutters text-right">
                                    <span class="text-right receivedMsg ">
                                        <?php
                                        echo $sqlGetMessageData['message'];
                                        ?>
                                    </span>
                                </div>
                            <?php
                            }
                            ?>
                        <?php
                        }
                        ?>

                        <script>
                            setInterval(function() {
                                $(".message-div").load("getMessage.php", {
                                    transactionId: "<?php echo $_GET['transactionId'] ?>"
                                });
                                document.getElementsByClassName('message-div').lastChild.scrollIntoView(false)

                            }, 1000);
                        </script>
                    </div>
                    <form method="POST" action="insert.php" id="sendForm" class="message-input-div row no-gutters">
                        <textarea type="text" name="message" id="message" required class="form-control l-text-message-field col-md-10" placeholder="TextMessage"></textarea>
                        <div class="col-1">
                            <input type="submit" class="form-control btn btn-success l-send-btn" value="SEND">
                        </div>
                    </form>
                    <script>
                        $("#sendForm").submit(function(e) {
                            e.preventDefault();
                            $.post(
                                'insertMessage.php', {
                                    message: $("#message").val(),
                                    sentBy: "<?php echo $_SESSION['employerId'] ?>",
                                    sendTo: "<?php echo $sendTo ?>",
                                    transactionId: "<?php echo $_GET['transactionId'] ?>"
                                },
                                function(result) {
                                    if (result == "success") {

                                    } {

                                    }
                                }
                            );
                            $("#message").val("");

                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</body>

</html>