<?php
class Person{
    public $name;
    public $gender;
    public $address;
    public $birthOfDate;


}
class Student extends Person{
    public $id;
    public $avg;
    public $email;

    public function __construct($name,$gender,$address,$birthOfDate,$id,$avg,$email)
    {
        $this -> id = $id;
        $this -> avg = $avg;
        $this -> email = $email;
        $this -> name = $name;
        $this -> gender = $gender;
        $this -> address = $address;
        $this -> birthOfDate = $birthOfDate;
    }
    public function rank () {
        if($this->avg > 8) {
            echo "Có học bổng nha bé";
        }else{
            echo "Có cái nịt";
        }
    }
    public function showInfo() {
        echo "Họ và tên: " . $this ->name ."<br>";
        echo "Địa chỉ: " . $this ->address ."<br>";
        echo "Email: " . $this ->email ."<br>";
        echo "Học bổng:  " . $this ->rank() ."<br>";
        echo "Giới tính: " . $this ->gender ."<br>";
        echo "Năm sinh " . $this ->birthOfDate ."<br>";
        echo "Mã số sinh viên: " . $this ->id ."<br>";
    }
}

$student1=new Student("Phương","Nữ","Hà Nội","5/2/2001","PH21143",9,"phuong@aquarius.com");

$student1->showInfo();
?>