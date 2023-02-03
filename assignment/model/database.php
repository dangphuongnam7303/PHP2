<?php
namespace model;
require_once "env.php";
class DB
{
    public $connect;

// tạo kết nối từ project php sang mysql
    public function getConnect()
    {
        $connect = new PDO("mysql:host=" . DBHOST
            . ";dbname=" . DBNAME
            . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );
        return $connect;
    }
    public function __construct()
    {
        $this->connect = $this->getConnect();
    }
#nếu như sử dụng câu truy vấn select thì ko cần truyền tham số getall nữa
#nếu như sử dụng câu truy vấn thêm sửa xóa thì truyền là false vào
    public function getData($query, $getAll = true)
    {
        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll();
        }

        return $stmt->fetch();
    }
}
?>