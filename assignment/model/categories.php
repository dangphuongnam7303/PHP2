<?php
namespace model;
require_once 'model/database.php';
class categories extends database {

    function insert_category ($name) {
        $sql = "insert into categories (name) values ('$name')";
        return $this->getData($sql);
    }
    function get_category () {
        $sql = "SELECT * FROM categories";
        return $this->getData($sql);
    }
    function edit_category($id, $name) {
        $sql = "UPDATE categories SET name = '$name' WHERE id=$id";
        return $this->getData($sql);
    }
    function remove_category($id) {
        $sql = "DELETE FROM categories WHERE id=$id";
        return $this->getData($sql);
    }
}


