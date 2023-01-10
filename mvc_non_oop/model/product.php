<?php
require_once 'model/db.php';
function get_product() {
    $sql = "select * from products ";
    return getData($sql);
}
?>
