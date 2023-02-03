<?php
namespace controller;
require_once 'model/categories.php';
use model as mod;
class categories_controller
{
    function list_categories()
    {
        $cate = new mod\categories(null,null);
        $categories = $cate->get_category();
        include_once 'view/categories/show_category.php';
    }

    function edit_category()
    {
        $cate = new categories($_POST['id'], null);
        $cate->edit_category();
        include_once 'view/categories/edit_category.php';
    }

    function add_category()
    {
        $cate = new categories(null, $_POST['name']);
        $cate->insert_category();
        include_once 'view/categories/add_category.php';
    }

    function delete_category()
    {
        $cate = new categories($_POST['id'], null);
        $cate->remove_category();
        include_once 'view/categories/show_category.php';
    }
}