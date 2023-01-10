<?php
require_once 'model/db.php';
function insert_nhanvien($name, $price) {
    $sql = "insert into nhanvien (name,salary) values ('$name', $price)";
    return getData($sql);
}
function get_nhanvien() {
    $sql = "select * from nhanvien ";
    return getData($sql);
}
function remove_nhanvien($id) {
    $sql = "delete from nhanvien where id = $id";
    return getData($sql);
}