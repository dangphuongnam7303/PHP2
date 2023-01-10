<?php
require_once 'model/nhanvien.php';
function list_nhanvien() {
    $nhanviens = get_nhanvien();
    include_once "view/v_nhanvien.php";
}
function add_nhanvien() {
    $add = insert_nhanvien($_POST['name'], $_POST['salary']);
    include_once "view/v_add_nhanvien.php";
}
function delete_nhanvien($id) {
    $remove = remove_nhanvien($id);
}
?>
