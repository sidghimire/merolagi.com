<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
include $_SERVER['DOCUMENT_ROOT'] . "/res/important/userSession.php";
//Global Imports
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/res/imports/index.php";
    ?>
    <link rel="stylesheet" href="/frontend/header/header.css">
    <script src="/frontend/header/index.js"></script>
   

    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . 'frontend/header/header.php';
    $sqlGetCurrentSql = "SELECT * FROM `user_profile` WHERE uniqueUserId='" . $_SESSION['userId'] . "'";
    $sqlGetCurrentSql = mysqli_query($conn3, $sqlGetCurrentSql);
    $sqlGetCurrentSqlData = mysqli_fetch_assoc($sqlGetCurrentSql);

    $sqlGetCurrentAddress = "SELECT * FROM `user_address_info` WHERE uniqueUserId='" . $_SESSION['userId'] . "'";
    $sqlGetCurrentAddress = mysqli_query($conn3, $sqlGetCurrentAddress);
    $sqlGetCurrentAddressData = mysqli_fetch_assoc($sqlGetCurrentAddress);

    $sqlGetCurrentCompany = "SELECT * FROM `user_company_info` WHERE uniqueUserId='" . $_SESSION['userId'] . "'";
    $sqlGetCurrentCompany = mysqli_query($conn3, $sqlGetCurrentCompany);
    $sqlGetCurrentCompanyData = mysqli_fetch_assoc($sqlGetCurrentCompany);

    $sqlGetCurrentEmail = "SELECT email FROM `general_login` WHERE uniqueUserId='" . $_SESSION['userId'] . "'";
    $sqlGetCurrentEmail = mysqli_query($conn1, $sqlGetCurrentEmail);
    $sqlGetCurrentEmailData = mysqli_fetch_assoc($sqlGetCurrentEmail);
    ?>

    <div class="l-main-container-header row no-gutters container-fluid bg-dark">
        <div class="col-4 text-center ">
            <span class="l-main-continer-header-text l-active-header" id="activateProfile">Profile</span>
        </div>
        <div class="col-4 text-center">
            <span class="l-main-continer-header-text" id="activateMessage">Message</span>
        </div>
        <div class="col-4 text-center">
            <span class="l-main-continer-header-text" id="activateSetting">Setting</span>
        </div>
    </div>
    <div class="l-main-container-section l-section-1 row no-gutters container-fluid bg-light" id="profileDiv">
        <div class="col-md-12">
            <span class="l-crimson-title">Profile</span>
            <form action="action.php" method="POST" class="row no-gutters" enctype="multipart/form-data">
                <div class="col-md-6">
                    <span class="form-control-unit">
                        <input type="text" class="form-control l-form-control-text-1" placeholder="Name" name="name" value="<?php echo $sqlGetCurrentSqlData['name'] ?>" required>
                    </span>
                    <span class="form-control-unit">
                        <input type="text" class="form-control l-form-control-text-1" placeholder="Mobile Number" name="mobileNumber" value="<?php echo $sqlGetCurrentSqlData['mobile'] ?>">
                    </span>
                    <span class="form-control-unit">
                        <input type="text" class="form-control l-form-control-text-1 l-email-verified" placeholder="Email" value="<?php echo $sqlGetCurrentEmailData['email'] ?>" readonly>
                    </span>
                </div>
                <div class="col-md-6">
                    <span class="form-control-unit">
                        <input type="text" class="form-control l-form-control-text-1" placeholder="Alternate Mobile Number" name="alternateMobile" value="<?php echo $sqlGetCurrentSqlData['alternateMobile'] ?>">

                    </span>
                    <span class="form-control-unit">
                        <input type="text" class="form-control l-form-control-text-1" placeholder="Alternate Email Id" name="alternateEmail" value="<?php echo $sqlGetCurrentSqlData['alternateEmail'] ?>">
                    </span>
                    <span class="form-control-unit row" id="imageDiv">
                        <span style="color:Blue;text-decoration:underline">Photo</span>
                        <input type="file" class="form-control l-form-control-text-1" id="uploadImage" name="profileImage">
                    </span>
                </div>
                <button type="submit" class="btn btn-primary container-fluid l-save-btn" name="saveProfile">Save</button>
            </form>
        </div>
        <div class="col-md-12 l-profile-body-margin">
            <span class="l-crimson-title">Address Information</span>
            <form action="action.php" method="POST" class="row">
                <div class="col-md-6">
                    <span class="form-control-unit">
                        <input type="text" class="form-control l-form-control-text-1" placeholder="House No" name="houseNo" value="<?php echo $sqlGetCurrentAddressData['houseNo'] ?>">
                    </span>
                    <span class="form-control-unit">
                        <input type="text" class="form-control l-form-control-text-1" placeholder="City" name="city" value="<?php echo $sqlGetCurrentAddressData['city'] ?>">
                    </span>
                    <span class="form-control-unit">
                        <input type="text" class="form-control l-form-control-text-1" placeholder="Street" name="street" value="<?php echo $sqlGetCurrentAddressData['street'] ?>">
                    </span>
                </div>
                <div class="col-md-6">
                    <span class="form-control-unit">
                        <input type="text" class="form-control l-form-control-text-1" placeholder="State" name="state" value="<?php echo $sqlGetCurrentAddressData['state'] ?>">
                    </span>
                    <span class="form-control-unit">
                        <input type="text" class="form-control l-form-control-text-1" placeholder="Zip Code" name="zipCode" value="<?php echo $sqlGetCurrentAddressData['zipCode'] ?>">
                    </span>
                    <span class="form-control-unit">
                        <input type="text" class="form-control l-form-control-text-1" placeholder="Country" name="country" value="<?php echo $sqlGetCurrentAddressData['country'] ?>">
                    </span>
                </div>
                <button type="submit" name="addressSave" class="btn btn-primary container-fluid l-save-btn">Save</button>
            </form>
        </div>
        <div class="col-md-12 l-profile-body-margin">
            <span class="l-crimson-title">Company Information</span>
            <form action="action.php" method="POST" class="row">
                <div class="col-md-6">
                    <span class="form-control-unit">
                        <input type="text" class="form-control l-form-control-text-1" placeholder="Company Name" name="companyName" value="<?php echo $sqlGetCurrentCompanyData['companyName'] ?>">
                    </span>
                    <span class="form-control-unit">
                        <input type="text" class="form-control l-form-control-text-1" placeholder="Designation/ Job Title" name="designation" value="<?php echo $sqlGetCurrentCompanyData['designation'] ?>">
                    </span>
                    <span class="form-control-unit">
                        <input type="text" class="form-control l-form-control-text-1" placeholder="Website" name="website" value="<?php echo $sqlGetCurrentCompanyData['website'] ?>">
                    </span>
                </div>
                <div class="col-md-6">
                    <span class="form-control-unit">
                        <input type="text" class="form-control l-form-control-text-1" placeholder="Alternate Website" name="alternateWebsite" value="<?php echo $sqlGetCurrentCompanyData['alternateWebsite'] ?>">
                    </span>

                </div>
                <button type="submit" name="companySave" class="btn btn-primary container-fluid l-save-btn">Save</button>
            </form>
        </div>
    </div>

</body>

</html>