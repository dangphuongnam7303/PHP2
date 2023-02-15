<?php
namespace model;
use PDO;

require_once "Models/env.php";
class database
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