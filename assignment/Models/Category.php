<?php
namespace model;
require_once 'Models/database.php';
class categories extends database {

    function insert_category ($name) {
        $sql = "insert into customer (name) values ('$name')";
        return $this->getData($sql);
    }
    function get_category () {
        $sql = "SELECT * FROM customer";
        return $this->getData($sql);
    }
    function edit_category($id, $name) {
        $sql = "UPDATE customer SET name = '$name' WHERE id=$id";
        return $this->getData($sql);
    }
    function remove_category($id) {
        $sql = "DELETE FROM customer WHERE id=$id";
        return $this->getData($sql);
    }
}


