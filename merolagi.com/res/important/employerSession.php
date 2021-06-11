<?php
if(isset($_SESSION['employerId'])){
    if($_SESSION['employerId']==""){
        header("Location: /login");
    }else{

    }

}else{
    header("Location: /login");

}

