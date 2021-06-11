<?php
session_start();

if(isset($_COOKIE["cookieEmail"]) and isset($_COOKIE["cookieId"])){
    if($_COOKIE["cookieEmail"]=="" or $_COOKIE["cookieId"]==""){
        
    }else{
    $_SESSION['employerEmail'] =$_COOKIE["cookieEmail"];
    $_SESSION['employerId'] = $_COOKIE["cookieId"];
    }
} else{
}
$SITE_NAME="MeroLagi";
$SITE_URL="merolagi.com";
$conn1=new mysqli("localhost:3306","ccsnea2i_merocom","123456789","ccsnea2i_merolagi_user_info");
$conn2=new mysqli("localhost:3306","ccsnea2i_merocom","123456789","ccsnea2i_merolagi_product_info");
$conn3=new mysqli("localhost:3306","ccsnea2i_merocom","123456789","ccsnea2i_merolagi_product_transaction");
$conn4=new mysqli("localhost:3306","ccsnea2i_merocom","123456789","ccsnea2i_merolagi_employer_info");
$conn5=new mysqli("localhost:3306","ccsnea2i_merocom","123456789","ccsnea2i_merolagi_employer_message");


?>
