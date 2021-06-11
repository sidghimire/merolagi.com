<?php
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
$searchedText = $_POST['search'];
if (!isset($_POST['categories'])) {
    $sqlSearchList = "SELECT * FROM `service_info` WHERE (`serviceName` SOUNDS LIKE '%" . $searchedText . "%' OR `serviceName` LIKE '%" . $searchedText . "%' OR `category` SOUNDS LIKE '%" . $searchedText . "%' OR `category` LIKE '%" . $searchedText . "%' OR `serviceDescription` SOUNDS LIKE '%" . $searchedText . "%' OR `serviceDescription` LIKE '%" . $searchedText . "%') and 'display'='' ORDER BY id DESC";
} else {
    $categories = $_POST['categories'];
    $sqlSearchList = "SELECT * FROM `service_info` WHERE (`serviceName` SOUNDS LIKE '%" . $searchedText . "%' OR `serviceName` LIKE '%" . $searchedText . "%' OR `category` SOUNDS LIKE '%" . $searchedText . "%' OR `category` LIKE '%" . $searchedText . "%' OR `serviceDescription` SOUNDS LIKE '%" . $searchedText . "%' OR `serviceDescription` LIKE '%" . $searchedText . "%') and category IN ('" . implode(",", $_POST['categories']) . "') and 'display'='' ORDER BY id DESC";
}
$sqlSearchList = mysqli_query($conn2, $sqlSearchList);
?>

<script>
$('#totalService').text('(<?php echo mysqli_num_rows($sqlSearchList); ?> services available)');
</script>

<?php
while ($sqlSearchListData = mysqli_fetch_assoc($sqlSearchList)) {
    $sqlSearchListImage = "SELECT * FROM `service_images` WHERE `productUniqueId`='" . $sqlSearchListData['productUniqueId'] . "'";
    $sqlSearchListImage = mysqli_query($conn2, $sqlSearchListImage);
    $sqlSearchListImageData = mysqli_fetch_assoc($sqlSearchListImage);

?>
    <div class="col-md-3">
        <div class="l-product-div">
            <a href="/frontend/serviceDetail/index.php?productId=<?php echo $sqlSearchListData['productUniqueId'] ?>">
                <div class="l-product-image-div">
                    <img src="/res/database/serviceImages/<?php echo $sqlSearchListImageData['imageName'] ?>" class="img-fluid row no-gutters text-left l-product-image" alt="<?php echo ucwords($sqlSearchListData['serviceName']); ?>">
                </div>
                <div class="row no-gutters l-product-description">
                    <span class="col-md-12 l-product-name"><?php echo ucwords($sqlSearchListData['serviceName']); ?></span>
                    <span class="col-md-12 l-product-address"><?php echo ucwords($sqlSearchListData['address']); ?></span>
                    <span class="col-md-12 l-product-currency"><?php echo ucwords($sqlSearchListData['currency']); ?> <span class="l-product-price"><?php echo ucwords($sqlSearchListData['price']); ?></span></span>
                </div>
            </a>

            <button class="container-fluid no-gutters btn btn-primary l-neogtiate-btn">Negotiate</button>

        </div>
    </div>
<?php
}
?>