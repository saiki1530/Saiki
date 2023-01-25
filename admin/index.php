<?php
session_start();
ob_start();
error_reporting(0);

include "./model/connectdb.php";
include "./admin/view/header.php";
include "./model/user.php";
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
       


        default:
            include "view/manage_product.php";
            break;
    }
} else {
    include "view/manage_product.php";
}
include "./admin/view/footer.php";
?>