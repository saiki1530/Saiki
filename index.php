<?php
session_start();
ob_start();
error_reporting(0);
include "./model/connectdb.php";
include "./view/header.php";
include "./model/user.php";
If(isset($_GET['act'])){
    switch ($_GET['act']) {
    case 'dangnhap':
        include "login.php";
        break;
   
               
               
       
    default:
        include "view/home.php";
        break;
}

}else{
    include "view/home.php";
}
include "view/footer.php";
?>
