<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
include $_SERVER['DOCUMENT_ROOT'] . "/res/important/employerSession.php";
//Global Imports

$sqlGetMessage = "SELECT * FROM `service_message` WHERE transactionId='" . $_POST['transactionId'] . "' order by id limit 10";
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