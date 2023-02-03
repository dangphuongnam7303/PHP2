<?php
require_once 'controller/categories_controller.php';
use controller as ctrl;
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
switch ($url) {
    case '/' :
        $cate = new ctrl\categories_controller();
        echo $cate -> list_categories();
        break;
    case 'add-category' :
        echo add_category();
        break;
    case 'list-category' :
        echo list_categories();
        break;
    case 'add-category' :
        echo add_category();
        header("location: index.php?url=list-category");
        break;
    case 'remove-category' :
        echo delete_category($_GET['id']);
        header("location: index.php?url=list-category");
        break;
}

