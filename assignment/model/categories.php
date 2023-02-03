<?php
namespace model;
require_once 'model/database.php';
class categories extends db {
    private $id;
    private $name;

    //Hàm gán giá trị
    public function __construct($id, $name)
    {
        $this -> name = $name;
        $this -> id = $id;
    }
    //Hàm lấy giá trị (vì để private)
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    //Hàm set giá trị (dùng khi set giá trị ở files khác)
    public function setName($name): void
    {
        $this->name = $name;
    }

    function insert_category () {
        $sql = "INSERT INTO categories (name) VALUES '$this->name'";
        return $this->getData($sql);
    }
    function get_category () {
        $sql = "SELECT * FROM categories";
        return $this->getData($sql);
    }
    function edit_category() {
        $sql = "UPDATE categories SET name = '$this->name' WHERE id=$this->id";
        return $this->getData($sql);
    }
    function remove_category() {
        $sql = "DELETE FROM categories WHERE id=$this->id";
        return $this->getData($sql);
    }
}


