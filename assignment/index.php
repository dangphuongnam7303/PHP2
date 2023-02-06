<?php
require_once 'controller/categories_controller.php';
use controller as ctrl;
$cate = new ctrl\categories_controller();
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
switch ($url) {
    case '/' :
        echo $cate -> list_categories();
        break;
    case 'add-category' :
        echo $cate -> add_category($_POST['name']);
        header("location: index.php?url=list-category");
        break;
    case 'list-category' :
        echo $cate -> list_categories() ;
        break;
    case 'edit-category' :
        echo $cate -> edit_category($_POST['id'], $_POST['name']);
        header("location: index.php?url=list-category");
        break;
    case 'remove-category' :
        echo $cate -> delete_category($_GET['id']);
        header("location: index.php?url=list-category");
        break;
}

