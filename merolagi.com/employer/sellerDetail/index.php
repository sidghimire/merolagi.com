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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />


    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/default.min.css" />


    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';

    if (isset($_GET['update'])) {
        if ($_GET['update'] == "Successful") {
    ?>
            <script>
                alertify.alert("Successfully Updated Profile.").setHeader("Merolagi.com");
            </script>
    <?php
        }
    }

    ?>

    <?php
    $sqlGetCurrentSql = "SELECT * FROM `employer_profile` WHERE uniqueUserId='" . $_SESSION['employerId'] . "'";
    $sqlGetCurrentSql = mysqli_query($conn4, $sqlGetCurrentSql);
    $sqlGetCurrentSqlData = mysqli_fetch_assoc($sqlGetCurrentSql);

    $sqlGetCurrentAddress = "SELECT * FROM `employer_address_info` WHERE uniqueUserId='" . $_SESSION['employerId'] . "'";
    $sqlGetCurrentAddress = mysqli_query($conn4, $sqlGetCurrentAddress);
    $sqlGetCurrentAddressData = mysqli_fetch_assoc($sqlGetCurrentAddress);

    $sqlGetCurrentCompany = "SELECT * FROM `employer_company_info` WHERE uniqueUserId='" . $_SESSION['employerId'] . "'";
    $sqlGetCurrentCompany = mysqli_query($conn4, $sqlGetCurrentCompany);
    $sqlGetCurrentCompanyData = mysqli_fetch_assoc($sqlGetCurrentCompany);

    $sqlGetCurrentEmail = "SELECT email FROM `employer_login` WHERE uniqueUserId='" . $_SESSION['employerId'] . "'";
    $sqlGetCurrentEmail = mysqli_query($conn1, $sqlGetCurrentEmail);
    $sqlGetCurrentEmailData = mysqli_fetch_assoc($sqlGetCurrentEmail);
    ?>
    <div class=" l-container-title container-fluid text-left l-container-padding">
        <span class=" l-container-title-text">Seller Details</span>
    </div>
    <div class="l-container-padding text-center container-fluid">

        <div class=" l-main-container-section l-section-1 row no-gutters container-fluid" id="sellersDetail">
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
    </div>
</body>

</html>