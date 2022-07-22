<?php
include('../functions/myFunctions.php');

if(isset($_SESSION['auth'])){
    if($_SESSION['role_as'] != 1){
        redirect("../index.php","You are not autherized to accesss this page.");

    }
}else{
    redirect("../login.php","PLease login to continue");
}




?>