<?php
namespace controller;
require_once 'Models/customer.php';
//extract($_REQUEST);
use model as mod;
class categories_controller
{
    function list_categories()
    {
        $cate = new mod\categories();
        $categories = $cate->get_category();
        include_once 'view/customer/show_category.php';
    }

    function edit_category($id, $name)
    {
        $cate = new mod\categories();
        $edit = $cate->edit_category($id, $name);
        include_once 'view/customer/edit_category.php';
    }
    function add_category($name)
    {
        $cate = new mod\categories();
        $cate->insert_category($name);
        include_once 'view/customer/add_category.php';
    }

    function delete_category($id)
    {
        $cate = new mod\categories($id);
        $cate->remove_category($id);
        include_once 'view/customer/show_category.php';
    }
}