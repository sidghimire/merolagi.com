<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
//Global Imports
?>
<thead class=" thead-dark sticky-top">
    <th scope="col"><span class="l-thead">SN.</span></th>
    <th scope="col"><span class="l-thead">Item</span></th>
    <th scope="col"><span class="l-thead"></span></th>
    <th scope="col"><span class="l-thead">Quantity</span></th>
    <th scope="col"><span class="l-thead">Date</span></th>
    <th scope="col" class="text-right"><span class="l-thead">Controls</span></th>
</thead>
<tbody>
    <?php
    $sqlAllPost = "SELECT * FROM `deal_product` WHERE customerId='" . $_SESSION['employerId'] . "' ORDER BY id DESC";
    $sqlAllPost = mysqli_query($conn3, $sqlAllPost);

    $i = 1;
    while ($sqlAllPostData = mysqli_fetch_assoc($sqlAllPost)) {
        $sqlProductInfo = "SELECT * FROM `product_info` WHERE productUniqueId='" . $sqlAllPostData['productId'] . "'";
        $sqlProductInfo = mysqli_query($conn2, $sqlProductInfo);
        $sqlProductInfoData = mysqli_fetch_assoc($sqlProductInfo);
    ?>
        <tr>
            <th scope="col" colspan="1"><?php echo $i; ?></th>
            <th scope="col" colspan="2"><span class="l-post-title"><a href="/frontend/productDetail/index.php?productId=<?php echo $sqlProductInfoData['productUniqueId'] ?>"><?php echo ucwords($sqlProductInfoData['productName']) ?></a></span></th>
            <th scope="col"><span class="l-post-title"><?php echo $sqlAllPostData['quantity']; ?></span></th>
            <th scope="col"><span class="l-post-title"><?php echo $sqlAllPostData['createdDate']; ?></span></th>
            <th scope="col" class="text-right"><a target="_blank" href="/employer/minechatUser/index.php?productId=<?php echo $sqlProductInfoData['productUniqueId'] ?>&transactionId=<?php echo $sqlAllPostData['transactionId'] ?>"><button type="button" class="btn btn-info btn-sm"><span class="fas fa-comments"></button></span></a><a href=""><button type="button" class="btn btn-warning btn-sm"><span class="fas fa-address-card"></button></span></a><a href=""><button type="button" class="btn btn-info btn-sm"><span class="fas fa-tasks"></button></span></a><a href=""><button type="button" class="btn btn-secondary btn-sm"><span class="fas fa-question-circle"></button></span></a></th>
        </tr>
    <?php
        $i++;
    }
    ?>
</tbody>