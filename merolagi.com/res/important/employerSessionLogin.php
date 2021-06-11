<?php
if(isset($_SESSION['employerId'])){
    if($_SESSION['employerId']==""){
        header("Location: /login");
    }else{
        header("Location: /employer/dashboard/");

    }
}

