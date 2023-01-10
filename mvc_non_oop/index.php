<?php
require_once 'controller/product_controller.php';
require_once 'controller/nhanvien_controller.php';
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
switch ($url) {
    case '/' :
        //Điều hướng sang product_Controller
        echo list_product();
        break;
    case 'add-product' :
        //Điều hướng sang product controller
        echo add_product();
        break;
    case 'list-nhanvien' :
        //Điều hướng sang nhân viên controller
        echo list_nhanvien();
        break;
    case 'add-nhanvien' :
        //Điều hướng sang nhân viên controller
        echo add_nhanvien();
        header("location: index.php?url=list-nhanvien");
        break;
    case 'remove_nhanvien' :
        echo delete_nhanvien($_GET['id']);
        header("location: index.php?url=list-nhanvien");


        break;
}
?>
