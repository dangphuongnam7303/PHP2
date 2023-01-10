<?php
require_once 'model/product.php';
function list_product() {
    $products = get_product();
//    echo '<pre>';
    include_once "view/v_product.php";
//    var_dump($products);
//    die;
}
function add_product() {
    return "Đây là chức năng thêm sản phẩm";
}